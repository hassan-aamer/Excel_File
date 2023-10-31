<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserExcelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Name' => 'required',
            'Email' => 'required|unique:grades' . $this->id,
            'Phone' => 'required|unique:grades' . $this->id,
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => 'The Name field is required.',
            'Name.unique' => 'The Name has already been taken.',
            'Email.required' => 'The Email field is required.',
            'Email.unique' => 'The Email has already been taken.',
            'Phone.required' => 'The Phone field is required.',
            'Phone.unique' => 'The Phone has already been taken.',
        ];
    }
}
