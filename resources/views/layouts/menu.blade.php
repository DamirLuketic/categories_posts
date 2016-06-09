<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{route('posts.index')}}">Home</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

</ul>

<ul id="navbar_right" class="nav navbar-nav navbar-right">

    @if(!Cookie::get('user'))

        <li><a href="{{route('login_page')}}">Login</a></li>

        <li><a href="{{route('users.create')}}">Register</a></li>

    @else

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Welcome {{Cookie::get('user')->name}}</a>

        <li><a href="{{ url('/logout') }}">Logout</a></li>

    @endif

</ul>