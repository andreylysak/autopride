<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык 
    	Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale
    }
    return redirect()->back();                              # Редиректим его <s>взад</s> на ту же страницу
});

Route::get('/', function () {
    $services = App\Service::all()->where('status', '=', 'ACTIVE');
    $cars = App\Car::homeRentFormCars();
    $index = 0;
    foreach($cars as $car) {
        $short_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'short_term_rental')->get()->toArray();
        if ($short_term_rental_price) {
            $day_rent_price = $short_term_rental_price[0]['rent_price'];
            $cars[$index]->day_rent_price = $day_rent_price;
        } else {
            $cars[$index]->day_rent_price = NULL;
        }
        $index++;
    }
    return view('home', compact('services', 'cars'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/news', function () {
    $posts = App\Posts::paginate(5);
    return view('articles', compact('posts'));
});

Route::get('news/{slug}', function($slug){
	$post = App\Posts::where('slug', '=', $slug)->firstOrFail();
	return view('article', compact('post'));
});

Route::get('/pages', function () {
    $pages = App\Pages::all()->where('status', '=', 'ACTIVE');
    return view('pages', compact('pages'));
});

Route::get('pages/{slug}', function($slug){
	$page = App\Pages::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
	return view('page', compact('page'));
});

Route::get('/featured-services', function () {
    $services = App\Service::all()->where('status', '=', 'ACTIVE')->where('featured', '=', '1');
    return view('featured_services', compact('services'));
});

Route::get('/services', function () {
    $services = App\Service::all()->where('status', '=', 'ACTIVE');
    return view('services', compact('services'));
});

Route::get('services/{url}', function($url){
    $service = App\Service::where('url', '=', $url)->where('status', '=', 'ACTIVE')->firstOrFail();
    $testimonials = App\Testimonial::where('page_url', '=', $url)->where('status', '=', 'enable')->get()->toArray();
	return view('service', compact('service', 'testimonials'));
});

Route::resource('testimonials', 'Controller');
Route::post('testimonials', 'Controller@createReview');

Route::get('/reviews', function () {
    $testimonials = App\Testimonial::where('status', '=', 'enable')->get()->toArray();
    return view('reviews', compact('testimonials'));
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::resource('messages', 'Controller');
Route::post('messages', 'Controller@contactForm');

/* Partner */

Route::get('/partner', function () {
    return view('partner');
});

Route::resource('carrier_registration', 'Controller');
Route::post('carrier_registration', 'Controller@carrierRegistration');

/* Autopark */

Route::get('/autopark', function () {
    $cars = App\Car::all();
    $index = 0;
    foreach($cars as $car) {
        $short_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'short_term_rental')->get()->toArray();
        if ($short_term_rental_price) {
            $cars[$index]['month_rent_price'] = $short_term_rental_price[0]['rent_price'];
        }
        $index++;
    }
    return view('autopark', compact('cars'));
});

Route::get('autopark/{url}', function($url){
    $car = App\Car::where('url', '=', $url)->firstOrFail();
    $short_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'short_term_rental')->get()->toArray();
    $long_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'long_term_rental')->get()->toArray();
	return view('rent_car', compact('car', 'short_term_rental_price', 'long_term_rental_price'));
});

Route::get('autopark/rent/{id}', function($id){
    $car = App\Car::where('id', '=', $id)->firstOrFail();
    $short_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'short_term_rental')->get()->toArray();
    $long_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'long_term_rental')->get()->toArray();
	return view('car_reservation', compact('car', 'short_term_rental_price', 'long_term_rental_price'));
});

Route::resource('rent_car', 'Controller');
Route::post('rent_car', 'Controller@rentCar');

Route::get('/rent-success', function () {
    return view('rent_success');
});

/* Order service */

Route::get('services/order-service/{id}', function ($id) {
    $service = App\Service::where('id', '=', $id)->firstOrFail();
    $order_id = rand(10000, 99999);
    $cars = App\Car::all();
    return view('order_service', compact('service', 'order_id', 'cars'));
});

Route::resource('order_service', 'Controller');
Route::post('order_service', 'Controller@orderService');

Route::get('/order-success', function () {
    return view('order_success');
});

/* Login */

Route::get('/login-test', function () {
    return view('login');
});

Route::get('/signin', function () {
    return view('auth/login');
});
Route::post('signin', ['uses' => 'AccountRegisterController@signin', 'as' => 'postSignin']);
Route::get('/logout', function () {
    auth()->logout();
    return redirect()->to('/signin');
});

/* Signup */

Route::get('/signup', function () {
    return view('auth/register');
});
Route::post('signup', ['uses' => 'AccountRegisterController@createAccount', 'as' => 'postSignup']);

Route::get('/registration-test', function () {
    return view('registration');
});

//Route::get('/verify-user/{code}', 'ProfileAuth\RegisterController@activateUser')->name('activate.user');
$this->get('/verify-account/{code}', 'AccountRegisterController@activateAccount')->name('activate.user');

/* Account */

Route::get('/account', function () {
    if (Auth::check()) {
        $account_id = Auth::user()->account_id;
        $user_id = Auth::user()->id;
        $account = App\Profile::where('id', '=', $account_id)->firstOrFail();
        $orders = App\Profile::getOrders($user_id);
        $transfer_orders = App\Profile::getTransferOrders($user_id);
        return view('profile', compact('account', 'orders', 'transfer_orders'));

        /* $account_id = Auth::user()->account_id;
        redirect()->to('/account/'.$account_id); */
    } else {
        return redirect()->to('/signin');
    }
});

Route::get('/account/orders/{id}', function ($id) {
    if (Auth::check()) {
        $user_id = Auth::user()->id;
        $order = App\ServicesOrder::where('order_id', '=', $id)->firstOrFail();
        return view('order', compact('order'));
    } else {
        return redirect()->to('/signin');
    }
});

Route::get('/account/transfer-orders/{id}', function ($id) {
    if (Auth::check()) {
        $user_id = Auth::user()->id;
        $order = App\TransferOrder::where('order_id', '=', $id)->firstOrFail();
        return view('transfer_order', compact('order'));
    } else {
        return redirect()->to('/signin');
    }
});

Route::get('account/edit-account', function () {
    if (Auth::check()) {
        $account_id = Auth::user()->account_id;
        $account = App\Profile::where('id', '=', $account_id)->firstOrFail();
        return view('profile-edit', compact('account'));
    } else {
        return view('login');
    }
});

Route::post('editAccount', ['uses' => 'AccountRegisterController@updateAccount', 'as' => 'postEditAccount']);

Auth::routes();

//{{ Voyager::image( $car->car_image ) }}

Route::post('uploadAccountImage', ['uses' => 'AccountRegisterController@uploadAccountImage', 'as' => 'postUploadAccountImage']);
Route::post('deleteAccountImage', ['uses' => 'AccountRegisterController@deleteAccountImage', 'as' => 'postDeleteAccountImage']);

/* Order transfer */
Route::post('homeOrderTransfer', ['uses' => 'Controller@homeOrderTransfer', 'as' => 'postOrderTransfer']);
Route::post('orderTransfer', ['uses' => 'Controller@orderTransfer', 'as' => 'orderTransfer']);

/* Voucher */

Route::get('/pay-transfer-voucher/{id}', function ($id) {
    if (Auth::check()) {
        $user_id = Auth::user()->id;
        $order = App\TransferOrder::where('voucher_id', '=', $id)->firstOrFail();
        $amount = App\TransferOrder::currency('CZK', 'USD', $order->total_price);
        $car_title = App\Car::select('title')->where('id', '=', $order->car_id)->firstOrFail();
        $liqpay_form_html = App\TransferOrder::createLiqpayForm($id, $amount);
        return view('pay_voucher', compact('order', 'car_title', 'liqpay_form_html'));
    } else {
        $order = App\TransferOrder::where('voucher_id', '=', $id)->firstOrFail();
        $amount = App\TransferOrder::currency('CZK', 'USD', $order->total_price);
        $car_title = App\Car::select('title')->where('id', '=', $order->car_id)->firstOrFail();
        $liqpay_form_html = App\TransferOrder::createLiqpayForm($id, $amount);
        return view('pay_voucher', compact('order', 'car_title', 'liqpay_form_html'));
    }
});

Route::post('pay-transfer-voucher-confirmation', ['uses' => 'Controller@payTransferVoucherConfirmation', 'as' => 'postPayTransferVoucherConfirmation']);

/* Carrier registration */

Route::post('carrier-registration', ['uses' => 'CarrierRegisterController@createCarrierAccount', 'as' => 'postCarrierSignup']);

Route::get('/carrier-signup', function () {
    return view('carrier_signup');
});

Route::get('/carrier-signup-success', function () {
    return view('carrier-signup-success');
});

Route::post('liqpay-callback', ['uses' => 'LiqpayController@liqpayCallback', 'as' => 'postLiqpayCallback']);

/* Search */

Route::get('/search', function (Request $request) {
    if ($request->isMethod('get')) {
        if (isset($_GET['s'])) {
            $query = $_GET['s'];
            $posts = App\Posts::selectRaw("*, MATCH(title)AGAINST('.$query.')")
            ->whereRaw("MATCH(title)AGAINST('.$query.' IN BOOLEAN MODE)")
            ->limit(10)->get();
            $pages = App\Pages::selectRaw("*, MATCH(title)AGAINST('.$query.')")
            ->whereRaw("MATCH(title)AGAINST('.$query.' IN BOOLEAN MODE)")
            ->limit(10)->get();
            if (count ( $posts ) > 0 || count ( $pages ) > 0) {
                $search_result_count = (count( $posts ) + count ( $pages ));
                return view ('search', compact('posts', 'pages', 'query', 'search_result_count'));
            } else {
                return view ('search', compact('query'))->withMessage('No Details found. Try to search again!');
            }
        }
        return view('search');
    }
});

Route::post('/search', function () {
    if($query = Input::get('query', false)) {
        $posts = App\Posts::selectRaw("*, MATCH(title)AGAINST('.$query.')")
        ->whereRaw("MATCH(title)AGAINST('.$query.' IN BOOLEAN MODE)")
        ->limit(10)->get();
        $pages = App\Pages::selectRaw("*, MATCH(title)AGAINST('.$query.')")
        ->whereRaw("MATCH(title)AGAINST('.$query.' IN BOOLEAN MODE)")
        ->limit(10)->get();
        if (count ( $posts ) > 0 || count ( $pages ) > 0) {
            $search_result_count = (count( $posts ) + count ( $pages ));
            return view ('search', compact('posts', 'pages', 'query', 'search_result_count'));
        } else {
            return view ('search', compact('query'))->withMessage('No Details found. Try to search again!');
        }
    } else {
        return view ('search');
    }
})->name('search-form');

/* Order transfer */

Route::get('order-transfer', function () {
    $cars = App\Car::homeRentFormCars();
    $index = 0;
    foreach($cars as $car) {
        $short_term_rental_price = App\CarRentPrice::where('car_id', '=', $car->id)->where('rent_type', '=', 'short_term_rental')->get()->toArray();
        if ($short_term_rental_price) {
            $day_rent_price = $short_term_rental_price[0]['rent_price'];
            $cars[$index]->day_rent_price = $day_rent_price;
        } else {
            $cars[$index]->day_rent_price = NULL;
        }
        $index++;
    }
    return view('order_transfer')->with(compact('cars'));
});

Route::get('sitemap.xml', function () {
    $posts = App\Posts::get();
    $pages = App\Pages::get();
    return view('sitemap')->with(compact('posts', 'pages'));
});