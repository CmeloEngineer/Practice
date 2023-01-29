<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;

class PracticeController extends Controller
{
    /**
     * 一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        $values = Practice::all();

        // dd($values);

        return view('practice.list', compact('values'));
    }
}
