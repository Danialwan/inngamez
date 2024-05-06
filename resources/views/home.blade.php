<link rel="stylesheet" href={{ asset('css/home.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <header>
        <video autoplay muted loop class="headerVidio absolute r-0 t-0 z-0">
            <source class="z-0" src="{{ asset('images/home/HeaderVidio.mp4') }}" type="video/mp4">
        </video>
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">CREATIVE</h1>
            <h1 data-aos="fade-up">EXPERIENCE</h1>
            <h1 data-aos="fade-up">IMMERSIVE</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>

    <section id="homeDescription" class="homeDescription flex justify-center">
        <p data-aos="fade-up" class="z-30 text-center">We are a game studio that focuses on limitless creativity, deep experiences, and
            immersive depth.
            With a team
            comprised of bold artists, designers, writers, and developers, we are committed to creating interactive works of
            art that captivate, taking players on meaningful and satisfying journeys. From stunning visual design to
            captivating storylines, every title we release is a gateway to boundless alternate realities, inviting players
            to immerse themselves in unforgettable adventures.</p>
    </section>
    <section class="ourGame">
        <div data-aos="fade-up" class="title flex justify-center mb-20">
            <h1>OUR GAME</h1>
        </div>
        <center>
            <div class="gameCard grid grid-cols-4 gap-10 text-center px-40">
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4" style="background-image: url('{{asset("images/home/GameIcon_01.png")}}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4" style="background-image: url('{{asset("images/home/GameIcon_02.png")}}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4" style="background-image: url('{{asset("images/home/GameIcon_03.png")}}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4" style="background-image: url('{{asset("images/home/GameIcon_04.png")}}')">
                </div>

            </div>
        </center>
    </section>
    <section class="recentWorks flex flex-col items-center p-20">
        <div data-aos="fade-up" class="title mb-20">
            <h1>RECENT WORKS</h1>
        </div>
        <video data-aos="fade-up" class="rounded-lg" width="808" height="542" controls>
            <source src="{{ asset('images/home/Teaser_2_Final.mp4') }}" type="video/mp4">
        </video>
    </section>
    @include('layouts.colaborate')
@endsection
