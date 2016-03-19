<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function ficcaRicette(Request $request){
      /* $infos = [
        'data.name'=>'required',
        'data.text'=>'required'
        ];
        
        $infos_req = [
            'data.name.required'=> 'inserisci un nome',
            'data.name.required'=> 'inserisci una procedura'
        ];*/
       
        $userid = Auth::user()->id;
        
        $recipe = \App\Recipe::create(['name'=>$request->data['name'] , 
                                       'procedure'=>$request->data['text'] , 
                                       'user_id'=>$userid
                                       ]);
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
