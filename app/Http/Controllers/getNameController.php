<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getNameController extends Controller
{
    //
    public function getName(Request $request){
        $name = $request -> input('getname');
        return view('viewtryform',['name'=> $name]);
    }
}
