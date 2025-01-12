@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Course Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text">{{ $course->description }}</p>
            <p class="card-text"><small class="text-muted">Trainer: {{ $course->trainer->name }}</small></p>
            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
        </div>
    </div>
</div>
@endsection