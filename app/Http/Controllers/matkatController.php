<?php

namespace App\Http\Controllers;

use App\Models\matkat;
use Illuminate\Http\Request;

class matkatController extends Controller
{
    public function lomake(){
        return view('matkat');
    }
    public function matkatTallenna(Request $request){

        $arvot = $request->validate([
           'first_name' =>'required',
           'last_name'=>'required',
           'phone' => 'required',        
           'visitors' => 'required',
           'email' => 'required',
           
           
        ]);

        

        $user = matkat::create($arvot);

        return redirect('/kuitti');
    }
}


        /*echo "a" . $request->input('first_name') . "<br>";
        echo "a" . $request->input('last_name') . "<br>";
        echo "a" . $request->input('phone') . "<br>";
        echo "a" . $request->input('visitors') . "<br>";
        echo "a" . $request->input('email') . "<br>";*/