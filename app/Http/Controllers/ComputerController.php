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
        $request->validate([
            'name' => 'required',
            'year' => 'required'
        ]);

        $computer = new Computer;
        $computer->name = $request['name'];
        $computer->year = $request['year'];
        $computer->save();
        return redirect('/computers');
    }

    public function edit($id) {
        $computer = Computer::find($id);
        return view('computer-edit', compact('computer'));
    }

    public function update($id, Request $request) {
        $computer = Computer::find($id);
        $computer->name = $request['name'];
        $computer->year = $request['year'];
        $computer->save();

        return redirect('/computers');
    }

    public function delete($id) {
        $computer = Computer::find($id);
        $computer->delete();

        return redirect('/computers');
    }
}
