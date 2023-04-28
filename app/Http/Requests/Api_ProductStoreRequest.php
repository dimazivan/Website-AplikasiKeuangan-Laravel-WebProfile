<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Api_ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        // return false;
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
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'price' => 'required|numeric|digits_between:3,100',
                'discountPercentage' => 'numeric',
                // 'rating' => 'required',
                'stock' => 'required|numeric',
                'brand' => 'required',
                'category' => 'required',
                'thumbnail' => 'required',
                'images' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'fvoid' => 'required',
            ];
        } else {
            return[
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'price' => 'required|numeric|digits_between:3,100',
                'discountPercentage' => 'numeric',
                // 'rating' => 'required',
                'stock' => 'required|numeric',
                'brand' => 'required',
                'category' => 'required',
                'thumbnail' => 'required',
                'images' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'fvoid' => 'required',
            ];
        }
    }

    public function messages()
    {
        if (request()->isMethod('post')) {
            return[
                'title.required' => 'Judul/Nama Produk Silahkan Diisi',
                'description.required' => 'Deskripsi Produk Silahkan Diisi',
                'price' => 'Harga Produk Silahkan Diisi',
                // 'rating' => 'Rating Produk Silahkan Diisi',
                'stock' => 'Stok Produk Silahkan Diisi',
                'brand' => 'Nama Brand Produk Silahkan Diisi',
                'category' => 'Kategori Produk Silahkan Dipilih',
                'thumbnail' => 'Thumbnail Produk Silahkan Diisi',
            ];
        } else {
            return[
                'title.required' => 'Judul/Nama Produk Silahkan Diisi',
                'description.required' => 'Deskripsi Produk Silahkan Diisi',
                'price' => 'Harga Produk Silahkan Diisi',
                // 'rating' => 'Rating Produk Silahkan Diisi',
                'stock' => 'Stok Produk Silahkan Diisi',
                'brand' => 'Nama Brand Produk Silahkan Diisi',
                'category' => 'Kategori Produk Silahkan Dipilih',
                'thumbnail' => 'Thumbnail Produk Silahkan Diisi',
            ];
        }
    }
}
