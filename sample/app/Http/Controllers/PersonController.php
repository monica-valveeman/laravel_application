<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Http\Requests\StorePerson;
use App\Http\Requests\UpdatePerson;
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $persons=\App\Person::all();
        return view('Persons.index',compact('persons'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Persons.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerson $request)
    {
        
        $person=new Person();
         
        $person->FirstName=$request->FirstName;
        $person->LastName=$request->LastName;
        $person->mail=$request->mail;
        if($files=$request->file('img')){  
            $name=$files->getClientOriginalName();  
            $files->move('laravelpictures',$name);  
            $person->img=$name;  
            }  
        $person->save();
        return redirect('/Persons')->with('success','Record Created Successfully');

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
        $persons=\App\Person::findorFail($id);
        return view('Persons.edit', compact('persons'));
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
        $request->validate([ 'FirstName'=>'required|alpha',
        'LastName'=>'required|alpha',
        'mail'=>'required|regex:/^(\w{2,})+@[a-zA-z]+\.[a-z]{2,3}$/|unique:persons,mail,'.$id,
        'img'=>'required|image|mimes:jpg,jpeg'        
    ]);

        
        $persons=Person::find($id);
        $persons->FirstName=$request->FirstName;
        $persons->LastName=$request->LastName;
        $persons->mail=$request->mail;
        if($files=$request->file('img')){  
            $name=$files->getClientOriginalName();  
            $files->move('laravelpictures',$name);  
            $persons->img=$name;  
            }  
        
        $persons->save();
        return redirect('/Persons')->with('success','Record Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person=\App\Person::find($id);
        $person->delete();
        return redirect('/Persons')->with('success','Record Deleted Successfully');
    }
}
