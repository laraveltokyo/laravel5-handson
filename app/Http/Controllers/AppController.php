<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Todo;

//@@ Step 11 @@//
class AppController extends Controller
{
	//@@ Step 12 @@//
    public function status()
    {
        return 'コーディングなう！';
    }

	//@@ Step 13 @@//
    public function getApp()
    {
		//@@ Step 13 @@//
//        return view('app');

		//@@ Step 23 @@//
//        $todos = Todo::all();
//        return view('app', ['todos' => $todos]);

		//@@ Step 25 @@//
        $todos = Todo::where('status', 2)->get();
//        $todos = Todo::query()->where('status', '=', 2)->get();	// 上の行のコードはこのコードの省略形
//        $todos = Todo::whereStatus(2)->get();						// こうも書ける
        return view('app', ['todos' => $todos]);

		// MEMO: 引数を渡す時、こうも書ける
//        return view('app', compact('todos'));
    }
}
