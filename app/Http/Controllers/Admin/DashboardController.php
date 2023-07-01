<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log_auth;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $jml_log = Log_auth::whereYear('created_at', Carbon::now()->year)
        // ->whereMonth('created_at', Carbon::now()->month)
        // ->get();

        $jml_log = DB::table('log_auths')
        ->select(
            DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') as date"),
            DB::raw("SUM(status= 'success') as success"),
            DB::raw("SUM(status= 'failed') as failed"),
        )
        ->whereYear('created_at', Carbon::now()->year)
        ->whereMonth('created_at', Carbon::now()->month)
        // ->whereDate('created_at', '<=', Carbon::now()->startOfMonth())
        // ->whereDate('created_at', '>=', Carbon::now()->endOfMonth())
        ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"))
        ->get();

        // $currentMonth = Carbon::now()->month;
        // $currentYear = Carbon::now()->year;

        // $startDate = Carbon::create($currentYear, $currentMonth, 1);
        // $endDate = $startDate->copy()->endOfMonth();

        // $period = CarbonPeriod::create($startDate, $endDate);

        // $datesArray = [];

        // foreach ($period as $date) {
        //     $datesArray[] = $date->toArray();
        // }

        // dd(
        //     $jml_log,
        //     Carbon::now()->startOfMonth(),
        //     Carbon::now()->endOfMonth(),
        //     $datesArray,
        //     $datesArray[0]['day'],
        // );

        return view("admin.index", [
            "title" => $title,
            "jml_role" => $jml_role,
            "jml_user" => $jml_user,
            "jml_userac" => $jml_userac,
            "jml_userdeac" => $jml_userdeac,
            "categoryProduct" => $categoryProduct,
            "jml_product" => $jml_product,
            "data_logauth" => $data_logauth,
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
