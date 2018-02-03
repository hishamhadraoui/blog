<div class="comment">
<div class="comment-header d-flex justify-content-between">
  <div class="user d-flex align-items-center">
    <div class="image"><img src="{{ asset('img/user.svg') }}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title"><strong>{{ $reply->name }}</strong><span class="date">May 2016</span></div>
  </div>
</div>
<div class="comment-body">
  <p>{{ $reply->body }}</p>
</div>
</div>