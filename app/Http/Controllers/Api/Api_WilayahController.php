<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class Api_WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $province = Province::all();
        $city = Regency::all();
        $ward = Village::all();
        $district = District::all();

        dd(
            $province,
            $city,
            $ward,
            $district,
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ambilkota($id)
    {
        $city = Regency::where('province_id', $id)
        ->orderBy('name', 'asc')
        ->pluck('name', 'id');

        // dd(
        //     $id,
        //     $city,
        // );

        return json_encode($city);
    }

    public function ambilkecamatan($id)
    {
        $district = District::where('regency_id', $id)
        ->orderBy('name', 'asc')
        ->pluck('name', 'id');

        // dd(
        //     $id,
        //     $district,
        // );

        return json_encode($district);
    }

    public function ambilkelurahan($id)
    {
        $ward = Village::where('district_id', $id)
        ->orderBy('name', 'asc')
        ->pluck('name', 'id');

        // dd(
        //     $id,
        //     $ward,
        // );

        return json_encode($ward);


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
        $city = Regency::where('province_id', $id)->pluck('name', 'id');

        dd(
            $city,
        );

        return json_encode($city);
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
