@extends('layouts.main')

@section('content')
    <!-- Uni Banner Area Start -->
    <section class="uni-banner"> 
        <div class="container">
            <div class="uni-banner-text-area">
                <h1>Kegiatan Kami</h1>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li>Kegiatan</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- uni Banner Area End -->

    <!-- Events area start -->
    <section class="events pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
            <div class="row">
            @foreach($newsData as $event)
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="events-card">
                        <img src="{{ asset('assets/images/events/e1.jpg') }}" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>{{ $event['category'] }}</li>
                                <li>{{ $event['created_at'] }}</li>
                            </ul>
                            <h4><a href="#">{{ $event['title'] }}</a></h4>
                            <a class="read-more-btn" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
</div>

            </div>
            <div class="paginations mt-30">
                <ul>
                    <li><a class="active" href="events.html">1</a></li>
                    <li><a href="events.html">2</a></li>
                    <li><a href="events.html">3</a></li>
                    <li><a href="events.html"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Events area end -->
@endsection