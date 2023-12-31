<?php

namespace App\Http\Requests\Api\Role;

use App\Http\Requests\Api\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return (auth()->check() && auth()->user()->hasRole('root'));
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3',
        ];
    }
}
