<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Desa Ambalaj</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="https://tasarim.phpturkiye.net/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://tasarim.phpturkiye.net/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="{{route('urunlerimiz')}}">DESA AMBALAJ</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('web')}}">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('hakkımızda')}}">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('urunlerimiz')}}">Ürünlerimiz</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('iletisim')}}">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">{{$u1}}</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">{{$u2}}</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Daha Fazla...</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">Hizmetinizdeyiz</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Hızlı Teslimat</h3>
                            <p class="text-muted mb-0">En Kısa Sürede Teslim Ediyoruz.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Güvenli Alışveriş</h3>
                            <p class="text-muted mb-0">Güvenli Alışveriş Yapmanızı Sağlıyoruz.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">En Uygun Fiyat</h3>
                            <p class="text-muted mb-0">Uygun Fiyat Seçeneği Sağlıyoruz.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Kalite</h3>
                            <p class="text-muted mb-0">Sizin İçin En İyi Kalitede Üretiyoruz.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <h2 class="text-center mt-0">Ürünlerimiz</h2>
        <div class="text-center ml-5" id="urunlerimiz">
            <div class="container-fluid p-5">
                <div class="row no-gutters">

                    @foreach ($product as $item)
                    <div class="col-lg-3 col-sm-6">
                        <a class="portfolio-box" href="{{$item->id}}">
                            <img class="img-fluid" width="450px" height="200px" src="/img/YumusakSapliPoset.jpg" alt="" />
                            <div class="portfolio-box-caption p-2">
                                <div class="project-category">Category</div>
                                <div class="project-name">{{$item->name}}</div>
                                <small class="w-50 text-center py-2">
                                        <a class="text-body" href="https://wa.me/+905368516772" target="_blank" ><i class="fa fa-shopping-bag text-primary me-2"></i>₺{{$item->price}}</a>
                                </small>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Call to action-->

        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">İletişim</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Oruç Reis Mahallesi. Tekstilkent Caddesi. G1 Blok No: 10 AB/3037</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>0511 111 11 11</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:desaambalaj@contact.com">desaambalaj@contact.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2023 - Tüm Hakları Saklıdır.</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="https://tasarim.phpturkiye.net/js/scripts.js"></script>
    </body>
</html>
