@extends('layouts.app')

@section('content')
    <h1>Add New Course</h1>
    <form action="{{ route('admin.store') }}" method="POST" class="custom-form" id="add-course-form">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Course Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="instructor" class="form-label">Instructor</label>
            <input type="text" name="instructor" id="instructor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="credit_hours" class="form-label">Credit Hours</label>
            <input type="number" name="credit_hours" id="credit_hours" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="semester" class="form-label">Semester</label>
            <input type="text" name="semester" id="semester" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Course</button>
    </form>
@endsection