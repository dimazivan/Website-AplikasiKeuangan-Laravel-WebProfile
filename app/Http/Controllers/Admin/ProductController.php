<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Product;
use Carbon\Carbon;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Data Produk";
        $data = Product::all();
        $jml_product = Product::allItem()->count();
        $jml_product_all = Product::all()->count();
        $categoryProduct = Product::Category();

        // dd(
        //     $title,
        //     $data[0]->images,
        //     $data,
        //     $categoryProduct,
        //     $categoryProduct[0],
        //     $categoryProduct[0]->category,
        //     sizeof($categoryProduct),
        // );

        // Tabel
        return view('admin.pages.product.data_product', [
            'title' => $title,
            'data' => $data,
            'jml_product' => $jml_product,
            'jml_product_all' => $jml_product_all,
        ]);

        // Card
        // return view('admin.pages.product.card_product', [
        //     'title' => $title,
        //     'data' => $data,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(
        //     $request->all(),
        //     $request->file_produk,
        //     empty($request->file_produk),
        //     !empty($request->file_produk),
        // );

        // Validation
        $validator = Validator::make(request()->all(), [
            'file_produk' => 'mimes:xls,xlsx,csv|max:10000',
        ], )->setAttributeNames(
            [
                'file_produk' => 'File',
            ],
        );

        if ($validator->fails()) {
            // Log

            return back()->withErrors($validator->errors());
        } else {
            if (!empty($request->file_produkk)) {
                //
            } elseif ($request->all()!= null) {
                //
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
