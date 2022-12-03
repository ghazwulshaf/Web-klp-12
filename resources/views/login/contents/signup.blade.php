@extends('login.main')

@section('content')
    <form action="#" class="content__form">
        <div class="form-container">
            <label for="name" class="form__label">Name</label>
            <input type="text" name="name" id="name" class="form__input">
        </div>
        <div class="form-container">
            <label for="email" class="form__label">Email Address</label>
            <input type="email" name="email" id="email" class="form__input">
        </div>
        <div class="form-container">
            <label for="password" class="form__label">Password</label>
            <input type="password" name="password" id="password" class="form__input">
            <div class="form-remember">
                <input type="checkbox" name="rem-passwd" id="rem-passwd">
                <label for="rem-passwd">Creating an account means you're okay with our <a href="#" class="btn-text">Terms of Service</a>, <a href="#" class="btn-text">Privacy Policy</a>, and our default <a href="#" class="btn-text">Notification Settings</a>.</label>
            </div>
        </div>
        <div class="form-container">
            <button type="submit" class="form__submit btn text-light bg-secondary w-full">Create Account</button>
            <span class="form__text">Already have account? <a href="/login" class="text__sign-up btn-text">Login</a></span>
        </div>
    </form>
@endsection