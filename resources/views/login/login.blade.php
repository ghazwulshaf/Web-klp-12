<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
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
<body onload="slideContents()">
    <div id="section">
        <section id="section__left" class="section">
            <div id="content_1" class="content">
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
            <div id="content_2" class="content">
                <div class="content__text">
                    <h1 class="content__label">Lot of tutorials</h1>
                    <p class="content__description">Learn more programming languages with lof of tutorials</p>
                    <div class="content__pagination">
                        <span class="page__item"></span>
                        <span class="page__item active"></span>
                        <span class="page__item"></span>
                    </div>
                </div>
                <img class="content__image" src="{{ asset('assets/img/open-source-amico.svg') }}">
            </div>
            <div id="content_3" class="content">
                <div class="content__text">
                    <h1 class="content__label">Solve problem</h1>
                    <p class="content__description">Solve your programming's problems with Coding's tutorials</p>
                    <div class="content__pagination">
                        <span class="page__item"></span>
                        <span class="page__item"></span>
                        <span class="page__item active"></span>
                    </div>
                </div>
                <img class="content__image" src="{{ asset('assets/img/code-typing-rafiki_cropped.svg') }}">
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

    {{-- import js --}}
    <script src="{{ asset('js/login.script.js') }}"></script>
</body>
</html>