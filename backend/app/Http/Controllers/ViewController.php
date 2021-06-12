<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ViewController extends Controller
{
  public function master() {
    return view('view.master', [
      'msg' => 'こんにちは、世界！'
    ]);
  }
}
