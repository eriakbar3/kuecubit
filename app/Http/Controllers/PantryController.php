<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantryController extends Controller
{
  public function index(){
    return view('pantry.index');
  }
}
