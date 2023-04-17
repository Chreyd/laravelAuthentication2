<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use App\Mail\TestMarkdownMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except([
        //     'bar',
        // ]);
        // $this->middleware('auth');
    }
    public function foo()
    {
        // if (!Gate::allows('access-admin')) {
        //     abort('403');
        // }

        return view('test.foo');
    }
    public function bar()
    {
        // $user= ['email'=>'user@test.com', 'name'=>'Monsieur xxx'];
        // Mail::to($user['email'])->send(new TestEmail( $user));

        // Mail::to('stonix20@gmail.com')->send(new TestMarkdownMail());
        // Mail::to('nils@gmail.test')->send(new TestEmail);

        /* Mail::send('Html.view', $data, function ($message) {
            $message->from('john@johndoe.com', 'John Doe');
            $message->sender('john@johndoe.com', 'John Doe');
            $message->to('john@johndoe.com', 'John Doe');
            $message->cc('john@johndoe.com', 'John Doe');
            $message->bcc('john@johndoe.com', 'John Doe');
            $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Subject');
            $message->priority(3);
            $message->attach('pathToFile');
        }); */
        return view('test.bar');
    }
}
