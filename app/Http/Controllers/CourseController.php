<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::with('teacher')->paginate(5);
        return view('courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('courses.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:courses',
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        Course::create($validated);
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Course::with(['teacher', 'students'])->findOrFail($id);
        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all();
        return view('courses.edit', compact('course', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Course::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:courses,name,' . $id,
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        $course->update($validated);
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
