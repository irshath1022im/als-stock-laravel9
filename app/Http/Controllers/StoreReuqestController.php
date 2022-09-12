<?php

namespace App\Http\Controllers;

use App\Models\StoreReuqest;
use Illuminate\Http\Request;

class StoreReuqestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $result = StoreReuqest::get();
        return view('store_request.index');
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
     * @param  \App\Models\StoreReuqest  $storeReuqest
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return $id;
        $result = StoreReuqest::with(['storeRequestItems'=> function($query){
            return $query->with(['itemSize' => function($query){
                return $query->with(['item', 'size']);
            }]);
        }])->findOrFail($id);

        // return $result;

        return view('store_request.show',['store_request' =>$result ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreReuqest  $storeReuqest
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreReuqest $storeReuqest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreReuqest  $storeReuqest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreReuqest $storeReuqest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreReuqest  $storeReuqest
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreReuqest $storeReuqest)
    {
        //
    }
}
