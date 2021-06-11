<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HelloController extends Controller
{
  public function index() {
    return '無職です！';
  }

  public function view() {
    $data = [
      'msg' => '無職です！',
    ];

    return view('hello.view', $data);
  }

  public function list() {
    $data = [
      'records' => Book::all()
    ];

    return view('hello.list', $data);
  }
}
