<?php

namespace App\Http\Controllers;

use App\Models\airport;
use App\Models\vole;
use Illuminate\Http\Request;

class volControl extends Controller
{
    public function index(){
        $vols = vole::paginate(10);
        return view('index',compact('vols'));
    }
  
    public function create()
    {  
         return view('/insertVole',compact('airports'));
    }
    public function store(Request $request)
    {
        $input = $request->all();
        vole::create($input);
        return redirect('student')->with('flash_message', 'vole Addedd!');
    }
}
