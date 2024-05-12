<?php

namespace App\Requests;

class BookRequest
{
    public function validate($request)
    {
        $errorMessage = [];
        if (!isset($request['book_name'])) {
            $errorMessage['book_name'] = 'Book Name is required.';
        } else {
            if (is_string($request['book_name'])) {
                if (strlen($request['book_name']) > 128) {
                    $errorMessage['book_name'] = 'Book Name is too long.';
                } elseif (strlen($request['book_name']) == 0) {
                    $errorMessage['book_name'] = 'Book Name is too short.';
                }
            } else {
                $errorMessage['book_name'] = 'Book Name value invalid. Expecting string only.';
            }
        }

        return ['isValidated' => count($errorMessage) == 0, 'errorMessage' => $errorMessage];
    }
}
