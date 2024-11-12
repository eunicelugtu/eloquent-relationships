<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function getCourseUsers(Request $request)
    {
        $course = Course::with('users')->find($request->id);
        $course->users()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        return view('course-users', compact('course'));
    }
}
