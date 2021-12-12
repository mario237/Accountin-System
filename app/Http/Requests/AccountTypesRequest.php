<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed $name
 * @property mixed $id
 */
class AccountTypesRequest extends FormRequest
{
    public function rules(): array
    {
        return [
           'name' => 'required'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
