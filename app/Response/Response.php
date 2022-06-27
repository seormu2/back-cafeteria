<?php

namespace App\Response;
class Response{

    public static function responseSuccess($data, $status){
        return array(
            "data" => $data,
            "satus" => $status
        );
    }

    public static function responseError($message, $status){
        return array(
            "message" => $message,
            "satus" => $status
        );
    }
}