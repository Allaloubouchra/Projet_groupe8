@extends('layout')
@section('profil_css')
    <link rel="stylesheet" type="text/css" href="/css/profil.css">
@endsection
@section('profil')
       <div class="pr">
         <div class="card-container">   
              <div class="upper-container">
                 <div class="image-container">
                     <img src="/img/profil.jpg">
                 </div>
            <div class="name">
                       <h2>username</h2>
                 </div>  
               
                </div>
                <div class="lower-container">
                 <div>  
                      <a href="/post" class="btn">post</a> 
                 </div>
                 <div>
                      <a href="/destination" class="btn">join a journey</a>
                 </div>
                  
             </div>
         </div>
     </div>
<footer>
    <h2>&copy;2022 Hadil</h2>
</footer>
 @endsection



