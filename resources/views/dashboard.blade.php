@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">📚 Mini-LMS Dashboard</h2>

    <div class="row">

        <!-- Total Courses -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Total Courses</h5>
                    <h2>{{ $totalCourses }}</h2>
                </div>
            </div>
        </div>

        <!-- Manage Courses -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Course Management</h5>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary mt-2">
                        Manage Courses
                    </a>
                </div>
            </div>
        </div>

        <!-- User Info -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Logged In As</h5>
                    <p>{{ Auth::user()->name }}</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
