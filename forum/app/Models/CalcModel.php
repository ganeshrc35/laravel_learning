<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalcModel extends Model
{
    use HasFactory;
    public function add(){
        echo "Inside Model <br/>";
        $a = 10; $b = 15;
        return $a+$b;
    }
}
