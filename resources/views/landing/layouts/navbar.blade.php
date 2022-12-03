<nav class="navbar">
    <div id="navbar__left" class="navbar__container">
        <a href="#">
            <img src="{{ asset('assets/img/logo.png') }}" alt="coding's logo" width="60px">
        </a>
        <ul class="navbar__list">
            <li class="list__item">
                <a href="#" class="item__text active">Home</a>
            </li>
            <li class="list__item">
                <a href="#" class="item__text">Tutorial</a>
            </li>
            <li class="list__item">
                <a href="#" class="item__text">About</a>
            </li>
        </ul>
    </div>
    <div id="navbar__right" class="navbar__container">
        <ul class="navbar__list">
            <li class="list__item">
                <a href="/login" id="btn_login" class="item__text btn text-dark bg-light border-dark">Login</a>
            </li>
            <li class="list__item">
                <a href="#" id="btn_sign-up" class="item__text btn text-light bg-secondary hover:bg-ternary border-secondary">Sign Up</a>
            </li>
        </ul>
    </div>
</nav>