@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
        <!-- Latest Posts -->
        <main class="posts-listing col-lg-8"> 
          <div class="container">
            <div class="row">
              <!-- post -->
              @foreach ($posts as $post)
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('img/blog-post-1.jpeg') }}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">20 May | 2016</div>
                    <div class="category"><a href="#">Business</a></div>
                  </div><a href="{{ $post->path() }}">
                    <h3 class="h4">{{ $post->title }}</h3></a>
                  <p class="text-muted">{{ $post->body }}</p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="img/avatar-3.jpg" alt="..." class="img-fluid"></div>
                      <div class="title"><span>John Doe</span></div></a>
                    <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                    <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                  </footer>
                </div>
              </div>
            @endforeach
            <!-- Pagination -->
              @include('partials.pagination')        
            </div>
            
          </div>
        </main>
    @include('partials.sidebar')
      </div>
    </div>
@endsection