<?php

namespace App\Http\Requests\Api\User;

use App\Http\Requests\Api\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (auth()->check() && auth()->user()->can('edit.users'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id'    => 'required|unique:users,id,' . $this->id,
            'name'  => 'string|min:4|max:100',
            'email' => 'required|unique:users,email,' . $this->id,
        ];
    }
}
