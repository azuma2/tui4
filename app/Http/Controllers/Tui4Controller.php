<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tui4;

class Tui4Controller extends Controller
{
    public function index()
    {
        $items = Tui4::all();
        return view('index', ['items' => $items,]);
    }

    public function create(Request $request)
    {
        $this->validate($request, Tui4::$rules);
        $form = $request->all();
        Tui4::create($form);
        return redirect('/');
    }



    public function update(Request $request)
    {
        
        $this->validate($request, Tui4::$rules);
        $form = $request->all();
        unset($form['_token']);
        Tui4::where('id', $request->id)->update($form);
        return redirect('/');
    }


    public function remove(Request $request)
    {
        Tui4::find($request->id)->delete();
        return redirect('/');
    }



    public function search(Request $request)
    {
        $item = Tui4::find($request->input);
        $param = [
            'item' => $item,
            'input' => $request->input
        ];
        return view('index', $param);
    }
}
