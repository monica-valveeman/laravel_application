<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userdetails;
use App\Education;
use DB;

class userdetailcontroller extends Controller
{

    public function index(){
        $users=Userdetails::with('registerusers')->get();
        $educations=Education::with('registeruser')->get();
        return view('user.Thank', compact('users','educations'));
    }
    public function create(){
        $states=DB::table("state")->pluck("state_name","id");
        return view('userdetails.create',compact('states'));
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
            $userdetail->user_id=$request->user_id;
            $userdetail->state=$request->state;
            $userdetail->city=$request->city;

            
            
            $userdetail->save();

            return redirect('/userdetails');
    }

    public function cityrequest($id)
    {
        $cities = DB::table("city")->where("state_id",$id)->pluck("city_name","id");
        return json_encode($cities);
    }

}
