<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServicesOrder extends Model
{
    static function createOrder($args) {
        if (isset($args['user_id'])) {
            $user_id = $args['user_id'];
        } else {
            $user_id = '';
        }
        $date = date('Y-m-d H:i:s');
        $id = DB::table('services_orders')->insertGetId(
            [
                'page_url' => $args['page_url'],
                'service_id' => $args['service_id'],
                'service_title' => $args['service_title'],
                'order_id' => $args['order_id'],
                'departure_point' => $args['departure_point'],
                'destination_point' => $args['destination_point'],
                'date' => $args['date'],
                'time' => $args['time'],
                'comment' => $args['comment'],
                'number_of_passengers' => $args['number_of_passengers'],
                'car' => $args['car'],
                'car_id' => $args['car_id'],
                'customer_email' => $args['customer_email'],
                'customer_phone' => $args['customer_phone'],
                'customer_name' => $args['customer_name'],
                'user_id' => $user_id,
                'created_at' => $date
            ]
        );
        return $id;
    }
}