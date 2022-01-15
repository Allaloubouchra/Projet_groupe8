<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Discover Algeria</title>
    <meta charset="utf-8">
    <meta name="description" content="rondonné en Algérie">
    <meta name="keywords" content="sortie,découvrir l'Algérie,rondonné,">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/home2.css">
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
<div class="title">
		<h1>What is'DISCOVER ALGERIA' ?</h1>
		<div class="line"></div>
 </div>
<section class="about">
<div class="title">
		<h1>What is 'DISCOVER ALGERIA' ?</h1>
		<div class="line"></div>
 </div>
 <div class="about-content">
<p>
  Discover Algeria is a web site dedicated to encourage tourisme in Algeria 
by giving to uses the ability to post pictures and videos of a place they think
needs to be known or visited by others ! <br>
  Also , one of the main fonctionalities is that our club can help you 
to explore and enjoy the beauty of our country by organizing treks
and camping trips.Can't wait to see you with us ! <br>
You can sign up and join us from now by click to the button below .<br></p> <br>
<a href="/register" class="ctn"> sign up</a>
</div>
</section>
<footer>
    <h2>&copy;2022 Oumaima</h2>
</footer>


</body>
</html>