<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateCommunityStore extends FormRequest
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
            'name_community' => 'required',
            'description' => 'required',
            'thumbnail_community' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_community' => 'name_community Tidak Boleh Kosong',
            'description' => 'description Tidak Boleh Kosong',
            'thumbnail_community' => 'Thumbnail Tidak Boleh Kosong'
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['id_user'] = Auth::id();
        return $validated;
    }
}
