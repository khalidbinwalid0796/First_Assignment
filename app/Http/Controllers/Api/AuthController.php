<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{
    public function login(Request $request){
        $userInfo = User::where('email','=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                //$request->session()->put('LoggedUser', $userInfo->id);
                return response()->json(['message' => 'Successfully Loggin']);
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function signup(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password'] = Hash::make($request->password);
        $data['api_token'] = Str::random(80);
        DB::table('users')->insert($data);

        return response()->json(['message' => 'Successfully Registered']);
    }
}
