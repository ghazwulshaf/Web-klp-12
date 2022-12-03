@extends('login.main')

@section('content')
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
@endsection