<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locker;
use App\Models\Members;
use App\Models\Registions;

class MonoController extends Controller
{
    public function list(){
        return Registions::All();

    }

    public function search($name){
        return Members::where("name","like","%".$name."%")->get();

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
    public function add(Request $req)
    {
        
        $registions = new Registions;
        $registions -> locker_id=$req->locker_id;
        $registions -> member_id=$req->member_id;
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
