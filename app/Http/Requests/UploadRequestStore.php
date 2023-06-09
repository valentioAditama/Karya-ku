<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UploadRequestStore extends FormRequest
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
            'title' => 'required',
            'sub_title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'path_thumbnail' => 'required|mimes:jpeg,jpg,png|max:8000',
            'path_image' => 'required|mimes:jpeg,jpg,png|max:8000',
            'path_video' => 'mimes:mp4|max:100000',
        ];
    }

    public function messages()
    {
        return [
            'title' => 'Judul Tidak Boleh Kosong',
            'sub_title' => 'Sub Judul Tidak Boleh Kosong',
            'category' => 'Kategori Tidak Boleh Kosong',
            'description' => 'Deskripsi Tidak Boleh Kosong',
            'path_thumbnail' => 'Thumbanil Gambar Tidak Boleh Kosong',
            'path_image' => 'Gambar Tidak Boleh Kosong',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();
        $validated['id_user'] = Auth::id();
        return $validated;
    }
}
