<?php
/*
 * @Author: your name
 * @Date: 2022-03-01 09:57:15
 * @LastEditTime: 2022-03-01 10:39:36
 * @LastEditors: Please set LastEditors
 * @Description: 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 * @FilePath: \mono-luck-back\app\Http\Controllers\MemberController.php
 */

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function index()
    {
        $members = DB::table('members')->first();
        return response(['members' => $members],Response::HTTP_OK); 
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $members
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $memberId)
    {
        $members = DB::table('members')->where('phone', $member_id)->get();
        return response($members);
    }

    public function search($phone){
        return DB::table('members')->where("phone",$phone)->get();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Members $members)
    {
        //
    }

    static public function findIdbyPhone($phone){
        $memberId = DB::table("members")->where("phone",$phone)->value('id');
        return $memberId;
    }
}
