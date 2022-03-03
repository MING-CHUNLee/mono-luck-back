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
        $user_id=MemberController::findIdbyPhone($request->phone);
        if($user_id!=NULL){
            $Registion=DB::table("Registions")->where("member_id",$user_id)->first();
            if($Registion!=NULL){
                $locker=DB::table("lockers")->where("user_id",$user_id)->first();
                if($locker!=NULL){
                    return response(['locker_id'=>$locker->locker_id,'Num'=>$locker->Num],Response::HTTP_OK);
                }
                else{
                    return response("you haven't got the locker yet",Response::HTTP_OK);
                }
            }
            else{
                return response("You have not registered yet",Response::HTTP_OK);
            }
        }
        else{
            return response("you are not member.",Response::HTTP_OK);
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
