<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HelloController extends Controller
{
  public function index(Request $req) {
    return 'リクエストパス'.$req->path();
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

  public function plain() {
    return response('こんにちは、世界！', 200)->header('Content-Type', 'text/plain');
  }

  public function header() {
    return response()
      ->view('hello.header', ['msg' => 'こんにちは、世界！'], 200)
      ->header('Content-Type', 'text/html');
  }

  public function outJson() {
    return response()
      ->json([
        'name' => 'Yoshihiro, YAMADA',
        'sex' => 'male',
        'age' => 18,
      ]);
  }

  public function outFile() {
    return response()
      ->download('/work/README.md', 'README.md', ['content-type' => 'text/plain']);;
  }

  public function outCsv() {
    return response()
      ->streamDownload(function() {
        print(
          "1,2019.10/1,123\n".
          "1,2019.10/2,116\n"
        );
      }, 'download.csv', ['content-type' => 'text/csv']);
  }

  public function form() {
    return view('hello.form', ['result' => '']);
  }

  public function result(Request $req) {
    $name = $req->name;
    return view('hello.form', [
      'result' => 'こんにちは、'. $name. 'さん'
    ]);
  }

  public function upload() {
    return view('hello.upload', ['result' => '']);
  }

  public function uploadfile(Request $req) 
  {
    if(!$req->hasFile('upfile')) {
      return 'ファイルを指定してください。';
    }

    $file = $req->upfile;
    if(!$file->isValid()) {
      return 'アップロードに失敗しました。';
    }

    $name = $file->getClientOriginalName();
    $file->storeAs('public', $name);

    return view('hello.upload', [
      'result' => $name . 'をアップロードしました。'
    ]);
  }
}
