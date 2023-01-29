<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Practice;
use Illuminate\Support\Facades\DB;

class PracticeController extends Controller
{
    /**
     * 一覧を表示する
     * 
     * @return view
     */
    public function showList(){
        //Eloquent(エロクアント)
        $values = Practice::all();

        $count = Practice::count();

        $first = Practice::findOrFail(1);

        $whereAAA = Practice::where('title', '=', 'aaa')->get();

        // クエリビルだ
        $queryBuilder = DB::table('practices')->where('title', '=', 'bbb')
        ->select('id', 'content')
        ->get();

        dd($values, $count, $first, $whereAAA, $queryBuilder);

        return view('practice.list', compact('values'));
    }
}
