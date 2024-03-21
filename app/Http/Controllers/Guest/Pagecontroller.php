<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    // metodo che mostra la home page(in questo casa lòista dei treni)
 public function index() 
 {
    $trains = Train::all();
    return view("home", compact("trains"));
 }
}
