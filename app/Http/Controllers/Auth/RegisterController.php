<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Services\Register\RegisterService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Log_users;
use App\Models\Roles;
use App\Models\Log_auth;
use App\Models\Province;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(RegisterService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function index()
    {
        $title = "Register Page";
        $roles = Roles::all();
        $province = Province::orderBy("name", "asc")->pluck("name", "id");

        return view(
            "admin.register",
            [
                "title" => $title,
                "roles" => $roles,
            ],
            compact("province")
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
    public function store(UserStoreRequest $request)
    {
        // dd(
        //     $request->all(),
        // );

        $validator = $request->validated();

        // dd(
        //     !$validator,
        //     $validator,
        //     $request->all(),
        // );

        if (!$validator) {
            // Log user error validation
            Log_users::create([
                "users_id" => "0",
                "role" => "register",
                "activity" => "insert Data",
                "description" => "error validation",
                "status" => "failed",
                "mac_address" => "",
            ]);

            return back()->withErrors($validator->errors());
        }

        try {
            $this->registerService->storeRegister($request);
            return redirect()
                ->route("index.login")
                ->with("info", "Data Users has been saved");
        } catch (\Exception $e) {
            //throw $e
            return redirect()
                ->route("index.login")
                ->with("error", $e->getMessage());
            // return $this->exceptionError($e->getMessage());
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
