<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class userRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => 'required',
            'email' => 'required',
            'role_job' => 'required',
            'location' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fullname' => 'fullname Tidak Boleh Kosong',
            'email' => 'email Tidak Boleh Kosong',
            'role_job' => 'role_job Tidak Boleh Kosong',
            'location' => 'location Tidak Boleh Kosong',
        ];
    }
}
