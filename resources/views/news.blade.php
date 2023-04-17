<!DOCTYPE html>
<html lang="en">

<head>
    <title>Apotheke Frutigen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <style>
        .site-section {
            margin: 50px 0;
        }

        .bg-light {
            padding: 10px 0;
            margin-bottom: 20px;
        }

        .card-img-top {
            max-height: 300px;
            object-fit: cover;
        }

        .news-img {
            max-height: 200px;
            object-fit: cover;
        }

        .news-image {
            width: 300px;
            height: 200px;
        }
    </style>
    @include('layouts.navbar')
    <div class="site-wrap">
        <div class="site-section">
            <div class="bg-light py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span
                                class="mx-2 mb-0">/</span> <strong class="text-black">Nachricht</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div>
                    <div>
                        <div>
                            <h1>{{ $title_latest }}</h1>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7">
                                <div>
                                    <img src="{{ asset($img_latest) }}" alt="{{ $title_latest }}" style="width:100%;">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="footer-heading mb-2">Kontaktinformation</h4>
                                <ul class="list-unstyled">
                                    <li class="address">Apotheke Frutigen
                                        Musaab Kassam
                                        Obere Bahnhofstrasse 5
                                        3714 Frutigen</li>
                                    <li class="phone">Telefon : +41 33 671 12 65</li>
                                    <li class="phone">Fax : +41 33 535 41 51</li>
                                    <li class="email"> info@apotheke-frutigen.ch</li>
                                </ul>
                                <hr>
                                <h4 class="footer-heading mb-2">Öffnungszeiten:</h4>
                                <ul>
                                    <li>Montag: 08:30–12:00 / 13:30–18:00</li>
                                    <li>Dienstag: 08:30–12:00 / 13:30–18:00</li>
                                    <li>Mittwoch: 08:30–12:00</li>
                                    <li>Donnerstag: 08:30–12:00 / 13:30–18:00</li>
                                    <li>Freitag: 08:30–12:00 / 13:30–18:00</li>
                                    <li>Samstag: 08:30–14:00</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div>
                                <h2>{{ $title_latest }}</h2>
                            </div>
                            <div>
                                <p>{{ $content_latest }}.</p>
                            </div>
                            <div>
                                <a href="{{ $link_latest }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <hr style="border-top: 3px solid black">
                </div>
                <div>
                    <div>
                        <div class="row g-0">
                            @foreach ($news as $item)
                                <div class="col-md-4 text-center">
                                    <div class="p-4">
                                        <div>
                                            <img src="{{ asset($item->img) }}" alt="{{ $item->title }}"
                                                class="news-image">
                                        </div>
                                        <div>
                                            <h4>{{ $item->title }}</h4>
                                        </div>
                                        <div>
                                            <p style="font-size: 13px">
                                                {{ strlen($item->content) > 100 ? substr($item->content, 0, 100) . '...' : $item->content }}
                                            </p>
                                        </div>
                                        <div>
                                            <a href="{{ $item->link }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_3.jpg');">
            <div class="container">
                <div class="row align-items-stretch">
                    @foreach ($products as $item)
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="{{ route('shopsingle', ['id' => $item->id]) }}" class="banner-1 h-100 d-flex"
                            style="background-image: url('{{ asset($item->img) }}');">
                            <div class="banner-1-inner align-self-center">
                                <h2>{{ $item->title }}</h2>
                                {{-- <p>{{ strlen( $item->detail) > 100 ? substr( $item->detail, 0, 100) . '...' :  $item->detail }}</p> --}}
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
