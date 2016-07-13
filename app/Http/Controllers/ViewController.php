<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function view() {
        return View::make('front-content');
    }
}
