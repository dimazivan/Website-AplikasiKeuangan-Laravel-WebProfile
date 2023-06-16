<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Detail_projects;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Projects::with('detail_projects')
        ->orderBy('date', 'desc')
        ->paginate(9);
        // ->onEachSide(6);

        $data2 = Detail_projects::all();

        // dd(
        //     $data,
        //     $data2,
        //     Route::current(),
        //     Route::currentRouteName(),
        //     $host = $_SERVER['SERVER_NAME'],
        //     url()->current(),
        //     $part = explode('/', url()->current()),
        //     request()->segments(),
        //     request()->segment(1),
        // );

        return view('landing.pages.project.project', [
            'data' => $data,
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
