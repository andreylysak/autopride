<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarsReservation extends Model
{
    static function createOrder($args) {
        $date = date('Y-m-d H:i:s');
        $id = DB::table('cars_reservations')->insertGetId(
            [
                'car_id' => $args['car_id'],
                'car_title' => $args['car_title'],
                'rental_date_borrow' => $args['borrowDate'],
                'rental_time_borrow' => $args['borrowTime'],
                'rental_date_return' => $args['returnDate'],
                'rental_time_return' => $args['returnTime'],
                'type_of_rental' => $args['type_of_rental'],
                'payment_method' => $args['payment_method'],
                'accessories' => implode(", ", $args['accessories']),
                'customer_id' => $args['customer_id'],
                'customer_name' => $args['customer_name'],
                'customer_email' => $args['customer_email'],
                'customer_phone' => $args['customer_phone'],
                'customer_company' => $args['customer_company'],
                'customer_ico_id' => $args['customer_ico_id'],
                'delivery' => $args['delivery'],
                'created_at' => $date
            ]
        );
        return $id;
    }
}