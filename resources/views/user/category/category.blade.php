@extends('layouts.app')

@section('content')
<!-- Banner-category -->
<section class="banner-category">
    <div class="container-fluid">
        <!-- navbar -->
        @include('components.user.navbar')
        <section>
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="banner-category-title text-light">
                            <p class="h2">Category</p>
                            <p class="banner-category-sub-title">
                                Look for the category of work you want and want to see, lots of people are working <br>
                                according to the type of each category </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Form Karyaku -->
<section>
    <!-- title -->
    <div class="text-center">
        <h2 class="mt-5">Category</h2>
        <h5 class="mb-5">
            Look for the category of work you want and want to see, lots of people are working <br>
            according to the type of each category </p>
        </h5>
    </div>

    <div class="container mb-5">
        <!-- category -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://cdn.eraspace.com/pub/media/mageplaza/blog/post/f/o/fotografiteknik.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                        <h5 class="card-title">photography</h5>
                        <p class="card-text">This photography will cover various types of photography, such as portraits, landscapes, architecture, fashion, food, and so on</p>                        <a href="{{ route('kategori.fotografi') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://mmc.tirto.id/image/otf/500x0/2020/09/30/istock-1191609321_ratio-16x9.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Graphic Design</h5>
                        <p class="card-text">Graphic Design will focus on graphic design, including illustrations, posters, logos, brochures and other visual designs</p>
                        <a href="{{ route('kategori.desain-grafis') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://berkeluarga.id/media/2020/11/05-wayhomestudio-female-painter-her-art-studio-1200x675.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Painting and Drawing Arts</h5>
                        <p class="card-text">Painting and Drawing will include painting, hand drawing, digital art, and various fine art techniques</p>
                        <a href="{{ route('kategori.seni-lukis') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://www.indonesiana.id/images/all/2021/12/13/f202112130850304.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Creative Writing</h5>
                        <p class="card-text">Creative Writing will allow users to share short stories, poetry, essays, articles and other creative writing.</p>
                        <a href="{{ route('kategori.tulisan-kreatif') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1510915361894-db8b60106cb1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTB8fHxlbnwwfHx8fHw%3D&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Music and Audio</h5>
                        <p class="card-text">Music and Audio This will involve music, vocal recordings, podcasts, sound effects, or other audio works.</p>
                        <a href="{{ route('kategori.musik') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1612311370838-96f8e048cd29?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTh8fGRvY3VtZW50YXJ5fGVufDB8fDB8fHww&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Videos and Short Films</h5>
                        <p class="card-text">will focus on making videos and short films. Users can share their work in the form of short films
                        <a href="{{ route('kategori.video-film.pendek') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2022/10/31/3205469962.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Handcrafts</h5>
                        <p class="card-text">this category will include handicrafts such as knitting, weaving, jewelry making, home decoration, and the like</p>
                        <a href="{{ route('kategori.kerajinan-tangan') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/03/B200446-Cover-wisata-kuliner-di-bangkok-scaled.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Culinary</h5>
                        <p class="card-text">This culinary will allow users to share recipes, food photos, cooking video tutorials and their culinary experiences</p>
                        <a href="{{ route('kategori.kuliner') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1470309864661-68328b2cd0a5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8ZmFzaGlvbiUyMGNsb3RoaW5nfGVufDB8fDB8fHww&w=1000&q=80" class="card-img-top" alt="Fissure in Sandstone" />
                    <div class="card-body">
                    <h5 class="card-title">Fashion and Clothing</h5>
                        <p class="card-text">Moed and Clothing will cover fashion, clothing design, outfit of the day (OOTD), and accessories</p>
                        <a href="{{ route('kategori.mode-dan-busana') }}" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="https://media.istockphoto.com/id/1147195672/photo/focused-developer-coding-on-computer-monitors-working-late-in-office.jpg?s=612x612&w=0&k=20&c=R6oPQ_vkXAxCzpi4UFsN28pdU0C0LJL8JLAX-HwO90Q=" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                <h5 class="card-title">Technology and Innovation</h5>
                    <p class="card-text">this category will involve innovative projects, the latest technology, applications, hardware, or creative ideas in the field of technology</p>
                    <a href="{{ route('kategori.teknologi-dan-inovasi') }}" class="btn btn-primary">Explore</a>
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