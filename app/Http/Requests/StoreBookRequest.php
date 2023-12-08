<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
        $id = $this->book->id ?? '';
        return [
            'title' => 'required|max:150|unique:books,title,' . $id,
            'author' => 'required|max:100',
            'publisher' => 'required|max:80',
            'published_at' => 'required|date',
        ];
    }
    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'title' => 'judul buku',
            'author' => 'penulis',
            'publisher' => 'penerbit',
            'published_at' => 'tanggal terbit',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'required' => ':Attribute wajib diisi yaa',
            'unique' => ':Attribute udah kedaftar, cek lagi yaaa, :attribute ga bisa sama',
            'max' => 'Nama :attribute ga boleh lebih dari :max karakter',
            'date' => 'Isi format :attribute yang bener yaa',
        ];
    }
}
