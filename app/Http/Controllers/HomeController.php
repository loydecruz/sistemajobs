<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\MiFormulario;
use Validator;

class HomeController extends Controller
{


  public function index(){
         return "ServJOBS";
     }

public function home(){
    return View('home.home');
}


}
