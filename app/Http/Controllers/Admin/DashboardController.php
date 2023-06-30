<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log_auth;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Dashboard";
        $jml_role = User::Role()->count();
        $jml_user = User::all()->count();
        $jml_userac = User::ActiveUser()->count();
        $jml_userdeac = User::DeactiveUser()->count();
        $categoryProduct = Product::Category();
        $jml_product = Product::allItem()->count();
        $data_logauth = Log_auth::orderBy('updated_at', 'desc')
        ->paginate(8);

        return view("admin.index", [
            "title" => $title,
            "jml_role" => $jml_role,
            "jml_user" => $jml_user,
            "jml_userac" => $jml_userac,
            "jml_userdeac" => $jml_userdeac,
            "categoryProduct" => $categoryProduct,
            "jml_product" => $jml_product,
            "data_logauth" => $data_logauth,
        ]);

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
        //
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
