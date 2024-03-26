<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CINTA QURAN FOUNDATION</title>
    <link rel="shortcut icon" href="images/logo.png">
    <link href="vendor/bootstrap5_1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/icons/css/boxicons.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="vendor/owl-carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl-carousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .marquee-container {
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        .group-box {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .nyala {
            display: inline-block !important;
        }

        #search1,
        #search2 {
            display: none;
        }

        .btn-search1 {
            width: 30%;
            height: 40px;
            position: absolute;
            right: 160px;
            display: none;
            border-radius: 8px;
            border: 1px solid;
        }

        @media screen and (min-width: 480px) {
            .btn-search1 {
                ri
            }
        }

        @media screen and (min-width: 768px) {
            input#search1.btn-search1.nyala {
                display: none;
            }
        }

        .btn-search2 {
            position: absolute;
            right: 150px;
            width: 60%;
            height: 40px;
            border-radius: 8px;
        }

        .search-klick1 {
            display: none
        }

        @media screen and (max-width: 768px) {

            .btn-search2,
            .search-klick2 {
                display: none;
            }

            .btn-search2.nyala {
                display: none;
            }

            .btn-search1,
            .search-klick1 {
                display: inline-block;
            }
        }



        .filterItem {
            border: 1px solid;


        }

        .home .home-right {
            position: relative;

        }

        .home .carousel-indicators {
            position: absolute;
        }

        @media screen and (min-width: 1024px) {
            .home .carousel-indicators {
                position: absolute;
                right: 150px;
                /* Jarak dari tepi kanan */
                top: 50%;
                /* Posisi vertikal tengah */
                transform: translate(100%, 50%) rotate(90deg);
                /* Menggeser ke kanan 100% dan ke bawah 50% sebelum rotasi */
                transform-origin: top right;/
            }
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/img_logo_header.png" alt="" width="140">
                </a>
                <div>
                    <span onclick="searchSatu()" href="" class="search-klick1"><i
                            class='bx bx-search nav-link'></i></span>
                    <input type="text" class="btn-search1" id="search1">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class='bx bx-menu'></i>
                    </button>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">

                        <i type="button" class="text-reset bx bx-x" data-bs-dismiss="offcanvas" aria-label="Close"></i>
                    </div>
                    <script>
                        function searchSatu() {
                            console.info('check');
                            document.getElementById("search1").classList.toggle("nyala");
                        }

                        function searchDua() {
                            console.info('check2');
                            document.getElementById("search2").classList.toggle("nyala");
                        }
                    </script>

                    <div class="offcanvas-body">
                        <div class="navbar-nav justify-content-end flex-grow-1 space-link nav-button position-relative">
                            <a class="nav-link" href="#program">Program</a>
                            <a class="nav-link" href="#kajian">Kajian</a>
                            <a class="nav-link" href="#donasi">Donasi</a>
                            <a class="nav-link" href="#kemitraan">Kemitraan</a>
                            <a class="nav-link" href="#update">Update</a>
                            <a class="nav-link" href="#kontak">Kontak</a>
                            <span class="search-klick2" onclick="searchDua()"><i
                                    class='bx bx-search nav-link'></i></span>
                            <input type="text" id="search2" class="btn-search2">
                            <a class="nav-link btn-login btn btn-outline-primary text-primary rounded-pill padding-button "
                                href="/login">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="section-header home">
            <img src="images/bg-header-new.png" class="background-home"></img>
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 col-md-12 mb-5">
                        <h3 class="text-home">Dukung Program <br> Dakwah Syiar Qur'an <br> Project</h3>
                        <p class="text-deskripsi">Menumbuhkan motivasi agar masyarakat mencintai Alquran <br> dengan
                            program-program islami terbaik dan kreatif</p>
                        <button class="btn text-white rounded-pill d-flex align-items-center button-donasi"><span
                                class="text-donasi-sekarang">Donasi Sekarang</span>
                            <i class='bx bx-right-arrow-alt btn-icon ms-2'></i></button>
                        <div class="row kajian-section">
                            <div class="col-4">
                                <img src="images/ic_kajian.png" alt="" width="24" height="24">
                                <p class="text-kajian mt-2">Kajian Perkantoran</p>
                                <p class="number-kajian">+124</p>
                            </div>
                            <div class="col-4">
                                <img src="images/ic_mosque.png" alt="" width="24" height="24">
                                <p class="text-kajian mt-2">Majelis Cinta Quran</p>
                                <p class="number-kajian">+43</p>
                            </div>
                            <div class="col-4">
                                <img src="images/ic_online.png" alt="" width="24" height="24">
                                <p class="text-kajian mt-2">Kajian Online</p>
                                <p class="number-kajian">+92</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 home-right">
                        <div id="carouselExampleIndicato" class="carousel slide">
                            <div class="carousel-inner">
                                @foreach ($dataBanner as $key => $item)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <img src="{{ url('storage/' . $item->foto) }}" alt="" width="100%"
                                            style="object-fit: cover">
                                    </div>
                                @endforeach
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicato" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicato" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                        </div>
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicato" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicato" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicato" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        {{-- <div id="carouselHome" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/img_header.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/bg-ayolah.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/img_header.png') }}" class="d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselHome"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="donasi" id="donasi">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-8">
                        <h3 class="text-donasi">Donasi Pilihan </h3>
                        <p class="des-donasi">Pilih dan salurkan donasi melalui program-program kami yang berarti
                            bagi
                            sahabat Cinta quran.</p>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end gap-3 owl-nav">
                            <button class="btnprevnext owl-prev" type="button" role="presentation"><i
                                    class='bx bx-chevron-left'></i></button>
                            <button class="btnprevnext owl-next"type="button" role="presentation"><i
                                    class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>
                </div>
                <div class="kategori d-flex justify-content-between scroll-horizontal filter">
                    <div class="btn btn-primary txt-donasi filterItem active" onClick="filterSelection('semua')"><img
                            src="images/overview.png" alt="" width="24"> Semua Kategori</div>
                    <div class="btn btn-primary txt-donasi filterItem" onClick="filterSelection('kemanusiaan')"> <img
                            src="images/donasi.png" alt="" width="24">Kemanusiaan</div>
                    <div class="btn btn-primary txt-donasi filterItem" onClick="filterSelection('IBBQ')"><img
                            src="images/mosque.png" alt="" width="24"> IBBQ</div>
                    <div class="btn btn-primary txt-donasi filterItem" onClick="filterSelection('waqaf')"> <img
                            src="images/wakaf.png" alt="" width="24">Wakaf</div>
                    <div class="btn btn-primary txt-donasi"><img src="images/More.png" alt=""
                            width="24"> Lainnnya</div>
                </div>
                <style>
                    .donasis,
                    .kajians {
                        display: none;
                        transition: all 0.3s linear;
                    }

                    .donasis.show,
                    .kajians.show {
                        display: block;
                        transition: all 0.3s linear;
                    }

                    .owl-nav {
                        display: none;
                    }

                    .owl-theme .owl-dots .owl-dot span {
                        width: 50px;
                        height: 5px;
                        margin: 5px 7px;
                        background: #D6D6D6;
                        display: block;
                        -webkit-backface-visibility: visible;
                        transition: opacity .2s ease;
                        border-radius: 0px;
                    }

                    .owl-theme .owl-dots .owl-dot.active span {
                        background: #389ED9;
                    }
                </style>

                <div class="row mt-4">
                    @if (count($dataDonasi) > 1)
                        <div id="Carousel2" class="carousel slide testimoni-box" data-bs-ride="carousel">
                            <div class="donasi-item owl-carousel owl-theme">
                                @foreach ($dataDonasi as $item)
                                    <div class="item">
                                        <div class="{{ $item->kategori }} donasis">
                                            <div class="card-item mb-4 bungkus-donasi">
                                                <img src="{{ url('storage/' . $item->foto) }}">
                                                <div class="text">
                                                    <p>{{ $item->judul }}</p>
                                                    <div class="d-flex justify-content-between space-donasi">
                                                        <div>
                                                            <p class="txt-donasi2">Dana Terkumpul</p>
                                                            <p class="txt-harga">Rp {{ $item->dana_terkumpul }}</p>
                                                        </div>
                                                        <div>
                                                            <p class="txt-donasi2">Sisa Waktu</p>
                                                            <p class="txt-harga">{{ $item->sis_waktu }}</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <input type="range" name="volume" class="range-input" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if (count($dataDonasi) > 1)
                                <ol class="carousel-indicators">
                                    @for ($i = 0; $i < count($dataDonasi); $i++)
                                        <li data-target="#Carousel2" data-slide-to="{{ $i }}"
                                            class="{{ $i == 0 ? 'active' : '' }}"></li>
                                    @endfor
                                </ol>
                            @endif
                        </div>
                    @else
                        <div class="{{ $dataDonasi[0]->kategori }} donasis">
                            <div class="card-item mb-4">
                                <img src="{{ url('storage/' . $dataDonasi[0]->foto) }}">
                                <div class="text">
                                    <p>{{ $dataDonasi[0]->judul }}</p>
                                    <div class="d-flex justify-content-between space-donasi">
                                        <div>
                                            <p class="txt-donasi2">Dana Terkumpul</p>
                                            <p class="txt-harga">Rp {{ $dataDonasi[0]->dana_terkumpul }}</p>
                                        </div>
                                        <div>
                                            <p class="txt-donasi2">Sisa Waktu</p>
                                            <p class="txt-harga">{{ $dataDonasi[0]->sis_waktu }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="range" name="volume" class="range-input" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
        </section class="zakat">
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row">
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="d-flex justify-content-between gap-2">
                        <img src="images/img_zakat.png" alt="" width="117" class="img-zakat">
                        <div>
                            <p class="txt-zakat">Zakat 100%</p>
                            <p class="txt-zakat-ket">Tunaikan Zakat Anda melalui Program Zakat 100% Amanah.</p>
                            <p class="txt-more">Selengkapnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="d-flex justify-content-between gap-2">
                        <img src="images/img_barang.png" alt="" width="117" class="img-zakat">
                        <div>
                            <p class="txt-zakat">Barang Berkah</p>
                            <p class="txt-zakat-ket">Yuk berikan barang bekas yang masih layak pakai untuk sahabat
                                kita.</p>
                            <p class="txt-more">Selengkapnya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="d-flex justify-content-between gap-2">
                        <img src="images/img_box.png" alt="" width="117" class="img-zakat">
                        <div>
                            <p class="txt-zakat">Amazing Box</p>
                            <p class="txt-zakat-ket">Isi penuh Amazing Box selama 1 bulan, kembalikan kepada kami.</p>
                            <p class="txt-more">Selengkapnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="program" data-aos="fade-up" data-aos-delay="200" id="program">
            <img src="images/bg-program.png" class="background-program"></img>
            <div class="container con-absolute">
                <div class="row">
                    <div class="col-md-12 col-lg-8 col-12">
                        <h3 class="text-donasi">Program Pilihan </h3>
                        <p class="des-donasi">Program-program terbaik dari Cinta QuraN Foundation untuk Sahabt Cinta
                            Quran.</p>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end gap-3 owl-nav">
                            <button class="btnprevnext" type="button" role="presentation"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev"><i
                                    class='bx bx-chevron-left'></i></button>
                            <button class="btnprevnext "type="button" role="presentation"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next"><i
                                    class='bx bx-chevron-right'></i></button>
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-8">
                        <div class="program-item">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-inner">
                                    @foreach ($dataProgram as $key => $item)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ url('storage/' . $item->foto) }}" alt=""
                                                width="100%" style="object-fit: cover" height="420px">
                                            <div class="program-text">
                                                <p class="text-white judul-text">{{ $item->judul }}</p>
                                                <p class="text-white judul-des">{{ $item->deskripsi }}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="program-item">
                            <img src="images/img_program2.png" alt="" width="100%">
                            <div class="program-text">
                                <p class="text-white judul-text">Cinta Quran Call</p>
                                <p class="text-white judul-des">Cinta Quran Call merupakan layanan pendampingan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="program-item">
                            <img src="images/img_program3.png" alt="" width="100%">
                            <div class="program-text">
                                <p class="text-white judul-text">Kajian Perkantoran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="program-item">
                            <img src="images/img_program4.png" alt="" width="100%">
                            <div class="program-text">
                                <p class="text-white judul-text">Majelis Cinta Quran</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="program-item">
                            <img src="images/img_program5.png" alt="" width="100%">
                            <div class="program-text">
                                <p class="text-white judul-text">Cinta Quran TV</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kajian" id="kajian">
            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-kajian2 text-black text-center">Kajian Inspiratif</h3>
                <p class="des-kajian text-center">Program kajian inspiratif dari kami untuk menemani aktivitas Sahabat
                    Cinta Qur’an.</p>
                <div class="d-flex justify-content-between scroll-horizontal">
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px"
                        onclick="filterSelection2('berlangsung')">
                        <img src="images/overview.png" alt="" width="24">
                        Semua Kajian
                    </div>
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px"
                        onclick="filterSelection2('berlangsung')">
                        <img src="images/img_live.png" alt="" width="24">Berlangsung
                    </div>
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px"
                        onclick="filterSelection2('akan_datang')">
                        <img src="images/img_calendar.png" alt="" width="24">
                        Akan Datang
                    </div>
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px"
                        onclick="filterSelection2('perkantoran')">
                        <img src="images/img_office.png" alt="" width="24">Perkantoran
                    </div>
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px"
                        onclick="filterSelection2('online')">
                        <img src="images/img_online.png" alt="" width="24">
                        Online
                    </div>
                    <div class="btn  kajian-inspiratif mr-2" style="border: #636363 1px solid; border-radius:100px">
                        <img src="images/More.png" alt="" width="24">
                        Lainnnya
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <?php
                        // Buat array kosong untuk menyimpan kategori yang sudah ditampilkan
                        $kategoriDitampilkan = [];
                        ?>
                        @foreach ($dataKajian as $key => $item)
                            <?php
                             // Periksa apakah kategori saat ini sudah ditampilkan
                            if (!in_array($item->kategori, $kategoriDitampilkan)):
                             // Jika belum, tampilkan item dan tambahkan kategori ke dalam array $kategoriDitampilkan
                                ?>
                            <div class="{{ $item->kategori }} kajians position-relative">
                                <img src="{{ url('storage/' . $item->foto) }}" alt="" width="100%"
                                    height="515px" style="object-fit: contain">
                                @if ($item->kategori == 'berlangsung')
                                    <div class="sedang-berlangsung d-flex align-content-center">
                                        <i class='bx bxs-color'></i>
                                        <span>Sedang Berlangsung</span>
                                    </div>
                                @endif
                            </div>
                            <?php
                    // Tambahkan kategori ke dalam array $kategoriDitampilkan
                    $kategoriDitampilkan[] = $item->kategori;
                endif;
                ?>
                        @endforeach
                        <div class="row mt-4">
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                            <div class="col-4">
                                <img src="images/img_kajian_dark.png" alt="" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="amazing" data-aos="fade-up" data-aos-delay="200" id="kemitraan">
            <img src="images/bg-ayolah.png" class="background-amazing"></img>
            <div class="container-fluid">
                <h3 class="text-kajian2 text-black text-center">Amazing Group</h3>
                <div class="marquee-container">
                    <marquee behavior="scroll" direction="right" loop="-1" scrollamount="10">
                        <div class="group-box">
                            <img src="images/img_amazing1.png" alt="">
                            <img src="images/img_amazing2.png" alt="">
                            <img src="images/img_amazing3.png" alt="">
                            <img src="images/img_amazing4.png" alt="">
                            <img src="images/img_amazing1.png" alt="">
                            <img src="images/img_amazing2.png" alt="">
                        </div>
                    </marquee>
                </div>

                <div class="marquee-container">
                    <marquee behavior="scroll" direction="left" loop="-1" scrollamount="10">
                        <div class="group-box">
                            <img src="images/img_amazing1.png" alt="">
                            <img src="images/img_amazing2.png" alt="">
                            <img src="images/img_amazing3.png" alt="">
                            <img src="images/img_amazing4.png" alt="">
                            <img src="images/img_amazing1.png" alt="">
                            <img src="images/img_amazing2.png" alt="">
                        </div>
                    </marquee>
                </div>
            </div>
        </section>
        <section class="ayo-gabung" id="update">
            <div class="container">
                <div class="ayo-gabung-text">
                    <p class="title-judul-gabung">Mari bergabung menjadi keluarga Cinta <br> Quran Foundation agar bisa
                        berbagi <br> dengan sesama</p>
                    <a href="#" class="button-ayo-gabung d-flex d-flex align-items-center"><span>Daftar Sekarang
                        </span><i class='bx bx-right-arrow-alt btn-icon ms-2'></i></a>
                </div>
            </div>
        </section>
        <footer id="kontak">
            <img src="images/bg-footer.png" class="background-footer"></img>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/img_logo_header.png" alt="" width="180">
                        <p class="text-footer mt-5">Cinta Quran Foundation adalah lembaga independen yang mendakwahkan
                            Alquran sebagai solusi dan inspirasi untuk negeri.</p>
                        <button class="btn text-white rounded-pill d-flex align-items-center button-donasi"><i
                                class='bx bx-right-arrow-alt btn-icon ms-2'></i><span
                                class="text-donasi-sekarang">Lihat Laporan CQ Foundation</span>
                        </button>
                    </div>
                    <div class="col-md-2">
                        <p class="text-footer-program">Program</p>
                        <p>Donasi</p>
                        <p>Kajian</p>
                        <p>Kemitraan</p>
                        <p>Inspirasi</p>
                    </div>
                    <div class="col-md-2">
                        <p>Volunteer</p>
                        <p>Tentang Kami</p>
                        <p>FAQ</p>
                        <p>Syarat & Ketentuan</p>
                        <p>Kebijakan Privasi</p>
                    </div>
                    <div class="col-md-3">
                        <table style=" border: none;">
                            <tr class="foo-text">
                                <td style="vertical-align: top; padding-right: 10px;"><img
                                        src="images/ic_location.png" alt="" width="24"></td>
                                <td style="vertical-align: top;">Jl. Parikesit Raya No.35-37
                                    Bantarjati, Bogor Utara,
                                    Kota Bogor 16153, Jawa Barat, Indonesia.</td>
                            </tr>
                            <tr class="foo-text">
                                <td style="vertical-align: top; padding-right: 10px;"><img src="images/ic_email.png"
                                        alt="" width="24"></td>
                                <td style="vertical-align: top;">info@cintaquran.or.id</td>
                            </tr>
                            <tr class="foo-text">
                                <td style="vertical-align: top;"><img src="images/ic_phone.png" alt=""
                                        width="24"></td>
                                <td style="vertical-align: top;">(0251) 85 717 62</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button class="btn text-white rounded-pill d-flex align-items-center button-donasi"
                                        style="background-color: #00C062"><span class="text-donasi-sekarang">Hubungi
                                            Kami</span>
                                        <img src="images/wa.png" alt="" width="15px"></button>
                                </td>
                            </tr>
                        </table>
                        <p class="mt-2">Ikuti Kami di</p>
                        <img src="images/ic_facebook.png" alt="" width="24">
                        <img src="images/ic_youtube.png" alt="" width="24">
                        <img src="images/ic_instagram.png" alt="" width="24">
                        <img src="images/ic_linkedin.png" alt="" width="24">

                    </div>
                </div>
                <p class="copyright-text">© Copyright CintaQuran® Foundation All Rights Reserved.</p>
            </div>
        </footer>
    </main>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script src="vendor/bootstrap5_1/js/bootstrap.bundle.min.js"></script>

    <script src="vendor/jquery.min.js"></script>
    <script src="{{ asset('vendor/owl-carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/owl-carousel/script.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
