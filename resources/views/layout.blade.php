<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Discover Algeria</title>
    <meta charset="utf-8">
    <meta name="description" content="rondonné en Algérie">
    <meta name="keywords" content="sortie,découvrir l'Algérie,rondonné,">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('custom_css')
    @yield('facts_css')
    @yield('profil_css')
    @yield('home2_css')
    <style type="text/css"></style>
</head>
<body>
<nav class="navbar">
    <h1>Discover Algeria</h1>
    <ul class="nav-links">
        <li class="active"><a href=""></a>
        <li><a href="/home">Home</a></li>
        <li><a href="/blogs">Blogs</a></li>
        <li><a href="/home">Login</a></li>
        <li><a href="/facts">Facts</a></li>
        @if (Auth::check())
            <li class="ctn"><a id="logout" href="#">Logout</a></li>
        @else
            <li class="ctn"><a href="/register">Sign up</a></li>
        @endif
    </ul>

    <form id="logout-form" action="/logout" method="post" style="display: none;">
        @csrf
    </form>
</nav>
@yield('home')
@yield('contents')
@yield('login')
@yield('register')
@yield('facts')
@yield('profil')

<script type="text/javascript">
    $("#logout").on('click', (e) => {
        e.preventDefault()
        $('#logout-form').submit()
    })
</script>
</body>
</html>
