<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class HomeControler extends Controller
{
    public function index(){
      

        $data = [
            "movies" => movie::all()
        ];
        // var_dump($data);
        return view("movie", $data);
    
        
    }
}
