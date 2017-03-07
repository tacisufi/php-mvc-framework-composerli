<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>merhaba</h1>
<h1>{{$sayi}}</h1>

<h1>{{$deger}}</h1>

@foreach($data as $row)
    {{print_r($row)}}<br>

    @endforeach
<hr>

@if($numara==2)

    numara 1 eşitttir
    @endif
</body>
</html>