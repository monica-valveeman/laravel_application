<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class educationcontroller extends Controller
{
    public function create(){
        return view('education.create');
    }

    public function store(Request $request){
        
        $education=new Education();
        $education->year_of_experience=$request->year_of_experience;
        $education->under_graduate=$request->under_graduate;
        $education->post_graduate=$request->post_graduate;
        $education->user_id=$request->user_id;
        $education->save();
        return redirect('/education');        
    }
}
