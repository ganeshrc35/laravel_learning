<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Hash;
use Auth;

class RegistrationModel extends Model
{
    use HasFactory;
    public function register($request){
        $checkUser = User::where('email',$request['email'])->first(); // Select query
        if($checkUser){
            return ['status_code' => 400, 'message' => 'User exists!'];
        }else{
            $data = ['name' => $request['first_name'].' '.$request['last_name'],
                     'email' => $request['email'],
                     'password' => Hash::make($request['password'])
                    ];
            $user = User::create($data);
            //Login the user
            Auth::login($user);
            return ['status_code' => 200, 'message' => 'User created'];
        }
    }
}
