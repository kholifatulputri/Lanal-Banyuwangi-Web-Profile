@extends('layouts.index')
@section('heading', 'Berita Terkini di Pangkalan TNI AL Banyuwangi')
@section('page')
    <span class="current">Berita</span>
@endsection
@section('content')

    {{-- Informasi berita  begin --}}
    <section class="berita__lanal">
        <div class="container my-4"> <!-- Add "my-4" class to add vertical margin -->
            <div class="row">
                @foreach ($berita as $item)
                    <div class="col-md-6 col-lg-4 ">
                        <div class="blog-entry">
                            <div class="course-1">
                                <div class="thumnail">
                                    <a href="{{ route('berita.detail', $item->slug_berita) }}"><img
                                            src="{{ Storage::url($item->gambar) }}" alt="Image" class="img-fluid"></a>
                                            <div class="meta-date text-center p-2" style="width: 100%; background-color: navy; color: white; font-family: sans-serif; border-radius: 5px; padding: 8px; display: flex; justify-content: space-between;">
                                                <span class="date">{{ tanggal('tanggal', $item->publish) }} {{ tanggal('bulan', $item->publish) }} {{ tanggal('tahun', $item->publish) }}</span>
                                            </div>



                                </div>
                                <div class="text bg-white berita p-4">
                                    <h3 class="heading"><a
                                            href="{{ route('berita.detail', $item->slug_berita) }}">{{ $item->judul_berita }}</a>
                                    </h3>
                                    <p><?= Str::limit(strip_tags($item->isi), 100, $end = '...') ?></p>
                                    <div class="d-flex align-items-center justify-content-end mt-4">
                                        <p class="mb-0">
                                            <a href="{{ route('berita.detail', $item->slug_berita) }}" class="btn-read btn-more" style="background-color: #2979FF; color: white; text-decoration: none; padding: 8px 16px; border: none; border-radius: 10px; transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s; transform: skew(-15deg);">
                                                Read More <span class="fa fa-arrow-right"></span>
                                            </a>
                                        </p>
                                    </div>

                                    <style>
                                        .btn-read.btn-more:active {
                                            background-color: white;
                                            color: #2979FF;
                                        }
                                    </style>



                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Informasi berita  end --}}

@endsection
