<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerController extends Controller
{
  public function index()
  {
    $data = array();

    $data['name'] = 'hiroshi';
    $data['message'] = 'こんにちは';

    $today = date('Y年m月d日 H:i:s');
    return view('beginner', ['data' => $data, 'today' => $today]);
  }
}
