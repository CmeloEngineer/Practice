<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
     * 一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        return view('practice.list');
    }
}
