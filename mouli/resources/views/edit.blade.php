<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>update data</h1>
    <form action="/update/{{$post->id}}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name" value="{{$post->name}}"><br>
        <br>
        <label for="">email</label>
        <input type="email" name="email" value="{{$post->email}}">
        <br>
         <br>  
        <input type="submit" name="submit" value="update">

    </form>
</body>
</html>