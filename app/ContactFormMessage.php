<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ContactFormMessage extends Model
{
    //protected $table = 'testimonials';

    static function sendMessage($args) {
        $date = date('Y-m-d H:i:s');
        $id = DB::table('contact_form_messages')->insertGetId(
            [
                'first_name' => $args['customer_first_name'],
                'last_name' => $args['customer_last_name'],
                'email' => $args['customer_email'],
                'phone' => $args['customer_phone'],
                'message' => $args['customer_message'],
                'page_url' => $args['page_url'],
                'created_at' => $date
            ]
        );
        return $id;
    }
}
