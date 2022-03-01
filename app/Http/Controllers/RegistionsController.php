<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locker;
use App\Models\Members;
use App\Models\Registions;
use Illuminate\Support\Facades\DB;
use MemberController;

class RegistionsController extends Controller
{
    public function list(){
        return Registions::All();

    }

    public function search($phone){
        return Members::where("phone",$phone)->get();

    }

    public function find($phone){
        $a = DB::table("members")->where("phone",$phone)->value('member_id');
        //$members = DB::table('members')->where('phone', $member_id)->value('member_id');
        return $a;
    }

    // public function deletetest($member_id){
    //     $locker = Members::find($member_id);
    //     $result = $locker->delete();
    //     if($result)
    //     {
    //         return ["Result"=>"success delete".$member_id];
    //     }
    //     else
    //     {
    //         return ["Result"=>"fail"];
    //     }

    // }

    // public function updatetest(Request $req){
    //     $locker = Members::find($req->member_id);
    //     $locker -> name=$req->name;
    //     $result = $locker->save();
    //     if($result)
    //     {
    //         return ["Result"=>"success"];
    //     }
    //     else
    //     {
    //         return ["Result"=>"fail"];
    //     }

    // }
    public function abc(Request $req){
        return $this->find($req->phone);
    }


    public function add(Request $req)
    {
        if($this->find($req->phone)==""){
            return "no find phone";
        }
        else{
        $registions = new Registions;
        $registions -> locker_id=$req->locker_id;
        $registions -> member_id=MemberController::findIdbyPhone($req->phone);
        $result = $registions->save();
        if($result)
        {
            return ["Result"=>"success"];
        }
        else
        {
            return ["Result"=>"fail"];
        }

        }
        

    }
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
}
