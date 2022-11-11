<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function asset(){
        return view('pages.asset');
    }
    public function permission(){
        return view('pages.permission');
    }
    public function transaction(){
        return view('pages.transaction');
    }
}
