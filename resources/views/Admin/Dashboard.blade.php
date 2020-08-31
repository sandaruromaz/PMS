<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ URL::asset('css/material-dashboard.css?v=2.1.2') }}">
    <title>Document</title>
</head>
<body>
 @extends('layouts.adminlayout')
 @section('content')
 @include('General.dashboard')     
 @endsection
</body>
</html>