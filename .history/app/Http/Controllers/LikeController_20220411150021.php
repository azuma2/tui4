<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Like;


class LikeController extends Controller
{
    public function index(Request $request){
        $items = Like::all();
        return view('index', ['likes'=>$items]);
    }
    public function add(Request $request){
        return view('/');
    }
    public function create(Request $request){
        $this->validate($request, Like::$rules);
        $form = $request->all();
        Like::create($form);
        return redirect('/');
    }

    public function relate(Request $request) //追記
    {
        $items = Like::all();
        return view('index', ['items' => $items]);
    }
}