<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/master.css')}}">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sweet Home</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Best Home</a></li>
            <li><a href="#">Life Style</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid row mt-2">
    <div class="col-md-9">
        @foreach($list_obj as $item)
            <div class="col-md-4 row">
                <img src=""
            </div>
        @endforeach
    </div>
    <div class="col-md-3">
        <label>Search By Area</label>
        <ul>
            <li><a href="#"> district 1</a></li>
            <li><a href="#"> district 2</a></li>
            <li><a href="#"> district 3</a></li>
            <li><a href="#"> district 4</a></li>
            <li><a href="#"> district 5</a></li>
        </ul>
    </div>



</div>

<footer class="container-fluid mt-3 mb-3">
    <h3>Aptech FPT Copyright 2018</h3>
</footer>
</body>
</html>