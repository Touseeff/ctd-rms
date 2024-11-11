<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Account Manager</h1>
    <h1>User ID  = {{Auth::user()->user_id}}</h1>
    <h1>Role ID  = {{Auth::user()->role_id}}</h1>
    <h1>User Name  = {{Auth::user()->first_name}}</h1>
</body>
</html>