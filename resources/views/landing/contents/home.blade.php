@extends('landing.layouts.main')

@section('content')
    <section id="home">
        <div class="container">
            <div class="content">
                <h1 class="content__title">Learn to Code</h1>
                <p class="content__description">Since 2022, Coding serve 20,000 tutorials with the world's largest web developer site</p>
                <img class="content__image" src="{{ asset('assets/img/programming-animate.svg') }}" width="360px">
                <a href="#" class="btn">Get Started</a>
            </div>
        </div>
    </section>
@endsection