<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrier;
use App\Notifications\UserRegisteredSuccessfully;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CarrierRegisterController extends Controller {
    public function createCarrierAccount(Request $request) {
        $data = $this->validate(request(), [
            'carrier_type'  => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users',
            'company_name'  => 'string|max:255',
            'phone'         => 'required|string|max:255',
            'city'          => 'required|string|max:255',
            'first_name'    => 'string|max:255',
            'last_name'     => 'string|max:255',
        ]);
        $password = bin2hex(random_bytes(10));
        $data['password']        = bcrypt($password);
        $data['activation_code'] = str_random(30).time();

        if (!$request->input('company_name')) {
            $data['company_name'] = '';
        }
        if (!$request->input('first_name')) {
            $data['first_name'] = '';
        }
        if (!$request->input('last_name')) {
            $data['last_name'] = '';
        }

        $carrier_account = Carrier::createCarrierAccount($data);

        $date = date('Y-m-d H:i:s');
        $account_info = array(
            'activation_account_link' => env('APP_URL').'/carrier-account-activation/'.$data['activation_code'],
            'account_id' => $carrier_account,
            'account_email' => $data['email'],
            'account_password' => $password,
            'account_registration_date' => $date
        );
        Carrier::sendCarrierSignupSuccessMail($request->input('email'), $account_info);

        return redirect()->to('/carrier-signup-success');
    }

    public function updateAccount(Request $request) {
        if (Auth::check()) {
            if ($request->input('_token') && $request->input('_token') == session()->token()) {
                $data = $this->validate(request(), [
                    'name'          => 'max:255',
                    'firstname'     => 'max:255',
                    'lastname'      => 'max:255',
                    'phone'         => 'max:255',
                    'location'      => 'max:255',
                    'address'       => 'max:500',
                    'city'          => 'max:255',
                    'user_id'       => 'max:255',
                ]);

                if ($request->input('password')) {
                    $this->validate(request(), [
                        'password' => 'string|min:6',
                    ]);
                    $data['password'] = Hash::make($request->input('password'));
                    
                }

                $new_email = $request->input('email');
                $current_email = Profile::getEmail($request->input('user_id'));

                if ($new_email !== $current_email->email) {
                    $this->validate(request(), [
                        'email' => 'string|email|max:255|unique:users',
                    ]);
                    $data['email'] = $request->input('email');
                }
                
                app(Profile::class)->updateAccount($data);
                
                return redirect()->to('/account/edit-account')->with('message', 'Successfully updated account.');
            } else {
                return redirect()->to('/account/edit-account')->with('message', 'Error token.');
            }
        } else {
            return redirect()->to('/signin')->with('message', 'Autorisation requared!');
        }
    }

    public function activateAccount(string $activationCode) {
        try {
            $user = app(Profile::class)->where('activation_code', $activationCode)->first();
            if (!$user) {
                return "The code does not exist for any user in our system.";
            }
            $user->status          = 1;
            $user->activation_code = null;
            $user->save();
            auth()->login($user);
        } catch (\Exception $exception) {
            logger()->error($exception);
            return "Whoops! something went wrong.";
        }
        return redirect()->to('/activateAccount-test');
    }

    public function signin() {
        /* echo '<pre>';
        print_r($_POST);
        echo '</pre>'; */

        /* if (auth()->attempt(request(['email', 'password'])) == false) {
            
        }
        return redirect()->to('/account'); */

        $data = $this->validate(request(), [
            'email'    => 'required|string|email|max:255',
            'password' => 'required|string',
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            // Authentication passed...
            return redirect()->to('/account');
        } else {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
    }

    public function logout() {
        auth()->logout();
        return redirect()->to('/signin');
    }

    public function uploadAccountImage(Request $request) {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            $this->validate($request, [
                'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            if ($request->hasFile('input_img')) {
                $image = $request->file('input_img');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/accounts_images');
                $image->move($destinationPath, $name);
                $this->updateAccountImage($name, $user_id);
                return back()->with('success','Image Upload successfully');
            }
        } else {
            return redirect()->to('/signin')->with('message', 'Autorisation requared to update image!');
        }
    }

    private static function updateAccountImage($image_name, $user_id) {
        app(Profile::class)->updateAccountImage($image_name, $user_id);
    }

    public function deleteAccountImage() {
        if (Auth::check()) {
            $user_id = Auth::user()->id;
            app(Profile::class)->deleteAccountImage($user_id);
            return back()->with('success','Image Deleted successfully');
        } else {
            return redirect()->to('/signin')->with('message', 'Autorisation requared to update image!');
        }
    }

    
}
