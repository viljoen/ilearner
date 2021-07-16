<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>iLearner</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link   href="/css/ilearner.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
@yield('content')

<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/ilearner.js"></script>
</body>
<footer>

</footer>
</html>
