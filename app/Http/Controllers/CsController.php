<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsController extends Controller
{
  public function index(){
    return view('cs.index');
  }
}
