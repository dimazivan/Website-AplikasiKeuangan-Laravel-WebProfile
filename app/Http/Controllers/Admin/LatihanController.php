<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Latihan;

class LatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Latihan";
        // $data = Latihan::all();

        // No 1
        $data = ['Dimaz','Ivan','Perdana','PDIP'];

        for ($i=0; $i < sizeof($data); $i++) {
            $hasil[] = str_split($data[$i]);
        }

        for ($b=0; $b < sizeof($data); $b++) {
            for ($c=0; $c < strlen($data[$b]); $c++) {
                $sementara[] = $data[$b][$c];
            }
        }

        $result = [];
        for ($e=0; $e < sizeof($data); $e++) {
            for ($f=0; $f < strlen($data[$e]); $f++) {
                for ($g=0; $g < sizeof($sementara); $g++) {
                    if ($data[$e][$f] === $sementara[$g]) {
                        //
                    } else {
                        for ($z=0; $z > sizeof($result) ; $z++) {
                            if ($result[$z] === $data[$e][$f]) {
                                //
                            } else {
                                $result[] = $data[$e][$f];
                            }
                        }
                    }
                }
                // $result[] = $data[$e][$f];
            }
        }

        // for ($z=0; $z < sizeof($hasil); $z++) {
        //     $result_merge[] = array_merge($hasil[$z]);
        // }

        $result_merge[] = array_merge($hasil[0], $hasil[1], $hasil[2], $hasil[3]);

        // No 3
        $data_matriks = [1,2,3,4];

        for ($m=0; $m < sizeof($data_matriks) ; $m++) {
            // matriks belom
        }

        // dd(
        //     $title,
        //     $title[1],
        //     $data,
        //     $data[0],
        //     $data[0][1],
        //     strlen($data[0]),
        //     $data[1],
        //     $data[2],
        //     $data[3],
        //     $hasil,
        //     $hasil[0],
        //     array_column($hasil, 'array'),
        //     $result_merge,
        //     $result_merge[0],
        //     array_unique($result_merge[0]),
        //     $data_matriks,
        // );

        // dd(
        //     $sementara,
        //     $sementara[0],
        //     $sementara[0]!==$sementara[0],
        //     $sementara[0]===$data[0][0],
        //     $sementara[0]===$data[0][1],
        //     sizeof($sementara),
        //     $result,
        //     sizeof($result),
        // );

        return view('admin.pages.latihan.index', [
            'title' => $title,
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
        $title = "Halaman Latihan";

        return view('admin.pages.latihan.create_canvas', [
            'title' => $title,
        ]);
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
