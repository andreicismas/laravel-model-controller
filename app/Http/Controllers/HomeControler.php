<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
    public function index(){
      

        $data = [
            "movies" => movie::all()
        ];
        var_dump($data);
        return view("home", $data);
    
        
        }
}
