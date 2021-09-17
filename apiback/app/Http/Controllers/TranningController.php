<?php

namespace App\Http\Controllers;

use App\Models\Tranning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TranningController extends Controller
{
    public function createTranning(Request $request)
    {
        Tranning::create([
            'name' => $request->name,
            'timeStart' => $request->timeStart,
            'about' => $request->about,
            'createId' => Auth::user()->id,
            'status' => 1,
            'array_users' => json_encode([]),
            'quest_data' => $request->quest_data
        ]);

        return response()->json([
            'status' => 'success'
        ]);
    }

    public function closeTranning(Request $request)
    {
        $status = 'error';

        if (Tranning::where('id', $request->id)->update(['status' => 0])) {
            return response()->json([
                'status' => $status
            ]);
        }
    }

    public function getTranning(Request $request)
    {
        $tranning = Tranning::where('id', $request->id)->first();
        if ($tranning) {
            return response()->json([
                'status' => 'success',
                'data' => $tranning
            ]);
        } else {
            return response()->json([
                'status' => 'error',
            ]);
        }
    }

    public function createMessageChat(Request $request)
    {
        DB::table('chatTranning')->insert(['userId' => Auth::user()->id, 'tId', $request->tId, 'message' => $request->message, 'date' => time()]);
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function getMessageChat(Request $request){
        $data = DB::table('chatTranning')->where('tId', $request->tId)->get();

        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function deleteMessageChat(Request $request){
        if(DB::table('chatTranning')->where('tId', $request->tId, 'userId', Auth::user()->id)->first()){
            DB::table('chatTranning')->where('tId', $request->tId, 'userId', Auth::user()->id)->delete();

            return response()->json([
                'status' => 'success',
            ]);
        }

        return response()->json([
            'status' => 'error',
            'error' => 'notFound'
        ]);
    }

    public function createUserResponse(Request $request)
    {
        $id = DB::table('userResponse')->insert([
            'userId' => Auth::user()->id,
            'qId' => $request->qId,
            'qGroupId' => $request->qGroupId,
            'response' => $request->response,
            'status' => 'wait',
            'date' => time()
        ]);

        return response()->json([
            'status' => 'success',
            'idRes' => $id
        ]);
    }

    public function getAllResponseUser(Request $request)
    {
        $getData = DB::table('userResponse')->where('qGroupId', $request->qGroupId)->get();
        if ($getData) {
            return response()->json([
                'status' => 'success',
                'data' => $getData
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'error' => 'dataEmpty'
            ]);
        }
    }

    public function changeStatusRequest(Request $request)
    {
        $status = 'decliened';

        if ($request->status == 'accept') {
            $status = 'accept';
        }

        if (DB::table('userResponse')->where('id', $request->id)->update(['status' => $status])) {
            return response()->json([
                'status' => 'success'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }


    public function createUserSession(Request $request)
    {
        if (User::where('id', $request->id)) {
            $getData = Tranning::where('id', $request->id)->first();
            $arrayUserDataHavePermision = json_decode($getData->array_users);
            $arrayUserDataHavePermision . push([
                'userId' => $request->userId,
                'questions' => json_encode($request->questions)
            ]);

            return response()->json([
                'status' => 'success'
            ]);
        }

        return response()->json([
            'status' => 'error'
        ]);
    }

    public function getAllTrannings(Request $request)
    {
        $data = Tranning::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }

    public function getTranningById(Request $request){
        $data = Tranning::where('id', $request->id)->first();
        if($data){
            return response()->json([
                'status' => 'success',
                'data' => $data
            ]);
        }

        return response()->json([
            'status' => 'error',
            'error' => 'not_found'
        ]);
    }

    public function getAllUserTrannings(Request $request){
        $data = Tranning::all();
        $dataUserReturn = [];

        foreach ($data as $dataTranning) {
            $dataTranningsAll = json_decode($dataTranning->array_users);
            foreach ($dataTranningsAll as $tranningData){
                if($tranningData->userId == Auth::user()->id){
                    $dataUserReturn.push($tranningData);
                }
            }
        }

        return response()->json([
            'status' => 'success',
            'data' => $dataUserReturn
        ]);
    }
}
