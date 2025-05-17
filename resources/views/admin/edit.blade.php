@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>
    <form action="{{ route('admin.update', $course['id']) }}" method="POST" class="custom-form" id="edit-course-form">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $course['title'] }}" required>
        </div>
        <div class="mb-3">
            <label for="instructor" class="form-label">Instructor</label>
            <input type="text" name="instructor" id="instructor" class="form-control" value="{{ $course['instructor'] }}" required>
        </div>
        <div class="mb-3">
            <label for="credit_hours" class="form-label">Credit Hours</label>
            <input type="number" name="credit_hours" id="credit_hours" class="form-control" value="{{ $course['credit_hours'] }}" required>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" name="semester" id="semester" class="form-control" value="{{ $course['semester'] }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
@endsection