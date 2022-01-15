@extends('layout')
@section("custom_css")
    <link rel="stylesheet" type="text/css" href="/css/style_postdetails.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">

@endsection


@section("contents")
    <div style="margin-top: 150px; margin-left: 50px">
        <div class="wrapper">
            <section class="articles">
                <div class="article">
                    <div class="left">
                        @if($post->media->first())
                            <img src="{{$post->media->first()->mediaPath}}">
                        @else
                            <img src="img/alger.jpg">
                        @endif
                    </div>
                    <div class="right">
                        <p class="date">{{$post->createdAt}}</p>
                        <h1>{{$post->title}}</h1>
                        <p class="description">{{$post->content}}</p>
                        <p class="auteur">{{$post->user->name}}</p>
                    </div>
                    <div style="margin-left: 50px">
                        @foreach ($post->media as $image)
                            <img height="200px" src="{{$image->mediaPath}}">
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="commentaires" id="comments">
                @foreach($post->ratings as $comment)
                    <hr style="margin-bottom: 10px; margin-top: 10px">
                    <label class="fas fa-star" style="
                    @if($comment->rating >= 1)
                        color: yellow;
                    @else
                        color: gray;
                    @endif"></label>
                    <label class="fas fa-star" style="
                    @if($comment->rating >= 2)
                        color: yellow;
                    @else
                        color: gray;
                    @endif"></label>
                    <label class="fas fa-star" style="
                    @if($comment->rating >= 3)
                        color: yellow;
                    @else
                        color: gray;
                    @endif"></label>
                    <label class="fas fa-star" style="
                    @if($comment->rating >= 4)
                        color: yellow;
                    @else
                        color: gray;
                    @endif"></label>
                    <label class="fas fa-star" style="
                    @if($comment->rating >= 5)
                        color: yellow;
                    @else
                        color: gray;
                    @endif"></label>
                    <p>user: {{$comment->user->name}}</p>
                    <p>rating: {{$comment->rating}}</p>
                    <p>comment: {{$comment->comment}}</p>
                    <p>date: {{$comment->created_at}}</p>
                @endforeach
            </section>

            <div class="container" style="margin-top: 50px">
                <div class="star-widget">

                    <form id="bouchForm" method="post" action="/post/{{$post->id}}/comment">
                        @csrf
                        <header></header>
                        <input type="radio" name="rating" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rating" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                        <div class="textarea">
                            <textarea cols="30" placeholder="Describe your experience.." name="comment"></textarea>
                        </div>
                        <div class="btn">
                            <button type="submit">Post</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // this is the id of the form
        $("#bouchForm").submit(function (e) {

            e.preventDefault(); // avoid to execute the actual submit of the form.

            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    $('#comments').append(data); // show response from the php script.
                    $("#bouchForm")[0].reset();
                }
            });


        });
    </script>
@endsection


