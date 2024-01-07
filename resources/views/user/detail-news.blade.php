@extends('layouts.main')
@section('content')
    <!-- Services details Area Start -->
    <section class="service-details ptb-100"> 
        <div class="container">
            <div class="row">
                @foreach ($news as $item)
                <div class="col-lg-8">
                    <div class="details-text-area">
                        <img class="details-main-img" src="assets/images/inner-images/sd-1.jpg" alt="image">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['content'] }}</p>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-4">
                    <div class="sidebar-area pl-20 pt-30">
                        <div class="sidebar-card search-box">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Here.." required>
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-card sidebar-category mt-30">
                            <h3>Categories</h3>
                            <ul>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Adveresting Permits</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Drainage Services</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Enviromental Services</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Survey Services</a></li>
                            </ul>
                        </div>
                        {{-- <div class="sidebar-card recent-news mt-30">
                            <h3>Popular Posts</h3>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds1.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Responds To Citizenship Advices</a></h5>
                                <p>1st Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds2.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Housing Advisers Program For Beginner</a></h5>
                                <p>4th Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="assets/images/inner-images/bds3.jpg" alt="image"></a>
                                <h5><a href="blog-details.html">Responds To a National Reports</a></h5>
                                <p>2nd Sep 2022</p>
                            </div>
                        </div>
                        <div class="sidebar-card sidebar-tag mt-30">
                            <h3>Popular Tags</h3>
                            <ul>
                                <li><a href="category.html">Councillor</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Citizen</a></li>
                                <li><a href="category.html">Program</a></li>
                                <li><a href="category.html">Support</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Details Area end -->
@endsection