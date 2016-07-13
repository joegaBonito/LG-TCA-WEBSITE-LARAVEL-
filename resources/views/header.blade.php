<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joe's Website</title>
    <!-- <link rel="stylesheet" href="css/foundation.css"> -->
    <link rel="stylesheet" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/latest/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/innovation.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/newsroom.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/contactus.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/frontpage.css')}}">
</head>
<body>
<nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                </button>
                <a class="navbar-brand" href="/">LG CNS</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('Innovation')}}" id="innovation">Innovation</a></li>
                    <li><a href="{{route('Newsroom')}}" id="newsroom">Newsroom</a></li>
                    <li><a href="{{route('ContactUs')}}" id="contactus">Contact Us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav>
