<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
    use App\User;
    use App\Lesson;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->author = User::find($course->user_id);
        }
          foreach ($courses as $course) {
            $course->lesson = Lesson::find($course->user_id);
        }
     
        return view('courses', compact('courses'));
    }
}
