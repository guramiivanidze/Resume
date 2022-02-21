<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function exps (){

        $experiances = DB::select('select * from experiance');

        if ($experiances){
            return view('welcome')->with('experiances', $experiances);
        }
    }
}
