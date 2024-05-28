<?php

namespace App\Controller;

class BookController
{
    /**
     * @return array<mixed>
     */
    public function store(): array
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
