<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href='/css/project3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>
<div class='container'>

<header>
    <a href='/'><img src='/images/nutro.png' id='logo' alt='Nutro Logo'></a>
</header>

<section>
    @yield('content')
</section>


<footer>
    <a href='/'>Fill Out Form Again</a>
    <p> &copy; Nutro Dog Food 2018 </p>
</footer>
</div>

</body>
</html>