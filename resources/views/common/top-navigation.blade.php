<nav class="navigation">
    
    <div class="navigation__logo"><a href='/home'><img class="navigation__img" src="/favicon.jpg" alt="Company Logo"></a></div>
    <div class="navigation__search-bar" id="search-bar"></div>
    @viteReactRefresh
    @vite('resources/js/search.jsx')
        
    
    <div class="navigation__buttons">
        <div class="navigation__buttons_web">          
            @if (Auth::user()) 
                <button><a onClick="location.href='{{url('logout')}}'">Logout</a></button>
            @else  
                <button><a class="nav-link" 
                style="cursor: pointer" 
                data-bs-toggle="modal" 
                data-bs-target="#loginModal">{{ __('Login') }}</a>
                </button>
                
            @endif
            <button><a class="nav-link" onClick="location.href='{{url('cart')}}'">Your Cart</a></button>
        </div>

        <div class="navigation__buttons_mobile">
            @if (Auth::user()) 
                <a class="nav-link" onClick="location.href='{{url('logout')}}'"><img src="/logout_icon.png"></a>
            @else 
                <a class="nav-link" 
                style="cursor: pointer" 
                data-bs-toggle="modal" 
                data-bs-target="#loginModal"><img src="/login_icon.png" alt="Login button"></a>
            

            @endif
            
            {{-- <a onClick="location.href='{{url('login')}}'"><img src="/login_icon.png" alt="Login button"></a> --}}
            <a href="/cart" ><img src="/cart_icon.png" alt="Cart button"></a>
        </div>

    </div>

</nav>
