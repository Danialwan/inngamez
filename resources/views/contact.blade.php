<link rel="stylesheet" href={{ asset('css/contact.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

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
            <div class="ContactUsContainer flex flex-col-reverse xl:grid grid-cols-3 gap-4 px-10">
                <div data-aos="fade-right" class="contact flex flex-col items-start md:p-10 xl:px-10">
                    <div class="contactTitle text-start mb-5">
                        <h1>OUR MEDIA SOCIAL</h1>
                        <p>Stay connected with us</p>
                    </div>
                    <ul class="flex flex-col gap-2">
                        <a href="">
                            <li class="flex gap-4"><img width="30" src="{{ asset('images/icon/instagram.svg') }}"
                                    alt="">
                                <p>@Inngamez</p>
                            </li>
                        </a>
                        <a href="">
                            <li class="flex gap-4"><img width="30" src="{{ asset('images/icon/Linkedin.svg') }}"
                                    alt="">
                                <p>Inngamez</p>
                            </li>
                        </a>
                        <a href="">
                            <li class="flex gap-4"><img width="30" src="{{ asset('images/icon/Facebook.svg') }}"
                                    alt="">
                                <p>Inngamez</p>
                            </li>
                        </a>
                        <a href="">
                            <li class="flex gap-4"><img width="30" src="{{ asset('images/icon/Youtube.svg') }}"
                                    alt="">
                                <p>Inngamez</p>
                            </li>
                        </a>
                    </ul>
                </div>
                <div data-aos="fade-left" class="message col-span-2 text-start md:p-10 xl:px-5" >
                    <div class="messageTitle mb-4">
                        <h1>SEND US MESSAGE</h1>
                        <p>We are always excited to collaborate and create new works. tell us your idea</p>
                    </div>
                    <form class="messageForm" action="" method="post">
                        <div class="col-span-full">
                            <div class="mt-2">
                                <textarea id="about" name="about" rows="3"
                                    class="block w-full rounded-md border-0 p-2 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="mt-3 mb-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-white">First
                                    name</label>
                                <div class="mt-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium leading-6 text-white">Last
                                    name</label>
                                <div class="mt-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="submit" class="btn btn-submit rounded-lg">Submit</button>
                          </div>
                    </form>
                </div>
            </div>
        </center>
    </section>
    @include('layouts.colaborate')
@endsection
