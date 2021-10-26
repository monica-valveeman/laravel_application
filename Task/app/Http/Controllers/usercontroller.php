<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registeruser;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user=Registeruser::all();
        return view('user.Thank',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }
    public function login(){
        return view('user.Login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
         'password'=>'between: 8,10'
        ]);
        
        $user=new Registeruser();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email_id=$request->email_id;
        $user->password=Hash::make($request->password,['rounds'=>10,]);
        $user->save();
        return redirect('/user')->with('success','Registration Successfull !!!');
    }
    
    public function post_login(Request $request){
        $login=$request->only('email_id','password');
        if(Auth::guard('registeruser')->attempt($login)){
            return redirect('/dashboard');
        }
        else{
            return redirect('/login')->with('success','Oops.. You entered invalid credentials');
        }
    }

    public function dashboard(){
        if(Auth::guard('registeruser')->check()){
            return view('user.Dashboard');
        }
    }

    public function email_validate(Request $request){
        $query=Registeruser::where('email_id', $request->email_id)->first('email_id');
       if($query){
         $return =  false;
        } 
        else{
         $return= true;
        }
        echo json_encode($return);
        exit;
        
    }

    public function logout(){
        Session::flush();
        Auth::guard('registeruser')->logout();
        return redirect('/login');
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
