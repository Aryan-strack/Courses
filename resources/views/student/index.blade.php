@extends('layouts.app')

@section('content')
    <h1>Student Portal - Web Technology Courses</h1>
    <form action="{{ route('student.search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Search by course title" value="{{ $query ?? '' }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    @if (count($courses) > 0)
        <table class="table table-striped custom-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Instructor</th>
                    <th>Credit Hours</th>
                    <th>Semester</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course['title'] }}</td>
                        <td>{{ $course['instructor'] }}</td>
                        <td>{{ $course['credit_hours'] }}</td>
                        <td>{{ $course['semester'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No courses found.</p>
    @endif
@endsection