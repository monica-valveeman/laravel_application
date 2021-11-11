<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class educationcontroller extends Controller
{
   
    public function store(Request $request){
        
        $education=new Education();
        $education->year_of_experience=$request->year_of_experience;
        $education->under_graduate=$request->under_graduate;
        $education->post_graduate=$request->post_graduate;
        $education->save();
        return redirect('/education');        
    }


    public function create(){
        return view('education.create');
    }

}
