<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">

</head>

<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">遨游帮</p>
            </div>
            <!-- navbar-header -->
            <div id="collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="rent.html">租房</a>
                    </li>
                    <li>
                        <a href="#education">在线教育</a>
                    </li>
                    <li>
                        <a href="#others">其他服务</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#login">登录</a>
                    </li>
                    <li>
                        <a href="#register">注册</a>
                    </li>
                </ul>
            </div>
            <!-- collapse -->
        </div>
        <!--end of container -->
    </nav>
    <!-- end of nav-->
</header>
<div class="container-fluid">
    <div class="row">
        <div id="banner" class="col-md-12">
            <p>hello</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div id="content" class="col-md-12">
            <p>contents goes here</p>
        </div>
    </div>
</div>
<!--   jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script src="main.js"></script>
</body>
</html>
