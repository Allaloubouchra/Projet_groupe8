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
<p>date: {{$comment->createdAt}}</p>
