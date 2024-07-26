<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use App\Http\Requests\UserFormRequest;

class UsersController extends Controller
{
    protected $UsersModel;
    public function __construct(UsersModel $UsersModel){
        $this->UsersModel = $UsersModel;
    }
    public function users_forum(){
        return view('user.user');
    }
    public function register(UserFormRequest $request){
        $validated = $request->validated();
        $result = $this->UsersModel->register($request->all());
        return view('user.user')->with(['result' => $result]);
    }
}
