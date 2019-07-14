<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Payments\LiqPay;

class TransferOrder extends Model
{
    static function createOrder($args) {
        $date = date('Y-m-d H:i:s');
        $id = DB::table('transfer_orders')->insertGetId(
            [
                'page_url' => $args['page_url'],
                'car_id' => $args['car_id'],
                'departure' => $args['departure'],
                'destination' => $args['destination'],
                'departure_date' => $args['departure_date'],
                'return_date' => $args['return_date'],                    
                'departure_time' => $args['departure_time'],
                'return_time' => $args['return_time'],
                'adult_count' => $args['adult_count'],
                'child5plus_count' => $args['child5plus_count'],
                'child1plus_count' => $args['child1plus_count'],
                'infant_count' => $args['infant_count'],
                'customer_email' => $args['customer_email'],
                'customer_phone' => $args['customer_phone'],
                'customer_first_name' => $args['customer_first_name'],
                'customer_last_name' => $args['customer_last_name'],
                'customer_message' => $args['customer_message'],
                'user_id' => $args['user_id'],
                'order_id' => $args['order_id'],
                'total_price' => $args['total_price'],
                'voucher_id' => $args['voucher_id'],
                'created_at' => $args['created_at']
            ]
        );
        return $id;
    }

    static function sendOrderSuccessMail($email_to, $order_info) {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');

        $subject = 'Autopride. Заказ № '.$order_info['order_id'];

        $message = '
        <html>
        <head>
        <title>Заказ № '.$order_info['order_id'].'</title>
        </head>
        <body>
        <h3>'.$order_info['customer_first_name'].' '.$order_info['customer_last_name'].' ваш заказ принят и ожидает обработки. Наш менеджер свяжется с вами.</h3>
        <h3><a href="'.$order_info['voucher_link'].'">Вы можете оплатить заказ перейдя по ссылке.</a></h3>
        <p>Детали заказа:</p>
        <table>
            <tr>
                <th>Заказ №</th>
                <td>'.$order_info['order_id'].'</td>
            </tr>
            <tr>
                <th>Дата</th>
                <td>'.$order_info['created_at'].'</td>
            </tr>
            <tr>
                <th>Сумма</th>
                <td>'.$order_info['total_price'].'</td>
            </tr>
            <tr>
                <th>Статус</th>
                <td>На расмотрении.</td>
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
        
        if (mail($email_to, $subject, $message, $headers)) {
            echo "ok";
        } else {
            echo "error";
        }
    }

    static function currency($from_Currency, $to_Currency, $amount) {
        $CZK = 0.04427;//USD
        $UAH = 0.036862;//USD
        $RUB = 6.2164;//USD

        switch ($from_Currency) {
            case 'CZK':
                $result = ($CZK * $amount);
                break;
            case 'UAH':
                $result = ($UAH * $amount);
                break;
            case 'RUB':
                $result = ($RUB * $amount);
                break;
        }
        return round($result, 2);
    }

    static function createLiqpayForm($voucher_id, $amount) {
        $public_key = 'i47147085196';
        $private_key = 'vSqmnGkyICtDjp2EFFkKMSOciWyNpeSjbB3gt6on';

        $liqpay = new LiqPay($public_key, $private_key);
        $liqpay_html = $liqpay->cnb_form(array(
        'action'         => 'pay',
        'amount'         => $amount,
        'currency'       => 'USD',
        'description'    => 'Оплата ваучера ID: '.$voucher_id,
        'order_id'       => 'order_id_1',
        'version'        => '3'
        ));

        return $liqpay_html;
    }

    static function updateVoucherPaymentStatus($data) {
        $date = date('Y-m-d H:i:s');
        if (isset($data['payment_status'])) {
            DB::table('transfer_orders')
            ->where('voucher_id', $data['voucher_id'])
            ->update(array(
                'payment_status' => $data['payment_status'],
                'updated_at' => $date
            ));
        }
    }

    static function updateVoucherPaymentMethod($data) {
        $date = date('Y-m-d H:i:s');
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        if (isset($data['payment_method'])) {
            DB::table('transfer_orders')
            ->where('voucher_id', $data['voucher_id'])
            ->update(array(
                'payment_method' => $data['payment_method'],
                'updated_at' => $date
            ));
        }
    }
}
