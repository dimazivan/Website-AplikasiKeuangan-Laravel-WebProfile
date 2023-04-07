<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if (request()->isMethod('post')) {
            return[
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'username' => 'required|min:5|max:255',
                'email' => 'required|email',
                'password' => 'required|min:5|max:40',
                'cbrole' => 'required',
                'cbcountry' => 'required',
                'cbprovince' => 'required',
                'cbcity' => 'required',
                'cbdistrict' => 'required',
                'cbward' => 'required',
                // 'phone' => 'required|numeric|sometimes|min:10|max:13',
                'phone' => 'required|numeric|digits_between:10,13',
                'address' => 'required|max:255',
                'desc' => 'max:255',
                'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
            ];
        } else {
            return[
                'first_name' => 'required|max:255',
                'last_name' => 'required|max:255',
                'username' => 'required|min:5|max:255',
                'email' => 'required|email',
                'password' => 'required|min:5|max:40',
                'cbrole' => 'required',
                'cbcountry' => 'required',
                'cbprovince' => 'required',
                'cbcity' => 'required',
                'cbdistrict' => 'required',
                'cbward' => 'required',
                // 'phone' => 'required|numeric|sometimes|min:10|max:13',
                'phone' => 'required|numeric|digits_between:10,13',
                'address' => 'required|max:255',
                'desc' => 'max:255',
                'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000',
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return[
                'first_name.required' => 'Nama Depan Silahkan Diisi',
                'last_name.required' => 'Nama Belakang Silahkan Diisi',
                'username.required' => 'Username Silahkan Diisi',
                'email.required' => 'Email Silahkan Diisi',
                'password.required' => 'PAssword Silahkan Diisi',
                'cbrole.required' => 'Role User Silahkan Dipilih',
                'phone.required' => 'Nomor Telepon Silahkan Diisi',
                'address.required' => 'Alamat Silahkan Diisi',
                'desc.required' => 'Detail Alamat Silahkan Diisi',
                'file_foto.required' => 'Silahkan Mengupload File Foto',
            ];
        } else {
            return[
                'first_name.required' => 'Nama Depan Silahkan Diisi',
                'last_name.required' => 'Nama Belakang Silahkan Diisi',
                'username.required' => 'Username Silahkan Diisi',
                'email.required' => 'Email Silahkan Diisi',
                'password.required' => 'Password Silahkan Diisi',
                'cbrole.required' => 'Role User Silahkan Dipilih',
                'phone.required' => 'Nomor Telepon Silahkan Diisi',
                'address.required' => 'Alamat Silahkan Diisi',
                'desc.required' => 'Detail Alamat Silahkan Diisi',
                'file_foto.required' => 'Silahkan Mengupload File Foto',
            ];
        }
    }
}
