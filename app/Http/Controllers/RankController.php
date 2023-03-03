<?php

namespace App\Http\Controllers;

use App\Models\Rank;
use App\Http\Requests\StoreRankRequest;
use App\Http\Requests\UpdateRankRequest;
use Illuminate\Http\Request;

class RankController extends Controller
{
    public function get_rank()
    {
        $ranks = Rank::get();
        return response()->json(['success'=>1,'data'=>$ranks], 200,[],JSON_NUMERIC_CHECK);
    }

    public function update_rank(Request $request)
    {
        $requestedData = (object)$request->json()->all();
        $rank = Rank::find($requestedData->id);
        $rank->prize = $requestedData->prize;
        $rank->update();

        return response()->json(['success'=>1,'data'=>$rank], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRankRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRankRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function show(Rank $rank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function edit(Rank $rank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRankRequest  $request
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRankRequest $request, Rank $rank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rank  $rank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rank $rank)
    {
        //
    }
}
