<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'jurusan'       => 'required',
            'npm'           => ['required', 'max 8'],
            'nama'          => 'required',
            'tanggal_lahir' => 'required',
            'foto'          => ['nullabel', 'mimes']
        ];
    }
}
