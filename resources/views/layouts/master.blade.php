<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>
    <link href='/css/project3.css' type='text/css' rel='stylesheet'>

    @stack('head')
</head>
<body>

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

</body>
</html>