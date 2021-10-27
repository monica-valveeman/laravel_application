<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class statecitycontroller extends Controller
{
    public function demo(){
        $states=DB::table("state")->pluck("state_name","id");
        return view('userdetails.create',compact('states'));
    }
    public function demorequest($id){
        $cities=DB::table("city")->where("state_id",$id)->lists("city_name","id");
        return json_encode($cities);
    }
}
