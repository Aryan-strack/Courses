@extends('layouts.app')

@section('content')
    <h1>Admin Portal - Manage Courses</h1>
    <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">Add New Course</a>
    @if (count($courses) > 0)
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Instructor</th>
                    <th>Credit Hours</th>
                    <th>Semester</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['title'] }}</td>
                        <td>{{ $course['instructor'] }}</td>
                        <td>{{ $course['credit_hours'] }}</td>
                        <td>{{ $course['semester'] }}</td>
                        <td>
                            <a href="{{ route('admin.edit', $course['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('admin.delete', $course['id']) }}" class="btn btn-danger btn-sm delete-course" data-id="{{ $course['id'] }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No courses available.</p>
    @endif
@endsection