<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php mvc framework</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

        .container {

         box-shadow:  0 0 50px #777;
            margin-top: 5vh;
            padding:5vh;
            border-top:2px solid #fff;
            border-bottom-left-radius: 25%;
            border-top-right-radius: 25%;
            border-left:2px solid #fff;
            border-bottom: 2px solid #e2e2e2;
            border-right:2px solid #e2e2e2;
            overflow: hidden;

        }
        .row{
            border-bottom-left-radius: 25%;
            border-top-right-radius: 25%;
            overflow: hidden;

        }
h1{
    font-family: 'Dancing Script', cursive;
    margin:0 auto;

    display: block;

}
        li{
            border:0 !important;
            margin-top:1vh;
        }
    </style>


</head>
<body style="background:#f5f5f5">
<div class="container">

    <div class="row">

        <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading"></center><h1>php mvc mini framework v1.0.0</h1></div>
            <div class="panel-body">developer by <a target="_blank" href="http://www.youtube.com/user/isanbulx">dılo abinin yeri</a>
                <h2>mvc app folders</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">controllers app/controllers</li>
                    <li class="list-group-item list-group-item-info">models app/models</li>
                    <li class="list-group-item list-group-item-warning">views app/views</li>
                    <li class="list-group-item list-group-item-danger">public</li>
                </ul>
                <h2>router</h2>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success">system/router/web.php</li>

                </ul>

            </div>


            </div>
        </div>
    </div>
</div>

<script defer>


    var golge=`0px 0px 5px #eee`;

    for(var a=0; a<600; a++){


        golge=`${golge},${a}px ${a}px  #ededed`;
    }

    document.querySelector(".container").style.boxShadow=golge;

</script>
</body>
</html>
