<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/addparticipants.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <title>LOGIN</title>
</head>
<body>
 <header>
     <nav class="navbar">
        <h1 >Discover Algeria</h1>
          <ul class="nav-links">
            <li class="active"><a href="#"></a>
            <li><a href="#"></a>Home</li>
            <li><a href="#"></a>Contributions</li>
            <li><a href="#"></a>Log in</li>
            <li class="ctn"><a href="#"></a>Sign up</li>
            
          </ul>
       </nav>
 </header>
<main>
    <section class="formsection" >

        <form method="POST"class="login-box"  >
   @csrf
        <span>Participant</span>
         <h4>Full Name</h4>
         <input class="p" type="text" name="fullname" placeholder="write your name" >
         <h4>Email</h4>
         <input class="p" type="email" name="email" placeholder="write your email" >
         <br>
         <h4>Age</h4>
         <input type="numeric" class="p" name="age" placeholder="write your age" >
         <h4>Sex</h4>
         <input type="text" class="p" name="sexe" placeholder="write your sex">
         <button type="submit" >Send</button>
        </form>
    </section>
</main>   



</body>
</html>

