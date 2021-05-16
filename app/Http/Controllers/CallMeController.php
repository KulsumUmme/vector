<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Call;

class CallMeController extends Controller
{
    //
    public function callMe(Request $request){
        //dd('$request');
                
    $callme= new Call();
        $callme->lname= $request['lname'];
        $callme->lphone= $request['lphone'];
        $callme->lemail= $request['lemail'];
        $callme->lselect= $request['lselect'];
    
    $callme->save();

         
        return redirect('home')->with('success','We Will Call You Soon');
    }
    
}
