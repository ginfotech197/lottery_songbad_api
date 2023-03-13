<?php

namespace App\Http\Controllers;

use App\Models\GameMessage;
use App\Http\Requests\StoreGameMessageRequest;
use App\Http\Requests\UpdateGameMessageRequest;
use Illuminate\Http\Request;

class GameMessageController extends Controller
{

    public function get_game_message()
    {
        $data = GameMessage::get();
        return response()->json(['success'=>1,'data'=>$data], 200,[],JSON_NUMERIC_CHECK);
    }

    public function update_game_message(Request $request)
    {
        $requestedData = (object)$request->json()->all();
        $gameMessage = GameMessage::find($requestedData->id);
        $gameMessage->message = $requestedData->message;
        $gameMessage->update();

        return response()->json(['success'=>1,'data'=>$gameMessage], 200,[],JSON_NUMERIC_CHECK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameMessage  $gameMessage
     * @return \Illuminate\Http\Response
     */
    public function show(GameMessage $gameMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameMessage  $gameMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(GameMessage $gameMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameMessageRequest  $request
     * @param  \App\Models\GameMessage  $gameMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameMessageRequest $request, GameMessage $gameMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameMessage  $gameMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameMessage $gameMessage)
    {
        //
    }
}
