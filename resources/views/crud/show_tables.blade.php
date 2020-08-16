<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="/style/crud/common.css">
    <link rel="stylesheet" href="/css/fontawesome/all.css">
</head>

<body>

    <div class="wrapper" id="list">
        <h2 class="title">CRU panel</h2>

        @foreach ($tables as $table)

        
    <a href="/crud/read/{{$table}}" class="table">{{$table}}</a>
         
        @endforeach

    </div>
</body>

</html>