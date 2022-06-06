<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemSize;
use App\Models\ItemTransectionLog;
use Illuminate\Http\Request;

class ItemTransectionLogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        // $logs = ItemTransectionLog::select('item_size')
        //                             ->selectRaw('sum(qty) as total')
        //                             ->where('item_id', $id)
        //                             ->groupBy('item_size')
        //                             ->get();

        // return Item::with('itemSize')
        //                     ->findOrFail($id);

        // return ItemTransectionLog::where('item_id', $id)

        


        
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


    public function searchByItemIDSize($item_id, $size_id)
    {
        return ItemTransectionLog::where('item_id', $item_id)
                                    ->where('item_size', $size_id)
                                    ->sum('qty');
                                    // ->get();
    }

}
