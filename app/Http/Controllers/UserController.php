<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    function index()
    {
    return view('index', ['txt' => 'フォームを入力']);
    }
    function send(Request $request) {
        $forms = $request->all();
        return view('form', ['forms' => $forms,]);
    }

    function confirm(UserRequest $request){
        $forms = $request->all();
        Form::create($forms);
        if($forms == null){
        return redirect()->route('index');
        }

        return view('form', ['forms' => $forms,]);
    }
        function thanks(Request $request){
        return view('thanks');
    }
    public function verror(){
        return view('index');
    }
}
