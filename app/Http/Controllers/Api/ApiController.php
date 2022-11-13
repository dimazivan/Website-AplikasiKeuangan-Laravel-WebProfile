<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Redirect;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Data Api";
        $url = "https://dummyjson.com/products";

        // $data = json_decode(file_get_contents('https://dummyjson.com/products'), true);
        // $data = $this->json('GET', $url)->seeStatusCode(200)->decodeResponseJson();
        // $data = $this->get($url)->seeStatusCode(200)->response->getContent();

        $data = file_get_contents('https://dummyjson.com/products');
        $myData = json_decode($data);
        $dataMap = $myData->products;

        // dd(
        //     $data,
        //     compact('data'),
        //     $data['products'],
        //     $data['products'][0],
        //     $data['products'][1]['id'],
        // );

        // dd(
        //     $data,
        //     $dataMap,
        //     compact('data'),
        // );

        return view(
            'admin.pages.api.data_api',
            [
            'title' => $title,
            'dataMap' => $dataMap,
        ],
            // ini untuk menjadikan data kedalam bentuk array tapi tidak dipakai
            compact('data')
        );
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
