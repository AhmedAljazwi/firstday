<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index() {
        return 'Hi';
    }

    public function add() {
        return view('computer-add');
    }

    public function store(Request $request) {
        return $request;
    }
}
