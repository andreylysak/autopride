<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Testimonial extends Model
{
    //protected $table = 'testimonials';

    static function createReview($args) {
        $id = DB::table('testimonials')->insertGetId(
            [
                'first_name' => $args['customer_first_name'],
                'last_name' => $args['customer_last_name'],
                'email' => $args['customer_email'],
                'rating' => $args['customer_rating'],
                'content' => $args['customer_review'],
                'status' => 'disable',
                'page_url' => $args['page_url']
            ]
        );
        return $id;
    }
}
