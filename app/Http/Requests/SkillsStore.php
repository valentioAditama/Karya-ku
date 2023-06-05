<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SkillsStore extends FormRequest
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
            'name_skills' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'name_skills' => 'Name Skills tidak boleh kosong'
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['id_user'] = Auth::id();
        return $validated;
    }
}
