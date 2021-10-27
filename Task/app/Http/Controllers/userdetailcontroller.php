<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdetails;
use DB;

class userdetailcontroller extends Controller
{
    public function create(){
        $states=DB::table("state")->pluck("state_name","id");
        $cities=DB::table("city")->pluck("city_name","id");
        return view('userdetails.create',compact('states'),compact('cities'));
    }

    public function store(Request $request){

            $userdetail=new Userdetails();

            if($files=$request->file('profile_upload')){  
                $name=$files->getClientOriginalName();  
                $files->move('userprofiles',$name);  
                $userdetail->profile_upload=$name;  
            }  

            $userdetail->date_of_birth=$request->date_of_birth;
            $userdetail->address=$request->address;

            $userdetail->state=$request->state;
            $userdetail->city=$request->city;

            $userdetail->user_id=$request->user_id;
            $userdetail->save();

            return redirect('/userdetails');
    }

}
