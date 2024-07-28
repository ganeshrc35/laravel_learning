<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Models\RegistrationModel;
use Auth;

class AuthController extends Controller
{
    protected $registrationModel;
    public function __construct(RegistrationModel $registrationModel){
        $this->registrationModel = $registrationModel;
    }

    public function home(){
        if(Auth::user()){
            return redirect('/home');
        }else{
            return redirect('/register');
        }
    }
    //
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function authenticateUser(Request $request){
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){ // Checking the user email and password
            return redirect('/home');
        }else{
            return back();
        }
    }

    public function createUser(Request $request){
        $result = $this->registrationModel->register($request->all());
        if($result['status_code'] == 200){
            return redirect('/home');
        }else{
            return back();
        }
        // return view('register')->with(['result' => $result]);
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
