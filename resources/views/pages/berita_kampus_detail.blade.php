@extends('layouts.index')
@section('heading', 'Berita Lanal')
@section('page')
    <a href="{{ route('berita') }}" class="text-capitalize">Berita</a>
    <span class="mx-3 fas fa-angle-right"></span>
    <span class="current">{{ $berita->judul_berita }} </span>
@endsection
@section('content')
    {{-- Informasi berita Detail  begin --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="berita-detail">
                    <h2 class="article-title">{{ $berita->judul_berita }}</h2>
                    <div class="divider mx-auto mb-2"></div>
                    <ul class="list-inline text-center">
                        <li class="list-inline-item text-grey"><i class="fas fa-calendar-week me-2"></i>:
                            {{ tanggal('hari', $berita->created_at) }}
                        </li>
                        <li class="list-inline-item text-grey"><i class="fas fa-clock ms-2"></i>
                            {{ time_elapsed_string($berita->created_at) }}</li>
                    </ul>
                    <img src="{{ URL::asset($berita->gambar)}}" alt="" class="img-fluid">
                    <p class="mt-3">{!! $berita->isi !!}</p>
                </div>
            </div>

                <!-- .col-md-8 -->
                <div class="col-lg-6 sidebar">
                <div class="sidebar-box">
<<<<<<< Updated upstream
                    <h3 class="sidebar-heading">Popular Articles</h3>
=======
                    <h2 class="sidebar-heading pt-3" style="margin-bottom: 20px; font-family: 'Helvetica Neue', sans-serif; font-weight: bold;">Popular Articles</h2>
>>>>>>> Stashed changes
                    @foreach ($berita_populer as $item)
                        <div class="block-21 mb-4 d-flex">
                        <div class="sidebar">
                             <img src="{{ URL::asset($item->gambar)}}" alt="" class="sidebar-image">
                            <div class="text">
<<<<<<< Updated upstream
                                <h4 class="article-title"><a href="{{ route('berita.detail', $item->slug_berita) }}">{{ $item->judul_berita }}</a></h4>
=======
                                <h4 class="article-popular" style="margin-top: 2; font-size:medium"><a href="{{ route('berita.detail', $item->slug_berita) }}">{{ $item->judul_berita }}</a></h4>
>>>>>>> Stashed changes
                                <div class="meta">
                                    <div><span class="fas fa-calendar"></span>
                                        {{ tanggal('hari', $item->created_at) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    @endforeach
                </div>
<<<<<<< Updated upstream
=======
                <style>
                .sidebar {
                    width: 400px; /* Atur lebar sesuai kebutuhan */
                    padding: 10px;
                    border: 1px solid #ddd;
                }

                .sidebar-image {
                    max-width: 100%;
                    height: auto;
                    display: block;
                    margin: 0 auto;
                }

                .article-title {
                    text-align: center;
                    font-size: 24px;
                    font-weight: bold;
                    margin: 20px 0;
                }

                .article-popular {
                    text-align: left;
                    font-size: 24px;
                    font-weight: bold;
                    margin: 20px 0;
                }
    
                </style>


>>>>>>> Stashed changes
            </div>
            
<!-- END COL -->
            </div>
        </div>
    </section>
    {{-- Informasi Detail  end --}}

    <section class="mb-3 testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Student Says About Us</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap d-flex">
                                <div class="user-img me-4"
                                    style="background-image: url({{ asset('assets/images/alumni/teacher-4.jpg') }})">
                                </div>
                                <div class="text ml-2">
                                    <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="fas fa-quote-left"></i>
                                    </span>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <p class="name">Racky Henderson</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
