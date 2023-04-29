<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api_ProductStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\PostResource;
use App\Models\Product;
use Carbon\Carbon;
use Redirect;

class Api_ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Product::all();
        // $status = "DATA MASOKK BOZZZ";
        // $message = "List Data";
        // $skip = 0;
        // $limit = 0;

        // return new PostResource($status, $message, $skip, $limit, $data);

        //get data from table product
        $product = Product::latest()->get();

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Product',
            'data'    => $product
        ], 200);
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
    public function store(Api_ProductStoreRequest $request)
    {
        //set validation
        $validator = $request->validated();

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if ($request->hasFile('images')) {
            if (filesize($request->images) > 1000 * 10000) {
                return response()->json($validator->errors(), 400);
            }

            if ($request->images->getClientOriginalExtension() == "jpg" ||
            $request->images->getClientOriginalExtension() == "jpeg" ||
            $request->images->getClientOriginalExtension() == "png" ||
            $request->images->getClientOriginalExtension() == "gif") {
                if ($request->hasFile('images')) {
                    $file = $request->file('images');
                    $nama_file = time() . "_" . $file->getClientOriginalName();
                    $file->storeAs('/data/image/product/', $nama_file);
                } else {
                    $nama_file = "";
                }

                // Query insert dengan foto
                $product = Product::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'price' => $request->price,
                    'discountPercentage' => $request->discountPercentage,
                    'rating'     => $request->rating,
                    'stock'     => $request->stock,
                    'brand'     => $request->brand,
                    'category'   => $request->category,
                    'thumbnail'   => $request->thumbnail,
                    'images'   => $nama_file,
                    'fvoid'   => 1,
                ]);
            }
        } else {
            // Query insert tanpa foto
            $product = Product::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'discountPercentage' => $request->discountPercentage,
                'rating'     => $request->rating,
                'stock'     => $request->stock,
                'brand'     => $request->brand,
                'category'   => $request->category,
                'thumbnail'   => $request->thumbnail,
                'fvoid'   => 1,
            ]);

        }
        //success save to database
        if($product) {
            return response()->json([
                'success' => true,
                'message' => 'Product Created',
                'data'    => $product
            ], 201);
        }

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Product Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find post by ID
        $product = Product::findOrfail($id);

        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Product',
            'data'    => $product
        ], 200);
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
    public function update(Api_ProductStoreRequest $request, $id)
    {
        // dd(
        //     $request->all(),
        // );

        $validator = $request->validated();

        //response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        //find product by ID
        $product = Product::findOrFail($request->id);

        if($product) {
            //update product
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'discountPercentage' => $request->discountPercentage,
                'rating'     => $request->rating,
                'stock'     => $request->stock,
                'brand'     => $request->brand,
                'category'   => $request->category,
                'thumbnail'   => $request->thumbnail,
                'fvoid'   => 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Product Updated',
                'data'    => $product
            ], 200);
        }

        //data product not found
        return response()->json([
            'success' => false,
            'message' => 'Product Not Found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find product by ID
        $product = Product::findOrfail($id);

        if($product) {

            //delete product
            $product->delete();

            return response()->json([
                'success' => true,
                'message' => 'Product Deleted',
            ], 200);

        }

        //data product not found
        return response()->json([
            'success' => false,
            'message' => 'Product Not Found',
        ], 404);
    }
}
