<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coding | {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="icon/png">

    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login/main.style.css') }}">

    {{-- Login CSS --}}
    <link rel="stylesheet" href="{{ asset('css/login/login.style.css') }}">

    {{-- Utilities CSS --}}
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">

    {{-- Components CSS --}}
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/53790a54cf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="section">
        <section id="section__left" class="section">
            <div class="content">
                <div class="content__text">
                    <h1 class="content__label">Designed for Individuals</h1>
                    <p class="content__description">Learn the code and grow your skill, from anywhere</p>
                    <div class="content__pagination">
                        <span class="page__item active"></span>
                        <span class="page__item"></span>
                        <span class="page__item"></span>
                    </div>
                </div>
                <img class="content__image" src="{{ asset('assets/img/code-typing-pana.svg') }}">
            </div>
        </section>

        <section id="section__right" class="section">
            <div class="close">
                <a href="/" class="close__icon"><i class="fa-solid fa-xmark"></i></a>
            </div>
            <div class="content">
                <div class="content__header">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Coding" width="60px">
                    <h1 class="header__title">Login</h1>
                </div>
                <form action="#" class="content__form">
                    <div class="form-container">
                        <label for="email" class="form__label">Email Address</label>
                        <input type="email" name="email" id="email" class="form__input">
                    </div>
                    <div class="form-container">
                        <label for="password" class="form__label">Password</label>
                        <input type="password" name="password" id="password" class="form__input">
                        <div class="form-remember">
                            <input type="checkbox" name="rem-passwd" id="rem-passwd">
                            <label for="rem-passwd">Remember Password</label>
                        </div>
                    </div>
                    <div class="form-container">
                        <button type="submit" class="form__submit btn text-light bg-secondary w-full">Login</button>
                        <span class="form__text">Don't have an account? <a href="#" class="text__sign-up btn-text">Sign up</a></span>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>