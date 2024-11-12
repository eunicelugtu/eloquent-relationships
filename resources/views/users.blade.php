<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS PROFILES</title>
</head>
<body>
    <h1>USERS</h1>

    @foreach ($users as $user)
        <div>Name: {{$user->name}}</div>
        <div>Email: {{$user->email}}</div>
        <br>
    @endforeach
    
</body>
</html>