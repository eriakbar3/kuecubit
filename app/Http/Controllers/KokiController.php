<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KokiController extends Controller
{
  public function index(){
    return view('koki.index');
  }
}
