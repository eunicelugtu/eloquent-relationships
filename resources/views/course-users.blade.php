<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
</head>
<body>
    <h1>Users Enrolled in {{ $course->course_name }}</h1>

    @if($course->users->isEmpty())
        <p>No users are currently enrolled in this course.</p>
    @else
        @foreach($course->users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    @endif
    
</body>
</html>