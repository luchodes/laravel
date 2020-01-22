<nav>
        <!-- {{ dump(request()-> routeIs('home'))  }} -->
        <ul>
            <!-- <li class="{{request()-> routeIs('home') ? 'active' : ''}}"><a href="/">Home</a></li> -->
            <li class="{{setActive('home')}}"><a href="/"> @lang('Home')</a></li>
            <li class="{{setActive('about')}}"><a href="/about"> @lang('About')</a></li>
            <li class="{{setActive('portfolio')}}"><a href="/portfolio"> @lang('Portfolio')</a></li>
            <li class="{{setActive('contact')}}"><a href="/contact"> @lang('Contact')</a></li>
        </ul>
    </nav>