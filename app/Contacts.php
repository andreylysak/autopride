<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Contacts extends Model
{
    //protected $table = 'testimonials';

    static function sendMessage($args) {
        $id = DB::table('contact_form')->insertGetId(
            [
                'first_name' => $args['customer_first_name'],
                'last_name' => $args['customer_last_name'],
                'email' => $args['customer_email'],
                'phone' => $args['customer_phone'],
                'content' => $args['customer_review'],
                'message' => $args['customer_message'],
                'page_url' => $args['page_url']
            ]
        );
        return $id;
    }
}