@extends('layouts.app')

@section('content')
<!-- Banner-review-content -->
<section class="banner-review-content">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-center align-items-center text-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-review-content-title text-light">
                            <p class="h2">“Keindahan yang Tersembunyi”</p>
                            <p class="banner-review-content-sub-title">
                                Karya ini bisa berupa lukisan yang menampilkan keindahan yang tersembunyi dalam alam atau karya seni abstrak <br>
                                yang memvisualisasikan perasaan dan emosi yang tersembunyi dalam diri manusia
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Load Data Karyaku -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5 mb-2">Publish, March 11 2023</h2>
        <h1><b>"Keindahan Yang Tersembunyi”"</b></h1>
        <h6>
            Karya ini bisa berupa lukisan yang menampilkan keindahan yang tersembunyi dalam alam atau karya seni abstrak <br>
            yang memvisualisasikan perasaan dan emosi yang tersembunyi dalam diri manusia
        </h6>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="mt-4">
                <div class="d-flex justify-content-start">
                    Author: Khaidir Ali Dan Riki
                </div>
            </div>
            <img src="https://w.forfun.com/fetch/28/28eca9a1687916a12443f74c3ed7ad5b.jpeg" class="w-100 h-75 img-fluid" alt="">

            <!-- Load Text Data -->
            <div class="mt-4 mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <p class="lead">
                            Artikel ini membahas tentang bagaimana desain dapat menjadi faktor kunci dalam menghadapi era digital yang semakin berkembang. Desain bukan hanya tentang membuat sesuatu terlihat bagus, namun juga tentang bagaimana memenuhi kebutuhan pengguna dan memberikan pengalaman yang optimal. <br> <br>

                            Dalam artikel ini, akan dibahas mengenai peran desainer dalam menghadapi tantangan digital, seperti mempertimbangkan berbagai platform dan perangkat yang digunakan oleh pengguna. Desainer harus dapat memahami karakteristik setiap platform dan bagaimana desain dapat diadaptasi agar sesuai dengan kebutuhan pengguna. <br> <br>


                            Selain itu, artikel ini juga membahas tentang penggunaan teknologi dan alat desain yang dapat membantu desainer dalam mengoptimalkan karya mereka. Dalam era digital, teknologi dapat menjadi alat yang sangat bermanfaat untuk membantu desainer mencapai tujuan mereka. <br> <br>


                            Artikel ini juga akan membahas tentang tren desain terbaru dan bagaimana desainer dapat mengikuti tren ini untuk menciptakan karya yang lebih baik dan sesuai dengan kebutuhan pengguna. Dalam dunia desain, tren selalu berubah dan desainer harus dapat mengikuti tren ini untuk tetap relevan. <br> <br>


                            Terakhir, artikel ini juga akan membahas tentang pentingnya kolaborasi dalam desain. Dalam era digital, kolaborasi sangat penting untuk menghasilkan karya yang optimal. Desainer harus dapat bekerja sama dengan pengembang, pemasar, dan tim lainnya untuk mencapai tujuan bersama. <br> <br>


                            Kesimpulannya, artikel ini akan membahas tentang bagaimana desain dapat menjadi faktor kunci dalam era digital yang semakin berkembang. Dalam artikel ini akan dibahas mengenai peran desainer, teknologi dan alat desain, tren desain terbaru, dan pentingnya kolaborasi dalam desain. <br> <br>

                        </p>
                    </div>
                    <img src="https://images.wallpaperscraft.com/image/single/man_loneliness_alone_180327_1600x1200.jpg" class="w-100 h-75 img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Load More Data -->
    <!-- title -->
    <div class="text-center">
        <h2 class="mb-2">Load More Karya-ku</h2>
        <h5>
            Inspirasi Karya, Budaya dan lain sebagainya dari orang-orang di seluruh dunia. <br>
            Temukan Inspirasi dan lakukan idemu sekarang.
        </h5>
    </div>

    <!-- Load Data -->
    <!-- data Karyaku -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-4">
                <img src="https://d23.com/app/uploads/2020/01/1180w-463h_010920-riviera-art-gallery-780x440.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://ilovelife.co.id/blog/wp-content/uploads/2021/12/Berniat-Beli-NFT-Art-Pelajari-Dulu-Cara-Kerjanya.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://i.ytimg.com/vi/dBsd_Mb33dQ/maxresdefault.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="https://d23.com/app/uploads/2020/01/1180w-463h_010920-riviera-art-gallery-780x440.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://ilovelife.co.id/blog/wp-content/uploads/2021/12/Berniat-Beli-NFT-Art-Pelajari-Dulu-Cara-Kerjanya.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="https://i.ytimg.com/vi/dBsd_Mb33dQ/maxresdefault.jpg" class="w-100 h-75 img-fluid " alt="">
                <div class="d-flex justify-content-between mt-2">
                    <div>
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle mr-3" height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        Valentio Aditama
                    </div>
                    <div>Selasa, 10 Feburari 2023</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
@include('components.user.footer')
<!-- Notification -->
@include('components.notifications')

@endsection