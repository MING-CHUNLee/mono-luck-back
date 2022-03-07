<?php

namespace App\Http\Controllers;

use App\Models\Locker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Response;

class LockerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locker=DB::table("locker")->get();
    }

    public function findLockerbyPhone(Request $request)
    {
        $memberId=MemberController::findIdbyPhone($request->phone);
        if($memberId!=NULL){
            $registrations=DB::table("REGISTRATIONs")->where("memberId",$memberId)->first();
            if($registrations!=NULL){
                $locker=DB::table("LOCKERs")->where("memberId",$memberId)->first();
                if($locker!=NULL){
                    $response="您抽中的鎖櫃為 - ".$locker->lockerNo." 號(".$locker->lockerEncoding.")<br>請向工作人員索取使用登記表簽名";
                    return response($response,Response::HTTP_OK);
                }
                else{
                    return response("目前鎖櫃尚在登記中，<br>請在 12/12 AM 10 回來本系統查看中籤資訊",Response::HTTP_OK);
                }
            }
            else{
                return response("您尚未登記過鎖櫃",Response::HTTP_OK);
            }
        }
        else{
            return response("非暢遊會員,無法登記鎖櫃!",Response::HTTP_OK);
        }
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
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function show(Locker $locker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locker $locker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locker  $locker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Locker $locker)
    {
        //
    }
}
