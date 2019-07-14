<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarrierFormRegistration extends Model
{
    static function carrierRegistration($args) {
        $date = date('Y-m-d H:i:s');
        $id = DB::table('carrier_form_registrations')->insertGetId(
            [
                'trasporter_type' => $args['trasporter_type'],
                'first_name' => $args['first_name'],
                'last_name' => $args['last_name'],
                'email' => $args['email'],
                'phone' => $args['phone'],
                'city' => $args['city'],
                'message' => $args['message'],
                'page_url' => $args['page_url'],
                'created_at' => $date
            ]
        );
        return $id;
    }
}
