<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function index() {
        $computers = Computer::all();
        return view('computers', compact('computers'));
    }

    public function add() {
        return view('computer-add');
    }

    public function store(Request $request) {
        $computer = new Computer;
        $computer->name = $request['name'];
        $computer->save();
        return redirect('/computers');
    }

    public function edit() {
        return view('computer-edit');
    }

    public function update(Request $request) {
        return $request;
    }
}
