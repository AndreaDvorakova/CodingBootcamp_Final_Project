<nav class="navigation">
    
        <div class="navigation__logo"><a href='/home'><img class="navigation__img" src="/favicon.jpg" alt="Company Logo"></a></div>
        <div class="navigation__search-bar" id="search-bar">
            
            {{-- <input type="text" placeholder="Search">
            <button class="navigation__search-bar_button">Search</button> --}}
        </div>
        @viteReactRefresh
        @vite('resources/js/search.jsx')
        
    
    <div class="navigation__buttons">
    <div class="navigation__buttons_web">
    
        {{-- <button onClick="location.href='{{url('login')}}'">Login</button> --}}
           
        @if (Auth::user()) 
            <button><a onClick="location.href='{{url('logout')}}'">Logout</a></button>
        @else  
            <button><a class="nav-link" 
            style="cursor: pointer" 
            data-toggle="modal" 
            data-target="#loginModal">{{ __('Login') }}</a>
            </button>
            
        @endif
        

        
    
            </button>
        <button><a onClick="location.href='{{url('cart')}}'">Your Cart</a></button>

    </div>

    <div class="navigation__buttons_mobile">
        <a onClick="location.href='{{url('login')}}'"><img src="/login_icon.png" alt="Login button"></a>
        <a href="#" ><img src="/cart_icon.png" alt="Cart button"></a>
    </div>

    </div>

    <div class="navigation__buttons_mobile">
        <a onClick="location.href='{{url('login')}}'"><img src="/login_icon.png" alt="Login button"></a>
        <a href="#" ><img src="/cart_icon.png" alt="Cart button"></a>
    </div>
    </div>

</nav>
