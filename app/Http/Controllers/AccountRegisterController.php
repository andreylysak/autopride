<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Notifications\UserRegisteredSuccessfully;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountRegisterController extends Controller {
    public function createAccount() {
        $data = $this->validate(request(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $data['password']        = bcrypt(array_get($data, 'password'));
        $data['activation_code'] = str_random(30).time();

        //$account_id = Profile::create($data);
        $account = app(Profile::class)->createAccount($data);

        $message = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'activation_link' => env('APP_URL').'/signin',
            'registration_date' => date('Y-m-d H:I:S')
        );

        //sendRegisterSuccessMail($data['email'], $message);

        //auth()->login($account_id);
        //UserRegisteredSuccessfully::notifyAccount($data['name'], $data['activation_code']);
        //return redirect()->to('/signin')->with('message', 'Successfully created a new account. Please check your email and activate your account.');
        return redirect()->to('/signin')->with('message', 'Successfully created a new account.');
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

    static function sendRegisterSuccessMail($email_to, $message) {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $subject = 'Autopride. Регистрация.';

        $message = '
        <html>
        <head>
        <title>Аккаунт зарегистрирован.</title>
        </head>
        <body>
        <h3>'.$message['name'].' ваш аккаунт зарегистрирован!</h3>
        <h3><a href="'.$message['activation_link'].'">Вы можете активировать аккаунт перейдя по ссылке.</a></h3>
        <h4>Информация:</h4>
        <table>
            <tr>
                <th>Name</th>
                <td>'.$message['name'].'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$message['email'].'</td>
            </tr>
            <tr>
                <th>Дата регистрации</th>
                <td>'.$message['registration_date'].'</td>
            </tr>
        </table>
        </body>
        </html>
        ';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= "From: Autopride <autopride@apoehali.com.ua>" . "\r\n";
        $headers .= "Reply-To: autopride@apoehali.com.ua\r\n";
        $headers .= "Return-Path: autopride@apoehali.com.ua\r\n";
        
        if (mail($email_to, $subject, $message, $headers)) {
            echo "ok";
        } else {
            echo "error";
        }
    }
}
