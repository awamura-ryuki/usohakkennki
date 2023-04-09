<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diary;

class DiaryController extends Controller
{
    public function index(Diary $diary)
    {
        return view('diaries/index')->with(['diaries' => $diary->getPaginateByLimit()]);
        //getPaginateByLimit()はPost.phpで定義したメソッドです。
    }
    
    public function show(Diary $diary)
    {
        return view('diaries/show')->with(['diary' => $diary]);
        //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}
