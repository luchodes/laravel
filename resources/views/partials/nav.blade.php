<nav>
        <!-- {{ dump(request()-> routeIs('home'))  }} -->
        <ul>
            <!-- <li class="{{request()-> routeIs('home') ? 'active' : ''}}"><a href="/">Home</a></li> -->
            <li class="{{setActive('home')}}"><a href="{{ route('home')}}"> @lang('Home')</a></li>
            <li class="{{setActive('about')}}"><a href="{{ route('about')}}"> @lang('About')</a></li>
            <li class="{{setActive('portfolio')}}"><a href="{{ route('projects.index')}}"> @lang('Portfolio')</a></li>
            <li class="{{setActive('contact')}}"><a href="{{ route('contact')}}"> @lang('Contact')</a></li>
        </ul>
    </nav>