<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function index() {
        return view('layouts.master');
    }

    public function Innovation() {
        return view('layouts.Innovation');
    }
    public function Newsroom() {
        return view('layouts.Newsroom');
    }
    public function ContactUs() {
        return view('layouts.ContactUs');
    }

}
