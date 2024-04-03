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

        return redirect('/');
    }
}


