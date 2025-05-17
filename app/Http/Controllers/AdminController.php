<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
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

    private function saveCourses($courses)
    {
        Session::put('courses', $courses);
    }

    public function index()
    {
        return view('admin.index', ['courses' => $this->getCourses()]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $courses = $this->getCourses();
        $newCourse = [
            'id' => count($courses) + 1,
            'title' => $request->title,
            'instructor' => $request->instructor,
            'credit_hours' => $request->credit_hours,
            'semester' => $request->semester,
        ];
        $courses[] = $newCourse;
        $this->saveCourses($courses);
        return redirect()->route('admin.index')->with('success', 'Course added successfully.');
    }

    public function edit($id)
    {
        $courses = $this->getCourses();
        $course = collect($courses)->firstWhere('id', $id);
        if (!$course) {
            return redirect()->route('admin.index')->with('error', 'Course not found.');
        }
        return view('admin.edit', ['course' => $course]);
    }

    public function update(Request $request, $id)
    {
        $courses = $this->getCourses();
        $courseIndex = collect($courses)->search(function ($course) use ($id) {
            return $course['id'] == $id;
        });
        if ($courseIndex === false) {
            return redirect()->route('admin.index')->with('error', 'Course not found.');
        }
        $courses[$courseIndex] = [
            'id' => $id,
            'title' => $request->title,
            'instructor' => $request->instructor,
            'credit_hours' => $request->credit_hours,
            'semester' => $request->semester,
        ];
        $this->saveCourses($courses);
        return redirect()->route('admin.index')->with('success', 'Course updated successfully.');
    }

    public function delete($id)
    {
        $courses = $this->getCourses();
        $courses = array_filter($courses, function ($course) use ($id) {
            return $course['id'] != $id;
        });
        $courses = array_values($courses); // Reindex array
        $this->saveCourses($courses);
        return redirect()->route('admin.index')->with('success', 'Course deleted successfully.');
    }
}