<?php

namespace App\Http\Controllers;

use App\Models\ManualResult;
use App\Http\Requests\StoreManualResultRequest;
use App\Http\Requests\UpdateManualResultRequest;
use App\Models\Rank;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManualResultController extends Controller
{
    public function save_manual_result(Request $request)
    {
        $requestedData = $request->json()->all();

//        return response()->json(['success'=>1, 'data' => $requestedData[0]], 200);

        $today= Carbon::today()->format('Y-m-d');

        foreach ($requestedData as $data){
            $manualResult = new ManualResult();
            $manualResult->draw_master_id = $data['drawMasterId'];
            $manualResult->rank_id = $data['rankId'];
            $manualResult->game_date = $today;
            $manualResult->rank_prize_value = Rank::find($data['rankId'])->prize;
            $manualResult->value = $data['value'];
            $manualResult->save();
        }

        return response()->json(['success'=>1, 'data' => $manualResult], 200);
    }

    public function get_results()
    {
//        $today= Carbon::today()->subDays(1)->format('Y-m-d');
        $today= DB::select("select game_date from manual_results order by id desc limit 1")[0]->game_date;
        $manualResult = ManualResult::with('ranks','draw_master')
            ->orderBy('rank_id')
            ->whereGameDate($today)
            ->get();

//        if(!$manualResult){
//            $today= Carbon::today()->subDays(1)->format('Y-m-d');
//            $manualResult = ManualResult::with('ranks','draw_master')
//                ->orderBy('rank_id')
//                ->whereGameDate($today)
//                ->whereDrawMasterId($id)
//                ->get();
//        }
        return response()->json(['success'=>1 , 'data' => $manualResult], 200);
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
