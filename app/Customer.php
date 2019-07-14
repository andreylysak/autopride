<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    static function createCustomer($args) {
        if (!isset($args['customer_name'])) {
            $args['customer_name'] = '';
        }
        if (!isset($args['customer_email'])) {
            $args['customer_email'] = '';
        }
        if (!isset($args['customer_phone'])) {
            $args['customer_phone'] = '';
        }
        if (!isset($args['customer_company'])) {
            $args['customer_company'] = '';
        }
        if (!isset($args['customer_ico_id'])) {
            $args['customer_ico_id'] = '';
        }
        if (!isset($args['delivery_address'])) {
            $args['delivery_address'] = '';
        }
        if (!isset($args['first_name'])) {
            $args['first_name'] = '';
        }
        if (!isset($args['last_name'])) {
            $args['last_name'] = '';
        }

        $date = date('Y-m-d H:i:s');
        $id = DB::table('customers')->insertGetId(
            [
                'customer_name' => $args['customer_name'],
                'customer_email' => $args['customer_email'],
                'customer_phone' => $args['customer_phone'],
                'customer_company' => $args['customer_company'],
                'customer_ico_id' => $args['customer_ico_id'],
                'delivery_address' => $args['delivery_address'],
                'first_name' => $args['first_name'],
                'last_name' => $args['last_name'],
                'created_at' => $date
            ]
        );
        return $id;
    }
}