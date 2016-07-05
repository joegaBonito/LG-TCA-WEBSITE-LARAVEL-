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
@include('header')


@include('footer')


<script src="{{URL::asset('js/vendor/jquery.js')}}"></script>
<script src="{{URL::asset('js/vendor/what-input.js')}}"></script>
<script src="{{URL::asset('js/vendor/foundation.js')}}"></script>
<script src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{--<script src="{{URL::asset('js/app.js')}}"></script>--}}
</body>
</html>