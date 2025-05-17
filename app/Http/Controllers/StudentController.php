<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    private function getCourses()
    {
        return Session::get('courses', [
            ['id' => 1, 'title' => 'HTML Basics', 'instructor' => 'Dr. Ali', 'credit_hours' => 3, 'semester' => 'Fall 2025'],
            ['id' => 2, 'title' => 'CSS Styling', 'instructor' => 'Prof. Sara', 'credit_hours' => 3, 'semester' => 'Fall 2025'],
            ['id' => 3, 'title' => 'JavaScript Fundamentals', 'instructor' => 'Mr. Khan', 'credit_hours' => 3, 'semester' => 'Spring 2026'],
            ['id' => 4, 'title' => 'Laravel Development', 'instructor' => 'Dr. Ahmed', 'credit_hours' => 4, 'semester' => 'Spring 2026'],
            ['id' => 5, 'title' => 'Bootstrap Framework', 'instructor' => 'Ms. Fatima', 'credit_hours' => 2, 'semester' => 'Fall 2025'],
        ]);
    }

    public function index()
    {
        return view('student.index', ['courses' => $this->getCourses()]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $filteredCourses = array_filter($this->getCourses(), function ($course) use ($query) {
            return stripos($course['title'], $query) !== false;
        });
        return view('student.index', ['courses' => $filteredCourses, 'query' => $query]);
    }
}