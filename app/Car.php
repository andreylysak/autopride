<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Car extends Model
{
    public static function homeRentFormCars() {
        $orders = DB::table('cars')->where('home_rent_form', '=', 1)->get();
        return $orders;
    }
}
