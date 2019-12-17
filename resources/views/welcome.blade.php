<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My notes</title>
    <style>
    li{
        width: 200px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
    }
    </style>
</head>
<body>
    <h1>My notes</h1>
    <ul>
        @foreach ($notes as $note)
            <a href="show/{{$note->id}}"><li>{{$note->id}}. {{$note->note}}</li></a>
        @endforeach
    </ul>
</body>
</html>