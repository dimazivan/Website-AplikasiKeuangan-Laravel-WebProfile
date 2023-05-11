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
                'phone' => 'required|numeric|digits_between:10,13',
                'address' => 'required|max:255',
                'desc' => 'max:255|nullable',
                'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000|nullable',
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
                'phone' => 'required|numeric|digits_between:10,13',
                'address' => 'required|max:255',
                'desc' => 'max:255|nullable',
                'file_foto' => 'mimes:jpeg,jpg,png,gif|max:10000|nullable',
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return[
                'first_name.required' => 'Nama Depan Silahkan Diisi',
                'first_name.max' => 'Nama Depan maksimal memiliki 255 karakter huruf',
                'last_name.required' => 'Nama Belakang Silahkan Diisi',
                'last_name.max' => 'Nama Belakang maksimal memiliki 255 karakter huruf',
                'username.required' => 'Username Silahkan Diisi',
                'email.required' => 'Email Silahkan Diisi',
                'email.email' => 'Masukkan format email dengan benar',
                'password.required' => 'Password Silahkan Diisi',
                'password.min' => 'Panjang password minimal 5 karakter',
                'password.max' => 'Panjang password maksimal 40 karakter',
                'cbrole.required' => 'Role User Silahkan Dipilih',
                'phone.required' => 'Nomor Telepon Silahkan Diisi',
                'phone.numeric' => 'Nomor Telepon harus berupa angka',
                'phone.digits_between' => 'Nomor telepon harus memiliki panjang minimal 10 dan maksimal 13 karakter',
                'address.required' => 'Alamat Silahkan Diisi',
                'desc.required' => 'Detail Alamat Silahkan Diisi',
                'file_foto.mimes' => 'File Gambar harus berformat jpeg/jpg/png/gif',
                'images.max' => 'Ukuran Gambar Produk Maksimal 10 MB',
            ];
        } else {
            return[
                'first_name.required' => 'Nama Depan Silahkan Diisi',
                'first_name.max' => 'Nama Depan maksimal memiliki 255 karakter huruf',
                'last_name.required' => 'Nama Belakang Silahkan Diisi',
                'last_name.max' => 'Nama Belakang maksimal memiliki 255 karakter huruf',
                'username.required' => 'Username Silahkan Diisi',
                'email.required' => 'Email Silahkan Diisi',
                'email.email' => 'Masukkan format email dengan benar',
                'password.required' => 'Password Silahkan Diisi',
                'password.min' => 'Panjang password minimal 5 karakter',
                'password.max' => 'Panjang password maksimal 40 karakter',
                'cbrole.required' => 'Role User Silahkan Dipilih',
                'phone.required' => 'Nomor Telepon Silahkan Diisi',
                'phone.numeric' => 'Nomor Telepon harus berupa angka',
                'phone.digits_between' => 'Nomor telepon harus memiliki panjang minimal 10 dan maksimal 13 karakter',
                'address.required' => 'Alamat Silahkan Diisi',
                'desc.required' => 'Detail Alamat Silahkan Diisi',
                'file_foto.mimes' => 'File Gambar harus berformat jpeg/jpg/png/gif',
                'images.max' => 'Ukuran Gambar Produk Maksimal 10 MB',
            ];
        }
    }
}
