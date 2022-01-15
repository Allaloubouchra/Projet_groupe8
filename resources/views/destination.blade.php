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
		<h1> A trip to  </h1>
		<div class="line"></div>
   </div>
 
 <section class="trip">
	 <div class="title">
		<h1> Welcome to our trek ! </h1>
		<div class="line"></div>
   </div>
 
	<div class="trip-content">
	  
	 <h4 class="tet">Our trip for the month of january will be to Tikdjeda</h4>
	 <img class="img" src="./img/tik.jpg" alt="img">
	 <h4>Description:</h4>
	 <P> ikjda is a ski resort located in a mountain range named Djurdjura,
		  northern Algeria, with an altitude of 1,600 metres (5,250 feet), in the province of Bouïra.
         In the summers, Tikjda offers walks, rock climbing and many short excursions, 
		 with places like Point de vue du Djurdjura and Gouffre de l'Akouker. 
		 The area around Tikjda has many peaks and hillsides covered with cedar forests.  <br></P>
	 <h4>Duration:</h4> <P> One day<br></P>
     <h4>Traject:</h4><P> 120km that's equal to 2h30min by bus .<br></P>
	 <h4>Conditions:</h4> <P>- To participate in this trek , you have to be 15 years old or more. <br>
	                          - All participants living out of the region of the organizator club , a hostl's reservation is recommanded for them.<br>
							  -You have to be in a good health and able to walk for long distances. <br>
							  -It is good to wear comfortable cloths and shoeses to make the walk easier ( what recommande the nature of the trek). <br> </P>

	 <h4>Organisation: </h4><p> The trek will have a plan , so please read carfully the email containing the Trek's Plan with all details. It
		 will be send by our team, after your application. <br></P>
	 <h4>Price:</h4><P> 2500 da (food included).<br></P> <br>
 

	    <a href="/addparticipants" class="ctn">apply</a> <br>
	 
 

  </div>
</section>
<footer>
    <h2>&copy;2022 Oumaima</h2>
</footer>


</body>
</html

