<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">

    <title>iLearner</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link   href="/css/ilearner.css" rel="stylesheet">
    <link href="/css/material.min.css" rel="stylesheet">

 </head>

<body>
@yield('content')

<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/ilearner.js"></script>
<script type="text/javascript" src="js/material.min.js"></script>

@include('scripts.scripts')
</body>
<footer>

</footer>
</html>
