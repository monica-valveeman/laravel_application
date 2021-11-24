<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registeruser;
use App\Userdetails;
use App\Education;
use Auth;
use Session;
use DB;
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
        $educations=Education::all();

        return view('user.Thank',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function retrievestate(){
        $states=DB::table("state")->pluck("state_name","id");
        $years=[1,2,3,4,5,6,7,8,9,10];
        $UG = ['B.Sc Maths','B.Sc Physics','B.Sc Chemistry', 'B.Sc CS','B.Sc IT','B.B.A', 'B.C.A'];
        $PG = ['M.Sc Maths','M.Sc Physics','M.Sc Chemistry', 'M.Sc CS','M.Sc IT','M.B.A', 'M.C.A'];
        return view('user.create',compact('states','years','UG','PG'));
    }


    public function cityrequest($id)
    {
        $cities = DB::table("city")->where("state_id",$id)->pluck("city_name","id");
        return json_encode($cities);
    }

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
        $user=new Registeruser();

        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email_id=$request->email_id;
        $user->password=Hash::make($request->password,['rounds'=>10,]);
        $user->save();

        $id=$user->id;
        
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
        $userdetail->user_id=$id;
        
        
        $userdetail->save();

        $education=new Education();
        $education->year_of_experience=$request->year_of_experience;
        $education->under_graduate=$request->under_graduate;
        $education->post_graduate=$request->post_graduate;
        $education->user_id=$id;
        $education->save();
        
        return redirect('/user')->with('success','Registration Successfull !!!');
    }
    
    public function post_login(Request $request){
        $login=$request->only('email_id','password');
        if(Auth::attempt($login)){
            return redirect('/dashboard');
        }
        else{
            return redirect('/login')->with('success','Oops.. You entered invalid credentials');
        }
    }

    public function dashboard(){ 
        if(Auth::check()){
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
        Auth::logout();
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
        $users=Userdetails::with('registerusers')->find($id);
        $education=Education::find($id);
        $states=DB::table("state")->pluck("state_name","id");
        $years=[1,2,3,4,5,6,7,8,9,10];
        $UG = ['B.Sc Maths','B.Sc Physics','B.Sc Chemistry', 'B.Sc CS','B.Sc IT','B.B.A', 'B.C.A'];
        $PG = ['M.Sc Maths','M.Sc Physics','M.Sc Chemistry', 'M.Sc CS','M.Sc IT','M.B.A', 'M.C.A'];
        
        return view('user.edit',compact('users','education','states','years','UG','PG'));
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
        $users=Userdetails::with('registerusers')->find($id);
        /*Registeruser::create([
            'firstname'=>$request->get('firstname'),
            'lastname'=>$request->get('lastname'),
            'email_id'=>$request->get('email_id'),
            'password'=>Hash::make($request->get('password'),['rounds'=>10,])
        ]);*/
        $users->registerusers->firstname=$request->firstname;
        if($files=$request->file('profile_upload')){  
            $name=$files->getClientOriginalName();  
            $files->move('userprofiles',$name);  
            $users->profile_upload=$name;  
        }  

            $users->date_of_birth=$request->date_of_birth;
            $users->address=$request->address;

            $users->state=$request->state;
            $users->city=$request->city;
            $users->user_id=$id;
        
            $users->save();
        
        return redirect('/user')->with('success','Registration Successfull !!!'); 

        
        /*$userdetail=Userdetails::find($id);

        if($files=$request->file('profile_upload')){  
            $name=$files->getClientOriginalName();  
            $files->move('userprofiles',$name);  
            $userdetail->profile_upload=$name;  
        }  

        $userdetail->date_of_birth=$request->date_of_birth;
        $userdetail->address=$request->address;

        $userdetail->state=$request->state;
        $userdetail->city=$request->city;
        $userdetail->user_id=$id;
        
        $userdetail->save();
        return redirect('/user')->with('success','Registration Successfull !!!');


      /*  $education=Education::find($id);
        $education->year_of_experience=$request->year_of_experience;
        $education->under_graduate=$request->under_graduate;
        $education->post_graduate=$request->post_graduate;
        $education->user_id=$id;
        $education->save();
        
        return redirect('/user')->with('success','Registration Successfull !!!');*/
   
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
