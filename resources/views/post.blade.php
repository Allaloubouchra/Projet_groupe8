@extends('layout')
@section('custom_css')
    <link rel="stylesheet" type="text/css" href="/css/style_post.css">
@endsection
@section('contents')
    <div class="container">
        <div class="wrapper">
            <section class="post">
                <header>Share your adventure !</header>
                <form method="post" action="post" enctype="multipart/form-data">
                    @csrf
                    <div class="content">
                        <div class="details">
                            <p>Discover Algeria</p>
                        </div>
                    </div>
                    <input type="text" name="title" placeholder="title" class="form-title">
                    <textarea class="form-group" name="content" id="new-post" rows="5"
                              placeholder="What's on your mind, Discover Algeria?" value=''></textarea>
                    <div class="form">
                        <input type="file" accept="image/*" name="post_media[]" class="upload-images" multiple>
                    </div>
                    <button type="submit" class="button">Post</button>
                </form>
            </section>
        </div>
    </div>
<footer>
    <h2>&copy;2022 ALLALOU Bouchra</h2>
</footer>

@endsection





