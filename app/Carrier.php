<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Carrier extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'carriers';

    public static function createCarrierAccount($data) {
        $date = date('Y-m-d H:i:s');
        $user_id = DB::table('users')->insertGetId(
            [
                'email' => $data['email'],
                'password' => $data['password'],
                'created_at' => $date
            ]
        );
        $carrier_id = DB::table('carriers')->insertGetId(
            [
                'user_id' => $user_id,
                'carrier_type' => $data['carrier_type'],
                'company_name' => $data['company_name'],
                'phone' => $data['phone'],
                'city' => $data['city'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'created_at' => $date
            ]
        );
        DB::table('users')
            ->where('id', $user_id)
            ->update(array('carrier_id' => $carrier_id));

        return $carrier_id;
    }

    static function sendCarrierSignupSuccessMail($email, $account_info) {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $subject = 'Autopride. Активация аккаунта';

        $message = '
        <html>
        <head>
        <title>Autopride. Активация аккаунта</title>
        </head>
        <body>
        <h2>Активация аккаунта перевозчика.</h2>
        <h3><a href="'.$account_info['activation_account_link'].'">Для активации аккаунта перейдите по ссылке</a></h3>
        <p>Информация:</p>
        <table>
            <tr>
                <th>Account ID</th>
                <td>'.$account_info['account_id'].'</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>'.$account_info['account_email'].'</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>'.$account_info['account_password'].'</td>
            </tr>
            <tr>
                <th>Дата регистрации</th>
                <td>'.$account_info['account_registration_date'].'</td>
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
        
        if (mail($email, $subject, $message, $headers)) {
            echo "ok";
        } else {
            echo "error";
        }
    }
}
