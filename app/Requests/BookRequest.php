<?php

namespace App\Requests;

class BookRequest
{
    /**
     * @param  array<mixed> $request
     * @return array{isValidated: bool, errorMessage: array<string>}
    */
    public function validate(array $request): array
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

        return ['isValidated' => empty($errorMessage), 'errorMessage' => $errorMessage];
    }
}
