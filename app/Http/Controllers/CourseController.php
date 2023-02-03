<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function add() {
        return view('course.add');
    }

    public function store(Request $request) {
        $request->validate([
            'number' => 'required',
            'name' => 'required'
        ]);

        $course = new Course;
        $course->number = $request['number'];
        $course->name = $request['name'];
        $course->save();

        return redirect('/courses');
    }
}
