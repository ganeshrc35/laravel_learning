<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalcModel;

class CalcController extends Controller
{
    protected $calcModel;
    public function __construct(CalcModel $calcModel){
        $this->calcModel = $calcModel;
    }
    public function hello(){
        echo 'Method comes to controller <br/>';
        $result = $this->calcModel->add();
        echo 'Back to contrroller <br/>';
        return view('calculation')->with(['abc' => $result]);
    }
    public function calculator(){
        return view('calculator.index');
    }
    public function calculate(Request $request){
        // echo "Sindhu now I am in controller";
        $result = $this->calcModel->calculate($request->all());
        return view('calculator.index')->with(['result' => $result]);
    }
}
