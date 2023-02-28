<?php

namespace App\Http\Controllers;

use App\Models\ManualResult;
use App\Http\Requests\StoreManualResultRequest;
use App\Http\Requests\UpdateManualResultRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManualResultController extends Controller
{
    public function save_manual_result(Request $request)
    {
        $requestedData = (object)$request->json()->all();

        $today= Carbon::today()->format('Y-m-d');
        $manualResult = new ManualResult();
        $manualResult->draw_master_id = $requestedData->drawMasterId;
        $manualResult->rank_id = $requestedData->rankId;
        $manualResult->game_date = $today;
        $manualResult->value = $requestedData->value;
        $manualResult->save();

        return response()->json(['success'=>$manualResult], 200);
    }

    public function get_results($id)
    {
        $manualResult = ManualResult::with('ranks','draw_master')
            ->orderBy('rank_id')
            ->whereDrawMasterId($id)
            ->get();
        return response()->json(['success'=>$manualResult], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreManualResultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManualResultRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ManualResult  $manualResult
     * @return \Illuminate\Http\Response
     */
    public function show(ManualResult $manualResult)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManualResult  $manualResult
     * @return \Illuminate\Http\Response
     */
    public function edit(ManualResult $manualResult)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManualResultRequest  $request
     * @param  \App\Models\ManualResult  $manualResult
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManualResultRequest $request, ManualResult $manualResult)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManualResult  $manualResult
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManualResult $manualResult)
    {
        //
    }
}
