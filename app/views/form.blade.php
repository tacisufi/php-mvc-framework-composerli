<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">


    <div class="row">

        <div class="col-sm-4">
            {{$b}}
            <form class="control-panel" class="form-horizantal" method="post" action="as">
                <input placeholder="ad" class="form-control" type="text" name="ad"/>
                <input placeholder="soyad" class="form-control" type="text" name="soyad"/>
                <input class="btn btn-info" type="submit" value="gonder">

        </div>
    </div>
</div>
</body>
</html>
