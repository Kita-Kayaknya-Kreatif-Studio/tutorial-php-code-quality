<?php

namespace App\Controller;

class BookController
{
    public function store()
    {
        $responseCode = 200;
        $message = 'Success';
        $result = [];

        return [
            'status' => $responseCode,
            'message' => $message,
            'data' => $result
        ];
    }
}
