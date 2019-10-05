<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><h2 style="color: #1d643b">Capital of Bangladesh</h2></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse ">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="{{ Request::is('/') ? 'active':'' }}" href="{{ route('home') }}">Home</a></li>
                    <li><a class="{{ Request::is('about') ? 'active':'' }}" href="{{ route('about') }}">About Dhaka</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a class="{{ Request::is('notice') ? 'active':'' }}" href="{{ route('notice') }}">Notice</a></li>
                    <li>
                        <a href="testimonials.html">Testimonials</a>
                    </li>
                    @guest
                        <li><a class="{{ Request::is('login')? 'active': '' }}" href="{{ route('login') }}">Login</a></li>
                        <li><a class="{{ Request::is('register')? 'active': '' }}" href="{{ route('register') }}">Register</a></li>
                    @else
                        @if(Auth::user()->role->id == 1)
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @elseif(Auth::user()->role->id == 2)
                            <li><a href="{{ route('moderator.dashboard') }}">Dashboard</a></li>
                            @elseif(Auth::user()->role->id == 3)
                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
