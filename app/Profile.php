<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Model
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'activation_code',
    ];

    public static function createAccount($data) {
        $date = date('Y-m-d H:i:s');
        $user_id = DB::table('users')->insertGetId(
            [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'created_at' => $date
            ]
        );
        $account_id = DB::table('profiles')->insertGetId(
            [
                'user_id' => $user_id,
                'created_at' => $date
            ]
        );
        DB::table('users')
            ->where('id', $user_id)
            ->update(array('account_id' => $account_id));

        return $account_id;
    }

    public static function updateAccount($data) {
        $date = date('Y-m-d H:i:s');
        if (isset($data['email'])) {
            DB::table('users')
            ->where('id', $data['user_id'])
            ->update(array(
                'email' => $data['email']
            ));
        }
        if (isset($data['password'])) {
            DB::table('users')
                ->where('id', $data['user_id'])
                ->update(array(
                    'password' => $data['password']
                ));
        }
        DB::table('users')
            ->where('id', $data['user_id'])
            ->update(array(
                'name' => $data['name'],
                'updated_at' => $date
            ));
        DB::table('profiles')
            ->where('user_id', $data['user_id'])
            ->update(array(
                'firstname' => $data['firstname'],
                'lastname' => $data['lastname'],
                'location' => $data['city'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'updated_at' => $date
            ));
    }

    public static function updateAccountImage($image_name, $user_id) {
        $date = date('Y-m-d H:i:s');
        if (isset($image_name)) {
            DB::table('profiles')
            ->where('user_id', $user_id)
            ->update(array(
                'photo' => $image_name,
                'updated_at' => $date
            ));
        }
    }

    public static function deleteAccountImage($user_id) {
        $date = date('Y-m-d H:i:s');
        if (isset($user_id)) {
            DB::table('profiles')
            ->where('user_id', $user_id)
            ->update(array(
                'photo' => NULL,
                'updated_at' => $date
            ));
        }
    }

    public static function getEmail($user_id) {
        $email = DB::table('users')->select('email')->where('id', '=', $user_id)->first();
        return $email;
    }

    public static function getOrders($user_id) {
        $orders = DB::table('services_orders')->where('user_id', '=', $user_id)->get();
        return $orders;
    }

    public static function getTransferOrders($user_id) {
        $transfer_orders = DB::table('transfer_orders')->where('user_id', '=', $user_id)->get();
        return $transfer_orders;
    }
}