<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Testimonial;
use App\ContactFormMessage;
use App\CarrierFormRegistration;
use App\Customer;
use App\CarsReservation;
use App\ServicesOrder;
use App\TransferOrder;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createReview(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                if (isset($_POST['customer_first_name'])) {
                    $customer_first_name = strip_tags(trim($_POST['customer_first_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_last_name'])) {
                    $customer_last_name = strip_tags(trim($_POST['customer_last_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['customer_email']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_rating']) && !empty($_POST['customer_rating'])) {
                    $customer_rating = strip_tags(trim($_POST['customer_rating']));
                } else {
                    $customer_rating = 0;
                }
                if (isset($_POST['customer_review'])) {
                    $customer_review = strip_tags(trim($_POST['customer_review']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                }

                if (!$validation_error) {
                    $created_id = Testimonial::createReview([
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'customer_email' => $customer_email,
                        'customer_rating' => $customer_rating,
                        'customer_review' => $customer_review,
                        'page_url' => $page_url
                    ]);
                    return redirect()->back()->with('success', 'Ваш отзыв успешно отправлен.');
                } else {
                    echo 'error';
                }
            }
        }
    }

    public function contactForm(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                if (isset($_POST['customer_first_name'])) {
                    $customer_first_name = strip_tags(trim($_POST['customer_first_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_last_name'])) {
                    $customer_last_name = strip_tags(trim($_POST['customer_last_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['customer_email']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_phone'])) {
                    $customer_phone = strip_tags(trim($_POST['customer_phone']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_message'])) {
                    $customer_message = strip_tags(trim($_POST['customer_message']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                }
                if (!$validation_error) {
                    $created_id = ContactFormMessage::sendMessage([
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_message' => $customer_message,
                        'page_url' => $page_url
                    ]);
                    return redirect()->back()->with('success', 'Ваше сообщение успешно отправлено.');
                } else {
                    echo 'error';
                }
            }
        }
    }

    public function carrierRegistration(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                if (isset($_POST['trasporter_type'])) {
                    $trasporter_type = strip_tags(trim($_POST['trasporter_type']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['first_name'])) {
                    $first_name = strip_tags(trim($_POST['first_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['last_name'])) {
                    $last_name = strip_tags(trim($_POST['last_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['email'])) {
                    $email = strip_tags(trim($_POST['email']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['phone'])) {
                    $phone = strip_tags(trim($_POST['phone']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['city'])) {
                    $city = strip_tags(trim($_POST['city']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['message'])) {
                    $message = strip_tags(trim($_POST['message']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                }
                if (!$validation_error) {
                    $created_id = CarrierFormRegistration::carrierRegistration([
                        'trasporter_type' => $trasporter_type,
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'email' => $email,
                        'phone' => $phone,
                        'city' => $city,
                        'message' => $message,
                        'page_url' => $page_url
                    ]);
                    return redirect()->back()->with('success', 'Ваша заявка успешно отправлена.');
                } else {
                    echo 'error';
                }
            }
        }
    }

    public function rentCar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['car_title'])) {
                    $car_title = strip_tags(trim($_POST['car_title']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['car_id'])) {
                    $car_id = strip_tags(trim($_POST['car_id']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['borrowDate'])) {
                    $borrowDate = strip_tags(trim($_POST['borrowDate']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['borrowTime'])) {
                    $borrowTime = strip_tags(trim($_POST['borrowTime']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['returnDate'])) {
                    $returnDate = strip_tags(trim($_POST['returnDate']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['returnTime'])) {
                    $returnTime = strip_tags(trim($_POST['returnTime']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['type_of_rental'])) {
                    $type_of_rental = strip_tags(trim($_POST['type_of_rental']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['payment_method'])) {
                    $payment_method = strip_tags(trim($_POST['payment_method']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['accessories'])) {
                    $accessories = strip_tags(trim($_POST['accessories']));
                } else {
                    $accessories = '';
                }
                if (isset($_POST['customer_name'])) {
                    $customer_name = strip_tags(trim($_POST['customer_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['customer_email']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_phone'])) {
                    $customer_phone = strip_tags(trim($_POST['customer_phone']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_company'])) {
                    $customer_company = strip_tags(trim($_POST['customer_company']));
                } else {
                    $customer_company = '';
                }
                if (isset($_POST['customer_ico_id'])) {
                    $customer_ico_id = strip_tags(trim($_POST['customer_ico_id']));
                } else {
                    $customer_ico_id = '';
                }
                if (isset($_POST['delivery'])) {
                    $delivery = strip_tags(trim($_POST['delivery']));
                } else {
                    $validation_error = true;
                }

                if (Auth::check()) {
                    $user_id = Auth::user()->id;
                } else {
                    $user_id = '';
                }

                /* Create Customer */
                if (!$validation_error) {
                    $customer_id = Customer::createCustomer([
                        'customer_name' => $customer_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_company' => $customer_company,
                        'customer_ico_id' => $customer_ico_id,
                        'delivery_address' => $delivery
                    ]);
                } else {
                    echo 'error';
                    $validation_error = true;
                }
                /* Create Order */                
                if (!$validation_error) {
                    $order_id = CarsReservation::createOrder([
                        'car_id' => $car_id,
                        'car_title' => $car_title,
                        'borrowDate' => $borrowDate,
                        'borrowTime' => $borrowTime,
                        'returnDate' => $returnDate,
                        'returnTime' => $returnTime,
                        'type_of_rental' => $type_of_rental,
                        'payment_method' => $payment_method,
                        'accessories' => $accessories,
                        'customer_id' => $customer_id,
                        'customer_name' => $customer_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_company' => $customer_company,
                        'customer_ico_id' => $customer_ico_id,
                        'delivery' => $delivery,
                        'user_id' => $user_id,
                    ]);
                    return redirect('/rent-success')->with('car_id', $car_id);
                } else {
                    echo 'error';
                }
            }
        }
    }

    public function orderService(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['service_id'])) {
                    $service_id = strip_tags(trim($_POST['service_id']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['service_title'])) {
                    $service_title = strip_tags(trim($_POST['service_title']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['order_id'])) {
                    $order_id = strip_tags(trim($_POST['order_id']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['departure_point'])) {
                    $departure_point = strip_tags(trim($_POST['departure_point']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['destination_point'])) {
                    $destination_point = strip_tags(trim($_POST['destination_point']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['date'])) {
                    $date = strip_tags(trim($_POST['date']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['time'])) {
                    $time = strip_tags(trim($_POST['time']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['comment'])) {
                    $comment = strip_tags(trim($_POST['comment']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['number_of_passengers'])) {
                    $number_of_passengers = strip_tags(trim($_POST['number_of_passengers']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['car'])) {
                    $car = strip_tags(trim($_POST['car']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['car_id'])) {
                    $car_id = strip_tags(trim($_POST['car_id']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_name'])) {
                    $customer_name = strip_tags(trim($_POST['customer_name']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['customer_email']));
                } else {
                    $validation_error = true;
                }
                if (isset($_POST['customer_phone'])) {
                    $customer_phone = strip_tags(trim($_POST['customer_phone']));
                } else {
                    $validation_error = true;
                }

                if (Auth::check()) {
                    $user_id = Auth::user()->id;
                } else {
                    $user_id = '';
                }

                /* Create Customer */
                if (!$validation_error) {
                    $customer_id = Customer::createCustomer([
                        'customer_name' => $customer_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone
                    ]);
                } else {
                    echo 'error';
                    $validation_error = true;
                }
                /* Create Order */                
                if (!$validation_error) {
                    $created_id = ServicesOrder::createOrder([
                        'page_url' => $page_url,
                        'service_id' => $service_id,
                        'service_title' => $service_title,
                        'order_id' => $order_id,
                        'departure_point' => $departure_point,
                        'destination_point' => $destination_point,
                        'date' => $date,
                        'time' => $time,
                        'comment' => $comment,
                        'number_of_passengers' => $number_of_passengers,
                        'car' => $car,
                        'car_id' => $car_id,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_name' => $customer_name,
                        'user_id' => $user_id
                    ]);
                    return redirect('/order-success?order_id='.$order_id)->with('order_id', $order_id);
                } else {
                    echo 'error';
                }
            }
        }
    }

    public function orderTransfer(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                $form_errors = array();
                if (isset($_POST['page_url'])) {
                    $page_url = strip_tags(trim($_POST['page_url']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "page_url" value.';
                }
                if (isset($_POST['selected_car_id'])) {
                    $selected_car_id = strip_tags(trim($_POST['selected_car_id']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "selected_car_id" value.';
                }
                if (isset($_POST['point_departure'])) {
                    $departure = strip_tags(trim($_POST['point_departure']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "point_departure" value.';
                }
                if (isset($_POST['point_destination'])) {
                    $destination = strip_tags(trim($_POST['point_destination']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "point_destination" value.';
                }
                if (isset($_POST['pick_up_date'])) {
                    $departure_date = strip_tags(trim($_POST['pick_up_date']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "pick_up_date" value.';
                }
                if (isset($_POST['pick_up_time'])) {
                    $departure_time = strip_tags(trim($_POST['pick_up_time']));
                } else {
                    $departure_time = '';
                }
                if (isset($_POST['return_date'])) {
                    $return_date = strip_tags(trim($_POST['return_date']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "return_date" value.';
                }
                if (isset($_POST['return_time'])) {
                    $return_time = strip_tags(trim($_POST['return_time']));
                } else {
                    $return_time = '';
                }
                if (isset($_POST['AdultCount'])) {
                    $adult_count = strip_tags(trim($_POST['AdultCount']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "AdultCount" value.';
                }
                if (isset($_POST['Child5AndOlderCount'])) {
                    $child5plus_count = strip_tags(trim($_POST['Child5AndOlderCount']));
                    if ($child5plus_count == '') $child5plus_count = 0;
                } else {
                    $child5plus_count = 0;
                }
                if (isset($_POST['Child1AndOlderCount'])) {
                    $child1plus_count = strip_tags(trim($_POST['Child1AndOlderCount']));
                    if ($child1plus_count == '') $child1plus_count = 0;
                } else {
                    $child1plus_count = 0;
                }
                if (isset($_POST['InfantCount'])) {
                    $infant_count = strip_tags(trim($_POST['InfantCount']));
                    if ($infant_count == '') $infant_count = 0;
                } else {
                    $infant_count = 0;
                }
                if (isset($_POST['customer_first_name'])) {
                    $customer_first_name = strip_tags(trim($_POST['customer_first_name']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "customer_first_name" value.';
                }
                if (isset($_POST['customer_last_name'])) {
                    $customer_last_name = strip_tags(trim($_POST['customer_last_name']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "customer_last_name" value.';
                }
                if (isset($_POST['customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['customer_email']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "customer_email" value.';
                }
                if (isset($_POST['customer_phone'])) {
                    $customer_phone = strip_tags(trim($_POST['customer_phone']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "customer_phone" value.';
                }
                
                if (isset($_POST['customer_message'])) {
                    $customer_message = strip_tags(trim($_POST['customer_message']));
                } else {
                    $customer_message = '';
                }
                if (isset($_POST['total_price'])) {
                    $total_price = strip_tags(trim($_POST['total_price']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "total_price" value.';
                }

                if (Auth::check()) {
                    $user_id = Auth::user()->id;
                } else {
                    $user_id = NULL;
                }

                $order_id = rand(10000, 99999);
                $voucher_id = bin2hex(random_bytes(24));
                $date = date('Y-m-d h:i:s');

                if (!$validation_error) {
                    $customer_id = Customer::createCustomer([
                        'first_name' => $customer_first_name,
                        'last_name' => $customer_last_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'created_at' => $date
                    ]);
                } else {
                    echo 'error';
                    $validation_error = true;
                }
                           
                if (!$validation_error) {
                    $created_id = TransferOrder::createOrder([
                        'page_url' => $page_url,
                        'car_id' => $selected_car_id,
                        'departure' => $departure,
                        'destination' => $destination,
                        'departure_date' => $departure_date,
                        'return_date' => $return_date,                    
                        'departure_time' => $departure_time,
                        'return_time' => $return_time,
                        'adult_count' => $adult_count,
                        'child5plus_count' => $child5plus_count,
                        'child1plus_count' => $child1plus_count,
                        'infant_count' => $infant_count,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'customer_message' => $customer_message,
                        'user_id' => $user_id,
                        'order_id' => $order_id,
                        'total_price' => $total_price,
                        'voucher_id' => $voucher_id,
                        'created_at' => $date
                    ]);

                    $order_info = array(
                        'order_id' => $order_id,
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'total_price' => $total_price,
                        'voucher_link' => env('APP_URL').'/pay-transfer-voucher/'.$voucher_id,
                        'created_at' => $date
                    );
                    TransferOrder::sendOrderSuccessMail($customer_email, $order_info);

                    return redirect('/order-success?order_id='.$order_id)->with('order_id', $order_id);
                } else {
                    echo 'error';
                    print_r($form_errors);
                }
            }
        }
    }

    public function homeOrderTransfer(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                $form_errors = array();
                if (isset($_POST['input_page_url'])) {
                    $page_url = strip_tags(trim($_POST['input_page_url']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_page_url" value.';
                }
                if (isset($_POST['input_selected_car_id'])) {
                    $selected_car_id = strip_tags(trim($_POST['input_selected_car_id']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_selected_car_id" value.';
                }
                if (isset($_POST['input_departure'])) {
                    $departure = strip_tags(trim($_POST['input_departure']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_departure" value.';
                }
                if (isset($_POST['input_destination'])) {
                    $destination = strip_tags(trim($_POST['input_destination']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_destination" value.';
                }
                if (isset($_POST['input_departure_date'])) {
                    $departure_date = strip_tags(trim($_POST['input_departure_date']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_departure_date" value.';
                }
                if (isset($_POST['input_departure_time'])) {
                    $departure_time = strip_tags(trim($_POST['input_departure_time']));
                } else {
                    $departure_time = '';
                }
                if (isset($_POST['input_return_date'])) {
                    $return_date = strip_tags(trim($_POST['input_return_date']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_return_date" value.';
                }
                if (isset($_POST['input_return_time'])) {
                    $return_time = strip_tags(trim($_POST['input_return_time']));
                } else {
                    $return_time = '';
                }
                if (isset($_POST['input_adult_count'])) {
                    $adult_count = strip_tags(trim($_POST['input_adult_count']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_adult_count" value.';
                }
                if (isset($_POST['input_child5plus_count'])) {
                    $child5plus_count = strip_tags(trim($_POST['input_child5plus_count']));
                    if ($child5plus_count == '') $child5plus_count = 0;
                } else {
                    $child5plus_count = 0;
                }
                if (isset($_POST['input_child1plus_count'])) {
                    $child1plus_count = strip_tags(trim($_POST['input_child1plus_count']));
                    if ($child1plus_count == '') $child1plus_count = 0;
                } else {
                    $child1plus_count = 0;
                }
                if (isset($_POST['input_infant_count'])) {
                    $infant_count = strip_tags(trim($_POST['input_infant_count']));
                    if ($infant_count == '') $infant_count = 0;
                } else {
                    $infant_count = 0;
                }
                if (isset($_POST['input_customer_first_name'])) {
                    $customer_first_name = strip_tags(trim($_POST['input_customer_first_name']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_customer_first_name" value.';
                }
                if (isset($_POST['input_customer_last_name'])) {
                    $customer_last_name = strip_tags(trim($_POST['input_customer_last_name']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_customer_last_name" value.';
                }
                if (isset($_POST['input_customer_email'])) {
                    $customer_email = strip_tags(trim($_POST['input_customer_email']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_customer_email" value.';
                }
                if (isset($_POST['input_customer_phone'])) {
                    $customer_phone = strip_tags(trim($_POST['input_customer_phone']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "input_customer_phone" value.';
                }
                
                if (isset($_POST['input_customer_message'])) {
                    $customer_message = strip_tags(trim($_POST['input_customer_message']));
                } else {
                    $customer_message = '';
                }
                if (isset($_POST['total_price'])) {
                    $total_price = strip_tags(trim($_POST['total_price']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "total_price" value.';
                }

                if (Auth::check()) {
                    $user_id = Auth::user()->id;
                } else {
                    $user_id = NULL;
                }

                $order_id = rand(10000, 99999);
                $voucher_id = bin2hex(random_bytes(24));
                $date = date('Y-m-d h:i:s');

                if (!$validation_error) {
                    $customer_id = Customer::createCustomer([
                        'first_name' => $customer_first_name,
                        'last_name' => $customer_last_name,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'created_at' => $date
                    ]);
                } else {
                    echo 'error';
                    $validation_error = true;
                }
                           
                if (!$validation_error) {
                    $created_id = TransferOrder::createOrder([
                        'page_url' => $page_url,
                        'car_id' => $selected_car_id,
                        'departure' => $departure,
                        'destination' => $destination,
                        'departure_date' => $departure_date,
                        'return_date' => $return_date,                    
                        'departure_time' => $departure_time,
                        'return_time' => $return_time,
                        'adult_count' => $adult_count,
                        'child5plus_count' => $child5plus_count,
                        'child1plus_count' => $child1plus_count,
                        'infant_count' => $infant_count,
                        'customer_email' => $customer_email,
                        'customer_phone' => $customer_phone,
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'customer_message' => $customer_message,
                        'user_id' => $user_id,
                        'order_id' => $order_id,
                        'total_price' => $total_price,
                        'voucher_id' => $voucher_id,
                        'created_at' => $date
                    ]);

                    $order_info = array(
                        'order_id' => $order_id,
                        'customer_first_name' => $customer_first_name,
                        'customer_last_name' => $customer_last_name,
                        'total_price' => $total_price,
                        'voucher_link' => env('APP_URL').'/pay-transfer-voucher/'.$voucher_id,
                        'created_at' => $date
                    );
                    TransferOrder::sendOrderSuccessMail($customer_email, $order_info);

                    return redirect('/order-success?order_id='.$order_id)->with('order_id', $order_id);
                } else {
                    echo 'error';
                    print_r($form_errors);
                }
            }
        }
    }

    public function payTransferVoucherConfirmation() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['_token']) && $_POST['_token'] == session()->token()) {
                $validation_error = false;
                $form_errors = array();
                if (isset($_POST['voucher_id'])) {
                    $voucher_id = strip_tags(trim($_POST['voucher_id']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "voucher_id" value.';
                }
                if (isset($_POST['payment_method_field'])) {
                    $payment_method = strip_tags(trim($_POST['payment_method_field']));
                } else {
                    $validation_error = true;
                    $form_errors[] = 'Validation error, enter "payment_method_field" value.';
                }
                if (!$validation_error) {
                    TransferOrder::updateVoucherPaymentMethod([
                        'voucher_id' => $voucher_id,
                        'payment_method' => $payment_method
                    ]);
                } else {
                    echo 'error';
                    print_r($form_errors);
                    $validation_error = true;
                }
                return redirect()->back();
                //return redirect('/pay-transfer-voucher/'.$voucher_id);
            }
        }
    }
}
