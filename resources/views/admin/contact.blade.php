<link rel="stylesheet" href={{ asset('css/contact.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <header style="background-image: url('{{ asset('images/contact/HeaderContact.png') }}')">
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">GET IN TOUCH</h1>
            <h1 data-aos="fade-up">WITH US</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>
    <section class="UpdateFromUs">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>CONTACT US</h1>
        </div>
        <center>
            <div class="ContactUsContainer admin flex flex-col-reverse xl:grid grid-cols-3 gap-4 px-10">
                <div data-aos="fade-right" class="contact flex flex-col items-start md:p-10 xl:px-10">
                    <div class="contactTitle text-start mb-5">
                        <h1>OUR MEDIA SOCIAL</h1>
                        <p>Stay connected with us</p>
                    </div>
                    <ul class="flex flex-col gap-2">

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/instagram.svg') }}"alt="">
                                <p>@Inngamez</p>
                            </div>
                            <a href=""><div class="editSosmed"></div></a>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Linkedin.svg') }}" alt="">
                                <p>Inngamez</p>
                            </div>
                            <a href=""><div class="editSosmed"></div></a>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Facebook.svg') }}" alt="">
                                <p>Inngamez</p>
                            </div>
                            <a href=""><div class="editSosmed"></div></a>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Youtube.svg') }}" alt="">
                                <p>Inngamez</p>
                            </div>
                            <a href=""><div class="editSosmed"></div></a>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-left" class="message col-span-2 text-start md:p-10 xl:px-5">
                    <div>

                    </div>
                </div>
            </div>
        </center>
    </section>
    @include('layouts.colaborate')
@endsection
