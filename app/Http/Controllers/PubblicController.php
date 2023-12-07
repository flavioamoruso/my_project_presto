<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PubblicController;

class PubblicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }
}
