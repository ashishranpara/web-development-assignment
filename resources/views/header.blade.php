<html>
<head>
    <title>List Test PHP</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('assets/css/custom.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<div class="header">
    <a href="#default" class="logo"><img class="image_logo" src="{{asset('assets/images/logo.png')}}"></a>
    <div class="header-right">
        <a class="active" href="/">Home</a>
        <a href="#about">About</a>
    </div>
</div>
<body>
