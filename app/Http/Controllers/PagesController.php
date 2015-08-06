<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;

use App\ComingSoonEmail;
use App\Http\Requests\ComingSoonEmailRequest;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function showHome()
    {
        return view('pages.comingsoon');
    }

    public function emailSignUp(ComingSoonEmailRequest $request)
    {
        ComingSoonEmail::create($request->all());

        return Redirect::route('home')->with('message', 'Thanks, we will keep you updated!');
    }

}
