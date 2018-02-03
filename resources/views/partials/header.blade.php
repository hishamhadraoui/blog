<header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        {{-- Navbar Brand --}}
        <div class="navbar-header d-flex align-items-center justify-content-between">
          {{-- Navbar Brand --}}
          <a href="/" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a>
           {{-- Toggle Button --}}
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
        </div>
        {{-- Navbar Menu --}}
        <div id="navbarcollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
              <li class="nav-item"><a href="/categories" class="nav-link ">Categories</a></li>
              <li class="nav-item"><a href="/" class="nav-link ">Contact</a></li>                
              <li class="nav-item"><a href="/about" class="nav-link ">About</a></li>
          </ul>
{{--               <ul class="langs navbar-text">
            <a href="#" class="active">EN</a><span>           </span><a href="#">AR</a>
          </ul> --}}
        </div>
      </div>
    </nav>
</header>