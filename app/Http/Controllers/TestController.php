<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([
            'bar',
        ]);
        // $this->middleware('auth');
    }
    public function foo()
    {
        // if (Gate::allows('access-admin')) {
        //     abort('403');
        // }

        return view('test.foo');
    }
    public function bar()
    {
        return view('test.bar');
    }
}