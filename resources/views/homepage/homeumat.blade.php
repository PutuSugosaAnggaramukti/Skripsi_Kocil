<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gereja Evangelis Kalimantan Sinta Kuala Kapuas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/images/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
 <!-- bootstrap cdn  -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
       <!-- fullcalendar css  -->
       <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
        <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
    rel="stylesheet"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.min.js" integrity="sha512-FbWDiO6LEOsPMMxeEvwrJPNzc0cinzzC0cB/+I2NFlfBPFlZJ3JHSYJBtdK7PhMn0VQlCY1qxflEG+rplMwGUg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.js" integrity="sha512-mDHahYvyhRtp6zBGslYxaLlAiINPDDEoHDD7nDsHoLtua4To71lDTHjDL1bCoAE/Wq/I+7ONeFMpgr62i5yUzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.all.min.js" integrity="sha512-ziDG00v9lDjgmzxhvyX5iztPHpSryN/Ct/TAMPmMmS2O3T1hFPRdrzVCSvwnbPbFNie7Yg5mF7NUSSp5smu7RA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.10.8/sweetalert2.css" integrity="sha512-n1PBkhxQLVIma0hnm731gu/40gByOeBjlm5Z/PgwNxhJnyW1wYG8v7gPJDT6jpk0cMHfL8vUGUVjz3t4gXyZYQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    @guest
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/login" class="nav-item nav-link">Login</a>
                        @else
                       @if (Auth::user()->isUmat == 1)
                       <a href="/" class="nav-item nav-link active">Home</a>
                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hasil Validasi
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/validasi">Validasi Ibadah Syukur</a>
                                <a class="dropdown-item" href="/validasibaptis">Validasi Baptis</a>
                                <a class="dropdown-item" href="/validasikatekisasi">Validasi Katekisasi</a>
                                <a class="dropdown-item" href="/validasinikah">Validasi Pemberkatan Nikah</a>
                            </div>
                        </li>
                        <a href="/pengumuman" class="nav-item nav-link">Pengumuman</a>
                        <a href="/jadwal" class="nav-item nav-link">Daftar Pendeta</a>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pendaftaran
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/ibadah">Daftar Ibadah Syukur</a>
                                <a class="dropdown-item" href="/baptis">Daftar Baptis</a>
                                <a class="dropdown-item" href="/katekisasi">Daftar Katekisasi</a>
                                <a class="dropdown-item" href="/nikah">Pemberkatan Nikah</a>
                            </div>
                        </li>
                        <a href="/profil" class="nav-item nav-link">Profil</a>
                        <a href="{{ route('logout') }}" class="nav-item nav-link"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>  
  </div>
                        <!-- Example single danger button -->
                 
                        <!-- <a href="/ibadah" class="btn btn-primary py-2 px-4">Daftar Ibadah Syukur</a> -->
                    
                    @endif
                    @if (Auth::user()->isAdmin == 1)
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/halamanadmin" class="nav-item nav-link">Dashboard Admin</a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    @endif

                    @if (Auth::user()->isKetling == 1)
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/halamanketualingkungan" class="nav-item nav-link">Dashboard Ketua Lingkungan</a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    @endif
                    @if (Auth::user()->isPendeta == 1)
                    <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/jadwal" class="nav-item nav-link">Jadwal Ibadah</a>
                        <div class="dropdown">
                            <a href="" class="nav-item nav-link">Informasi</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/katekisasi">Daftar Peserta Katekisasi</a></li>
                                <li><a class="dropdown-item" href="/baptis">Daftar Peserta Baptis</a></li>
                                <li><a class="dropdown-item" href="/nikah">Daftar Umat Pemberkatan Nikah</a></li>
                            </ul>
                        </div>
                        <a href="/validasi" class="nav-item nav-link">Validasi Pendaftaran</a>
                        <a href="/pengumuman" class="nav-item nav-link">Pengumuman</a>
                        <a href="/persembahan" class="nav-item nav-link">Jumlah Persembahan</a>
                        <a href="/profil" class="nav-item nav-link">Profil</a>
                        <a href="{{ route('logout') }}" class="nav-item nav-link"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>  
                        
                    @endif
                    @endguest 

  
    </ul>
   
  </div>
</nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Selamat Datang<br></h1>
                            <p class="display-5 text-white animated slideInLeft">Website Pendaftaran Layanan GKE Sinta Kuala Kapuas</p>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Terdapat Layanan Seperti</p>
                            <p class="text-white animated slideInLeft mb-3 pb-1">Ibadah Syukur, Baptis Anak, Pemberkatan Nikah dan Katekisasi</p>
                            <div class="d-grid">
                            <a href="/form-ibadah-syukur"><button class="btn btn-warning" type="button" data-mdb-ripple-init>Pendaftaran Ibadah Syukur</button></a>
                            </div>
                        </div>
                        <!-- <div id="calendar"> -->
                         
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img src="assets/images/logo.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->

        <div class="container-xxl py-5">
        <h5 class="section-title ff-secondary text-start text-primary">Informasi Jadwal</h5>
            <div class="container">
               <div class="row row-cols-1 row-cols-md-2 g-4">
               <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Ibadah Syukur</h5>
                        <p class="card-text">Silahkan cek jadwal ibadah syukur dengan menekan tombol cek jadwal</p>
                        <a href="/ibadah" class="btn btn-primary">Cek Jadwal</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Baptis</h5>
                        <p class="card-text">Silahkan cek jadwal baptis dengan menekan tombol cek jadwal</p>
                        <a href="/baptis" class="btn btn-primary">Cek Jadwal</a>
                    </div>
                    </div>
                </div>
                 <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Katekisasi</h5>
                        <p class="card-text">Silahkan cek jadwal katekisasi dengan menekan tombol cek jadwal</p>
                        <a href="/katekisasi" class="btn btn-primary">Cek Jadwal</a>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Pemberkatan Nikah</h5>
                        <p class="card-text">Silahkan cek jadwal pemberkatan nikah dengan menekan tombol cek jadwal</p>
                        <a href="/nikah" class="btn btn-primary">Cek Jadwal</a>
                    </div>
                    </div>
                </div>
               </div>
               </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="assets/images/gereja1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="assets/images/gereja2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="assets/images/kegiatan.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="assets/images/kegiatan2.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Informasi GKE</h5>
                        <h1 class="mb-4">Gereja Kalimantan Evangelis Sinta Kuala Kapuas</h1>
                        <p class="mb-4">Gereja Kalimantan Evangelis (disingkat GKE) atau Gereja Evangelikal di Kalimantan (Bahasa Inggris) (Kalimantan Evangelical Church) ialah sebuah kelompok gereja Kristen Protestan di Indonesia yang didirikan pada tanggal 10 April 1839, awalnya dengan nama Gereja Dayak Evangelis (GDE). Gereja ini melakukan pelayanan iman kepada suku-suku di pulau Kalimantan yaitu suku-suku yang termasuk ke dalam rumpun suku Dayak, meski begitu GKE tidak tertutup bagi anggota non-Dayak. Gereja ini berkantor pusat di kota Banjarmasin, provinsi Kalimantan Selatan. Indonesia</p>
                        <div class="row g-4 mb-4">
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. S.Parman No.88, Selat Hilir, Kec. Selat, Kab. Kapuas, Kalimantan Tengah</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(0513) 21123/21650</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                    <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Lokasi Gereja</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.2819977247077!2d114.38448717405511!3d-3.018714196957212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de46ef402525567%3A0x6fc71aeb04fc1d85!2sGereja%20SINTA!5e0!3m2!1sid!2sid!4v1697425343748!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
           
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <div class="modal modalUser" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Umat</h5>
        <button type="button" class="btn-close closes" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Lengkap</th>
    </tr>
     </thead>
    <tbody>
        <tr>
        <th scope="row" class="idUser"></th>
        <td class="namaUser text-capitalize"></td>
        </tr>
    </tbody>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary closes">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
    
            document.addEventListener('DOMContentLoaded', function () {
                $('#nama').hide();
                $('#tanggal').hide();
                // function tampilJadwal() {
                   
                // }
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    eventClick: function(eventObj) {
                    if (eventObj.url) {
                        alert(
                        'Clicked ' + eventObj.title + '.\n' +
                        'Will open ' + eventObj.url + ' in a new tab'
                        );

                        window.open(eventObj.url);

                        return false; // prevents browser from following link in current tab.
                    } else {
                        $('#nama').show();
                        $('#tanggal').show();
                        $('#nama').text('Syukur: '+eventObj.event.title);
                    }
                    },
                    initialView: 'dayGridMonth',
                   events: [ 
                    @foreach($ibadah as $item)
                    {
                        title: 'Ibadah {{$item->nama_kk}}, {{$item->jam}} ',
                        start: '{{$item->tanggal}}'
                    },
                    @endforeach
                    ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
                });
    
                calendar.render();
            });
        </script>

        <script>
            $(document).ready(function(){
                $('.search').click(function(){
                    const name = $('#namesearch').val()
                    $.get("/api/getId", { name: name }, function(data, status){
                    if(data.users.length == 0){
                        Swal.fire({
                        icon: 'warning',
                        title: 'Data Kosong',
                        text: 'Tidak ada data yang ditemukan.',
                    });
                    } else {
                        $('.modalUser').show()
                        $('.idUser').text(data.users[0].id)
                        $('.namaUser').text(data.users[0].name)
                        //alert("Data: " + data.users[0].name + "\nStatus: " + status);
                    }             
                });
                });

                $('.closes').click(function(){
                    $('.modalUser').hide()
                })
            })
        </script>
</body>

</html>
