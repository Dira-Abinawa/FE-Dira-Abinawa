@extends('layouts.main')

@section('content')
    <section class="service-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="details-text-area">
                        <img class="details-main-img" src="{{asset('assets/images/team/dira2.jpg')}}" alt="image">
                        <h3>Dewan Kerja Ranting Padalarang</h3>
                        <p>Berikut merupakan data kepengurusan serta jabatan yang ada di Dewan Kerja Ranting Padalarang </p>
                        <style>
                            table {
                                width: 100%;
                                border-collapse: collapse;
                                margin-top: 20px;
                            }
                    
                            table, th, td {
                                border: 1px solid #ddd;
                            }
                    
                            th, td {
                                padding: 10px;
                                text-align: left;
                            }
                    
                            th {
                                background-color: #f2f2f2;
                            }
                        </style>
                        <table>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>RD. GALIH RAKASIWI</td>
                                    <td>Ketua</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>RUWINA ALFIRNASARI</td>
                                    <td>Wakil Ketua</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>ILMA RAHMATILAH</td>
                                    <td>Sekretaris I</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>NOVIA KUSUMA DWIYANTI</td>
                                    <td>Sekretaris II</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PUTRI ANGGRAENI</td>
                                    <td>Bendahara</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>DAVID FAKHRI ARDANA</td>
                                    <td>Ketua Bidang Kajian Kepramukaan</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>RISMAYANTI</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>ANGGI NOVITA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>FAROH SITI</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>RAJA DANIS</td>
                                    <td>Ketua Bidang Kegiatan</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>ZAHRA NABILA PERMATA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>HAMKA SALMAN AL FARITSI</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>TIKA YOLANDA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>RIFQI ADITYA PRATAMA</td>
                                    <td>Ketua Bidang Pembinaan Pengembangan</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>IBNU ALBANI SAPUTRA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>NAZWA ANGGITA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>AGI RUSTANDI</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>RAYHAN JUNDI</td>
                                    <td>Ketua Bidang Penelitian Evaluasi</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>RAFLY RACHELSA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>TABAH SHOFIKA</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>NURUL SITI</td>
                                    <td>Anggota Bidang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Adveresting Permits</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                        Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Animal Health And
                                        Welfare</a></li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Drainage Services</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Enviromental Services</a>
                                </li>
                                <li><a href="blog-details.html"><i class="fas fa-angle-right"></i> Survey Services</a></li>
                            </ul>
                        </div>
                        <div class="sidebar-card recent-news mt-30">
                            <h3>Popular Posts</h3>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="{{asset('assets/images/inner-images/bds1.jpg')}}"
                                        alt="image"></a>
                                <h5><a href="blog-details.html">Responds To Citizenship Advices</a></h5>
                                <p>1st Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="{{asset('assets/images/inner-images/bds2.jpg')}}"
                                        alt="image"></a>
                                <h5><a href="blog-details.html">Housing Advisers Program For Beginner</a></h5>
                                <p>4th Sep 2022</p>
                            </div>
                            <div class="recent-news-card">
                                <a href="blog-details.html"><img src="{{asset('assets/images/inner-images/bds3.jpg')}}"
                                        alt="image"></a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
