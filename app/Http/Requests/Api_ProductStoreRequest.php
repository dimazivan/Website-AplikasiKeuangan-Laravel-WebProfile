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
                'stock' => 'required|numeric',
                'brand' => 'required',
                'category' => 'required',
                'thumbnail' => 'required',
                'images' => 'mimes:jpeg,jpg,png,gif|max:10000',
                'fvoid' => 'required',
            ];
        } elseif(request()->isMethod('put')) {
            return[
                'title' => 'required|max:255',
                'description' => 'required|max:255',
                'price' => 'required|numeric|digits_between:3,100',
                'discountPercentage' => 'numeric',
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
                'title.max' => 'Judul/Nama maksimal memiliki 255 karakter huruf',
                'description.required' => 'Deskripsi Produk Silahkan Diisi',
                'description.max' => 'Deskripsi maksimal memiliki 255 karakter huruf',
                'price.required' => 'Harga Produk Silahkan Diisi',
                'price.numeric' => 'Harga Produk harus berupa angka',
                'price.digits_between' => 'Nominal Harga Produk harus memiliki panjang minimal 3 dan maksimal 100',
                'stock.required' => 'Stok Produk Silahkan Diisi',
                'stock.numeric' => 'Stok Produk harus berupa angka',
                'brand.required' => 'Nama Brand Produk Silahkan Diisi',
                'category.required' => 'Kategori Produk Silahkan Dipilih',
                'thumbnail.required' => 'Thumbnail Produk Silahkan Diisi',
                'images.mimes' => 'Gambar Produk harus berformat jpeg/jpg/png/gif',
                'images.max' => 'Ukuran Gambar Produk Maksimal 10 MB',
                'fvoid.required' => 'Status Produk Silahkan Diisi',
            ];
        } elseif(request()->isMethod('put')) {
            return[
                'title.required' => 'Judul/Nama Produk Silahkan Diisi',
                'title.max' => 'Judul/Nama maksimal memiliki 255 karakter huruf',
                'description.required' => 'Deskripsi Produk Silahkan Diisi',
                'description.max' => 'Deskripsi maksimal memiliki 255 karakter huruf',
                'price.required' => 'Harga Produk Silahkan Diisi',
                'price.numeric' => 'Harga Produk harus berupa angka',
                'price.digits_between' => 'Nominal Harga Produk harus memiliki panjang minimal 3 dan maksimal 100',
                'stock.required' => 'Stok Produk Silahkan Diisi',
                'stock.numeric' => 'Stok Produk harus berupa angka',
                'brand.required' => 'Nama Brand Produk Silahkan Diisi',
                'category.required' => 'Kategori Produk Silahkan Dipilih',
                'thumbnail.required' => 'Thumbnail Produk Silahkan Diisi',
                'images.mimes' => 'Gambar Produk harus berformat jpeg/jpg/png/gif',
                'images.max' => 'Ukuran Gambar Produk Maksimal 10 MB',
                'fvoid.required' => 'Status Produk Silahkan Diisi',
            ];
        } else {
            return[
                'title.required' => 'Judul/Nama Produk Silahkan Diisi',
                'title.max' => 'Judul/Nama maksimal memiliki 255 karakter huruf',
                'description.required' => 'Deskripsi Produk Silahkan Diisi',
                'description.max' => 'Deskripsi maksimal memiliki 255 karakter huruf',
                'price.required' => 'Harga Produk Silahkan Diisi',
                'price.numeric' => 'Harga Produk harus berupa angka',
                'price.digits_between' => 'Nominal Harga Produk harus memiliki panjang minimal 3 dan maksimal 100',
                'stock.required' => 'Stok Produk Silahkan Diisi',
                'stock.numeric' => 'Stok Produk harus berupa angka',
                'brand.required' => 'Nama Brand Produk Silahkan Diisi',
                'category.required' => 'Kategori Produk Silahkan Dipilih',
                'thumbnail.required' => 'Thumbnail Produk Silahkan Diisi',
                'images.mimes' => 'Gambar Produk harus berformat jpeg/jpg/png/gif',
                'images.max' => 'Ukuran Gambar Produk Maksimal 10 MB',
                'fvoid.required' => 'Status Produk Silahkan Diisi',
            ];
        }
    }
}
