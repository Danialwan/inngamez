<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <div class="containerDetailNews flex flex-col justify-center items-center md:pt-20 xl:pt-40 p-10">
        <div class="grid md:grid-col-1 xl:grid-cols-3 xl:px-10">
            <div class="pb-10 xl:pe-10 xl:col-span-2 xl:pb-0">
                <div class="DetailNewsImage m-10 flex justify-end">
                    <img src="{{ asset('images/news/news1.jpg') }}" alt="">
                    <button id="EditImageBtn" class="editNews editImage absolute"></button>
                </div>
                <div class="boxEditNews p-3 flex justify-between">
                    <b class="title">Lorem, ipsum dolor.</b>
                    <button id="EditTitleBtn" class="editNews editImage"></button>
                </div>
                <div class="boxEditNews p-3">
                    <button id="EditBodyBtn" class="editNews editImage m-2 float-right"
                        href="{{ '/news/' . $news->id }}"></button>
                    <p class="body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque iste laborum!
                        Odit
                        explicabo libero laborum nisi maiores nihil repellat, ut accusamus sunt ratione rerum nesciunt
                        repudiandae quibusdam nobis voluptatibus dolorum, velit eveniet amet. Cum quae repudiandae,
                        recusandae
                        similique fugit dolores ex non deleniti dolore veniam eveniet sed soluta illo, dolor neque sapiente,
                        iste autem? Voluptatibus sint eum quae voluptate dicta dolor quas deserunt, veritatis ab natus
                        temporibus repellat reprehenderit praesentium libero voluptatem alias minus quisquam consectetur
                        numquam
                        cumque rerum accusantium a inventore est? Perspiciatis a excepturi quod consequuntur atque ullam,
                        quas
                        minus molestiae aliquam quia, minima officiis deleniti? Molestias?</p>
                </div>
            </div>
            <div class="ContainerRight flex flex-col pt-10 xl:p-10 xl:pt-0 gap-4">
                <div class="mb-5 xl:pb-0">
                    <b>Berita Lain:</b>
                </div>
                <a class="Rekomendasi grid grid-cols-3 gap-3" href="">
                    <div class="image rounded-lg"></div>
                    <div class="col-span-2">
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque</b>
                        <p class="newsDate hidden md:block xl:hidden">2024-05-09 15:45:33</p>
                        <p class="newsBody mt-3 hidden md:block xl:hidden">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alter...
                        </p>
                    </div>
                </a>
                <a class="Rekomendasi grid grid-cols-3 gap-3" href="">
                    <div class="image rounded-lg"></div>
                    <div class="col-span-2">
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque</b>
                        <p class="newsDate hidden md:block xl:hidden">2024-05-09 15:45:33</p>
                        <p class="newsBody mt-3 hidden md:block xl:hidden">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alter...
                        </p>
                    </div>
                </a>
                <a class="Rekomendasi grid grid-cols-3 gap-3" href="">
                    <div class="image rounded-lg"></div>
                    <div class="col-span-2">
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque</b>
                        <p class="newsDate hidden md:block xl:hidden">2024-05-09 15:45:33</p>
                        <p class="newsBody mt-3 hidden md:block xl:hidden">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alter...
                        </p>
                    </div>
                </a>
                <a class="Rekomendasi grid grid-cols-3 gap-3" href="">
                    <div class="image rounded-lg"></div>
                    <div class="col-span-2">
                        <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eaque</b>
                        <p class="newsDate hidden md:block xl:hidden">2024-05-09 15:45:33</p>
                        <p class="newsBody mt-3 hidden md:block xl:hidden">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alter...
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div data-aos="fade-right" class="BackButton flex justify-start items-center p-10">
            <a class="back" href="/news"></a>
        </div>
    </div>
    @include('component.newsEditModal')
    {{-- @include('layouts.colaborate') --}}

    <script>
        // Get the modal
        var editImageModal = document.getElementById("editImageModal");
        var editTitleModal = document.getElementById("editTitleModal");
        var editBodyModal = document.getElementById("editBodyModal");


        // Get the button that opens the modal
        var EditImageBtn = document.getElementById("EditImageBtn");
        var EditTitleBtn = document.getElementById("EditTitleBtn");
        var EditBodyBtn = document.getElementById("EditBodyBtn");


        // Get the <span> element that closes the modal
        var closeImage = document.getElementsByClassName("closeImage")[0];
        var closeTitle = document.getElementsByClassName("closeTitle")[0];
        var closeBody = document.getElementsByClassName("closeBody")[0];


        // When the user clicks the button, open the modal
        EditImageBtn.onclick = function() {
            editImageModal.style.display = "block";
        }

        EditTitleBtn.onclick = function() {
            editTitleModal.style.display = "block";
        }

        EditBodyBtn.onclick = function() {
            editBodyModal.style.display = "block";
        }


        // When the user clicks on <span> (x), close the modal
        closeImage.onclick = function() {
            editImageModal.style.display = "none";
        }
        closeTitle.onclick = function() {
            editTitleModal.style.display = "none";
        }
        closeBody.onclick = function() {
            editBodyModal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == editImageModal) {
                editImageModal.style.display = "none";
            } else if (event.target == editTitleModal) {
                editTitleModal.style.display = "none";
            }
            else if (event.target == editBodyModal) {
                editBodyModal.style.display = "none";
            }

        }
    </script>
@endsection
