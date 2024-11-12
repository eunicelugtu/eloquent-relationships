<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>{{$user->name}}</h1>

    @if($user->courses->isEmpty())
        <p>This user is not enrolled in any courses.</p>
    @else
        @foreach($user->courses as $course)
            <li>{{ $course->course_name }}</li>
        @endforeach
    @endif
    
</body>
</html>