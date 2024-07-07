<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarangRequest extends FormRequest
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
            'kd_barang' => 'required|string',
            'barang' => 'required|string',
            'deskripsi' => 'required',
            'kd_satuan' => 'required|integer',
            'kd_klasifikasi' => 'required|integer',
            'kd_rak' => 'required|integer',
            'kd_gudang' => 'required|integer',
            'stok' => 'required|integer',
        ];
    }
}
