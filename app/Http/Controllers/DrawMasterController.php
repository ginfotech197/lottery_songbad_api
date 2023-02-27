<?php

namespace App\Http\Controllers;

use App\Models\drawMaster;
use App\Http\Requests\StoredrawMasterRequest;
use App\Http\Requests\UpdatedrawMasterRequest;

class DrawMasterController extends Controller
{

    public function get_draw_time()
    {
        $drawMaster = DrawMaster::get();
        return response()->json(['success'=>1,'data'=>$drawMaster], 200,[],JSON_NUMERIC_CHECK);
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
     * @param  \App\Http\Requests\StoredrawMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredrawMasterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\drawMaster  $drawMaster
     * @return \Illuminate\Http\Response
     */
    public function show(drawMaster $drawMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\drawMaster  $drawMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(drawMaster $drawMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedrawMasterRequest  $request
     * @param  \App\Models\drawMaster  $drawMaster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedrawMasterRequest $request, drawMaster $drawMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\drawMaster  $drawMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(drawMaster $drawMaster)
    {
        //
    }
}
