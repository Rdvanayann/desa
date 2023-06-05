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
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://tasarim.phpturkiye.net/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="{{route('iletisim')}}">DESA AMBALAJ</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('web')}}">Anasayfa</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('hakkımızda')}}">Hakkımızda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('urunlerimiz')}}">Ürünlerimiz</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('iletisim')}}">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">{{$i1}}</h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5">{{$i2}}</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Daha Fazla...</a>
                </div>
            </div>
        </div>
    </header>

    </section>
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

    <!-- Contact Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500;">
                <h1 class="display-5 mb-3">İletişim</h1>
            </div>

            <div class="row g-5 justify-content-center">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary text-white d-flex flex-column justify-content-center h-100 p-3">
                        <h5 class="text-white">Telefon</h5>
                        <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>0533 487 63 82</p>
                        <h5 class="text-white">E-Mail</h5>
                        <p class="mb-5"><i class="fa fa-envelope me-3"></i>desaambalaj@contact.com</p>
                        <h5 class="text-white">Adres</h5>
                        <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>Oruç Reis Mah. Tekstilkent Cad. G1 Blok
                            No: 10 AB/3037 Esenler/İSTANBUL</p>
                        <h5 class="text-white">Sosyal Medya</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="                                                         "><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light rounded-circle me-1"
                                href="                                                         "><i
                                    class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">İsim</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Mail Adresiniz</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Konu</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                                        style="height: 200px"></textarea>
                                    <label for="message">Mesajınız</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <br>
    <br>
    <!-- Google Map Start -->
    <div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px; text-align: center;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.0019228344504!2d28.860950776483293!3d41.068950615686084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab001de7c8789%3A0x92a1fbf853b84c6!2sOru%C3%A7reis%2C%20Tekstilkent%20Cd%2C%2034235%20Esenler%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1684936340605!5m2!1str!2str"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Google Map End -->

    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">Copyright © 2023 - Tüm Hakları Saklıdır.</div>
        </div>
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
