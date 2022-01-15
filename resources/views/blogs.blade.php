@extends('layout')
@section('contents')
   <section id="blog">
       <div class="blog-heading">
         <h3>Find your next destination</h3>
      </div>
      <div class="blog-container">
      @foreach ($posts as $post)
         <div class="blog-box">
            <div class="blog-img">
               @if($post->media->first())
               <img src="{{$post->media->first()->mediaPath}}">
               @else
               <img src="img/alger.jpg">
               @endif
            </div>
            <div class="blog-text">
               <span>{{$post->user->name}}</span>
               <span>{{$post->createdAt}}</span>
               <a href="#" class="blog-title">{{$post->title}}</a>
               <p>{{Str::limit($post->content,20)}}</p>
               <a href="post/{{$post->id}}">Read More</a>
            </div>
         </div>
         @endforeach
</section>
<footer>
    <h2>&copy;2022 ALLALOU Bouchra</h2>
</footer>

@endsection
