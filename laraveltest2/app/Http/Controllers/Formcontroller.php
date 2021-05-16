<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class Formcontroller extends Controller
{
    public function index(Request $request)
    {
        $items = Form::all();
        return view('form.index', ['items' => $items]);
    }

    public function post(Request $request){
        $this->validate($request,Form::$rules);
        $Form = new Form;
        $items = $request->all();
        unset($items['_token_']);
        $Form->fill($items)->save();
        return view('form.thanks');
    }
}
