<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Daskboard;
use DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    public function register(){
        return view('register');
   }

   public function store(Request $request)
   {
       $request->validate([
           'name'=>'required|max:255',
           'email'=>'required',
           'password'=>'required'
       ]);
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password =Crypt::encryptString($request->password);
       $user->save();
        return redirect()->route('user.login')->with('success','User register successfully!');
   
   }
   public function login(Request $request)
   {
       return view('login');

   }

   public function post(Request $request){
       $email = $request->email;
       $password = $request->password;
    //    dd($email);
       $result = User::where('email',$email)->get('password')->pluck('password');
       //dd($result);
       try {
        $decrypted = Crypt::decryptString($result);
    } catch (DecryptException $e) {
        //
    }
        if($password==$decrypted){
            //return view('dashboard');
            return redirect()->route('user.dashboard')->with('success','User login successfully!');
    }else{
    
        return view('login');
    }
    
   }

    public function logout(){ 
        return view('login'); 
        
    }
    public function index(){
        // return view('users');
        $user = User::get();
        return view('users', compact('user'));
        //dd($user);
    }
    
  
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = Daskboard::select('*');
    //         return DataTables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
     
    //                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
    
    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
        
    //     return view('users');
    // }

    public function edit( $id)
        {//dd($id);
        $user = User::find($id);
        //dd($daskboard);
        return view('useredit',compact('user'));
        }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
           
           
        ]);
            $reg = User::find($id);
            // dd($reg);
            $reg->name = $request->name;
            $reg->email = $request->email;
            $reg->password = $request->password;
            $reg->save();
          
        // $user = User::findorFail($request->id);
        // dd($user);
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->save();
        
        return redirect()->route('users.index')->with('status','successfully');

    }

    public function destroy( $id)
        {
            $user = User::where('id', $id)->delete();
        return redirect()->route('users.index')
        ->with('success',' deleted successfully');
        }
    
}
