<nav class="navigation">
    <div class="navigation__logo"><img class="navigation__img" src="/favicon.jpg" alt=""></div>
    <div class="navigation__search-bar" id="search-bar">
        
        {{-- <input type="text" placeholder="Search">
        <button class="navigation__search-bar_button">Search</button> --}}
    </div>
    @viteReactRefresh
    @vite('resources/js/search.jsx')
    <div class="navigation__buttons">
        <button>Login</button>
        <button>Your Cart</button>
    </div>

</nav>