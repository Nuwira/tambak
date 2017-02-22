<?php

namespace App\Traits;

use Dingo\Api\Exception\ValidationHttpException;
use Validator;

trait ValidateRequest
{
    public function checkValidation($input, $rules = [])
    {
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors()->all());
        }
    }
}

