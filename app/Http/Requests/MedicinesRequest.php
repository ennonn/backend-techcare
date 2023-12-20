<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicinesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'medicine_name'    => 'string|max:255',
            'manufacturer'     => 'required|max:255',
            'expirydate'       => 'string|nullable|max:255',
            'quantity'         => 'required|integer',
            'price'            => 'required|integer',
        ];
    }
}
