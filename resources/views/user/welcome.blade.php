@extends('layouts.main')

@section('content')
    <section class="main-banner plr-100 bg-f9fbfe">
        <!-- <span class="banner-comment"><a href="contact.html"><i class="far fa-comment-dots"></i> CONTACT US</a></span> -->
        <div class="banner-social-icons">
            <ul>
                <li><a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-text-area banner-text-area-1">
                        <h6>Gerakan Pramuka</h6>
                        <h1>Kwartir Ranting Padalarang</h1>
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing phasellus hendrerit lorem dolor sit amet magna
                            nibh nec urna in nisi neque aliquet ve, dapibus id dolor sit amet magna aliqu amet.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-img-area-1">
                        <img src="assets/images/team/pdl2.jpg" alt="image">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=ukfISpWHVWI"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="services pt-100 pb-70">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Data Statistik Potensi</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua quis ipsum suspendisse</p>
            </div>
            <div class="section-content">
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-6">
                            <canvas id="schoolChart" width="100" height="100"></canvas>

                        </div>
                        <div class="col-md-6">
                            <canvas id="genderChart" width="100" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                // Data untuk chart sekolah
                var schoolData = {
                    labels: ['SD', 'SMP', 'SMA'],
                    datasets: [{
                        label: 'Jumlah Anggota per Jenjang Sekolah',
                        backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                        borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                        borderWidth: 1,
                        data: [150, 200, 100]
                    }]
                };
        
                // Data untuk chart jenis kelamin
                var genderData = {
                    labels: ['Laki-laki', 'Perempuan'],
                    datasets: [{
                        data: [120, 330],
                        backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                        borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
                        borderWidth: 1,
                    }]
                };
        
                // Membuat bar chart sekolah
                var ctxSchool = document.getElementById('schoolChart').getContext('2d');
                var schoolChart = new Chart(ctxSchool, {
                    type: 'bar',
                    data: schoolData
                });
        
                // Membuat pie chart jenis kelamin
                var ctxGender = document.getElementById('genderChart').getContext('2d');
                var genderChart = new Chart(ctxGender, {
                    type: 'pie',
                    data: genderData
                });
            </script>
        </div>
    </section>

    <section class="services pt-100 pb-70">
        <div class="container">
            <div class="default-section-title default-section-title-middle">
                <h3>Berita Terkini</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua quis ipsum suspendisse</p>
            </div>
            <div class="section-content">
                <div class="events-slider-area owl-carousel">
                    <div class="events-card">
                        <img src="assets/images/events/e1.jpg" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 12, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Conference 2022</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City
                                    Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="events-card">
                        <img src="assets/images/events/e2.jpg" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 13, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Negotiation In Government</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City
                                    Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="events-card">
                        <img src="assets/images/events/e3.jpg" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 14, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Health Conference</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City
                                    Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                    <div class="events-card">
                        <img src="assets/images/events/e4.jpg" alt="image">
                        <div class="events-card-text">
                            <ul>
                                <li>Conference</li>
                                <li>Oct 15, 2022</li>
                            </ul>
                            <h4><a href="event-details.html">Annual Conference 2022</a></h4>
                            <p><i class="fas fa-map-marker-alt"></i> <a href="https://goo.gl/maps/QTg39qSWoB5fdndT7">At City
                                    Center, 27 Division Street, USA</a></p>
                            <a class="read-more-btn" href="event-details.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
