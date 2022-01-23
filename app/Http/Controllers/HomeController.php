<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Movie si trova dentro app che è il namespace nel file
use App\Movie;

class HomeController extends Controller
{
    //METODO DI HOMECONTROLLER
    public function index(){
        //A. Get all movies, prendo il modello Movie e prendo la tabella plurale movies
        //SELECT * FROM MOVIES
        $movies = Movie::all();
        
        return view('home',compact('movies'));
    }
}
