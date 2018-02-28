<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">
        <a class="nav-link active" href="/posts">Home</a>
        <a class="nav-link" href="/posts/create">Publish</a>

        @if (Auth::check())
            <a class="nav-link" href="/logout">Logout</a>
        @else
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        @endif

        @if (Auth::check())
            <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        @endif
    </nav>
  </div>
</div>