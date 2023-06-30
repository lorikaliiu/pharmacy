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
        .feedbackshowmore {
            color: #00a79d;
            font-weight: bold;
        }

        .buttons-container {
            display: flex;
            justify-content: center;
            opacity: 0;
            animation: appear 1s ease-in-out forwards;
        }

        .buttons-container p {
            margin: 0 10px;
        }

        @media screen and (max-width: 768px) {
            .buttons-container {
                flex-direction: column;
                align-items: center;
            }

            .buttons-container p {
                margin: 10px 0;
            }
        }

        @keyframes appear {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .buttons-container p:nth-child(1) {
            animation-delay: 0.2s;
        }

        .buttons-container p:nth-child(2) {
            animation-delay: 0.4s;
        }

        .buttons-container p:nth-child(3) {
            animation-delay: 0.6s;
        }

        .btn-primary {
            border-radius: 8px !important;
            background: black!important;
            border-color: black !important;
            color: white;
        }

        .btn.btn-primary:hover {
            color: white !important;
        }
        .colormodal{
            color:black !important;
        }
    </style>
    <div class="site-wrap">

        @include('layouts.navbar')

        <div class="site-blocks-cover" style="background-image: url('images/health2.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto order-lg-2 align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h2 class="sub-title">Wirksame Medizin, täglich neue Medizin</h2>
                            <h1>Willkommen zu Apotheke Frutigen</h1>
                            <div class="buttons-container">
                                <p>
                                    <a href="{{ route('shop') }}" class="btn btn-primary px-5 py-3">Produkte</a>
                                </p>
                            </div>
                            <div class="buttons-container d-sm-none d-block ">
                                <button type="button" class="btn btn-primary px-5 py-3" data-toggle="modal"
                                    data-target="#kategoriModal">Kategotie</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row align-items-stretch section-overlap">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap  h-100">
                            <img width="100%" height="100%"  src="{{ asset('images/0.png') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap h-100">
                            <img width="100%" height="100%"  src="{{ asset('images/1.png') }}">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap  h-100">
                            <img width="100%" height="100%"  src="{{ asset('images/2.png') }}">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Beliebte Produkte</h2>
                    </div>
                </div>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-4 text-center item mb-4">
                            <a href="{{ route('shopsingle', ['id' => $product->id]) }}">
                                <img class="productsallpublished" src="{{ asset($product->img) }}"
                                    alt="{{ $product->title }}">
                            </a>
                            <p class="category">
                                Category: {{ $product->category->title ?? 'N/A' }}
                            </p>
                            <h3 class="product-title"><a href="#">{{ Ucfirst($product->title) }}</a></h3>
                            <p class="price">
                                Price: ${{ $product->price }}
                            </p>
                            <p class="product-detail">
                                {{ strlen($product->detail) > 100 ? substr($product->detail, 0, 100) . '...' : $product->detail }}
                            </p>
                            <div>
                                <a style="color:#3C486B" href="{{ route('shopsingle', ['id' => $product->id]) }}">Zeig
                                    mehr</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="{{ route('shop') }}" class="btn btn-primary px-4 py-3">Alle Produkte anzeigen</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="title-section text-center col-12">
                        <h2 class="text-uppercase">Testimonials</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 block-3 products-wrap">
                        <div class="nonloop-block-3 no-direction owl-carousel">

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_1.webp" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto
                                        eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;
                                    </p>
                                </blockquote>

                                <p>&mdash; Kelly Holmes</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_2.webp" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Rebecca Morando</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_3.webp" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Lucas Gallone</p>
                            </div>

                            <div class="testimony">
                                <blockquote>
                                    <img src="images/person_4.webp" alt="Image"
                                        class="img-fluid w-25 mb-4 rounded-circle">
                                    <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis
                                        voluptatem consectetur quam tempore
                                        obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur
                                        ducimus. Minus ratione sit quaerat
                                        unde.&rdquo;</p>
                                </blockquote>

                                <p>&mdash; Andrew Neel</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="" style="background-image: url('images/pills.webp'); height:100%; background-repeat:no-repeat;background-size:cover;">
            <div>
                <img src='images/coverno.webp' alt="virus" style="width:100%;">
            </div>
        </div>
        @include('layouts.footer')
        <!-- Modal -->
        <div class="modal fade" id="kategoriModal" tabindex="-1" role="dialog"
            aria-labelledby="kategoriModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="height:70vh;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kategoriModalLabel">Produkt hinzufügen</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <ul class="">
                            <li class="has-children">
                                <a class="colormodal">Dienstleistungen</a>
                                <ul class="dropdown ">
                                    <li><a class="colormodal" href="#">Gesundheitsberatung</a></li>
                                    <li class="has-children">
                                        <a class="colormodal" href="#">Medizinisch Dienstleistungen</a>
                                        <ul class="dropdown">
                                            <li><a class="colormodal" href="#">+</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="colormodal" href="#">Impfungen</a>
                                        <ul class="dropdown">
                                            <li><a class="colormodal" href="#">+</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="colormodal" href="#">Checks && Messungen</a>
                                        <ul class="dropdown">
                                            <li><a class="colormodal" href="#">+</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="colormodal" href="#">Hauslieferdienst</a></li>
                                    <li><a class="colormodal" href="#">Herstellung v. Medikamenten</a></li>
                                    <li><a class="colormodal" href="#">Verblisterung v. Medikamenten</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a class="colormodal" >Aktuelles</a>
                                <ul class="dropdown">
                                    <li><a class="colormodal" href="{{ route('news') }}?selected=Aktuelle Aktionen">Aktuelle Aktionen</a>
                                    </li>
                                    <li class="has-children">
                                        <a class="colormodal" href="{{ route('news') }}?selected=Corona Pandemie">Corona Pandemie</a>
                                        <ul class="dropdown">
                                            @foreach ($coronaNews as $news)
                                                <li><a class="colormodal"
                                                        href="{{ route('news', ['selected' => $news->id]) }}">{{ $news->title }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a class="colormodal">Unser Angebot</a>
                                <ul class="dropdown">
                                    <li class="has-children">
                                        <a class="colormodal" href="#">Naturheilkunde</a>
                                        <ul class="dropdown">
                                            <li><a class="colormodal" href="#">+</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="colormodal" href="#">Hauspezialitätens</a></li>
                                    <li><a class="colormodal" href="#">Kosmetik</a></li>
                                    <li><a class="colormodal" href="#">Orlochstehen</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a class="colormodal">Ratgeber</a>
                                <ul class="dropdown">
                                    <li><a class="colormodal" href="{{ route('ratgeber') }}?selected=Gesundheit">Gesundheit</a></li>
                                    <li><a class="colormodal" href="{{ route('ratgeber') }}?selected=Schönheit">Schönheit</a></li>
                                    <li><a class="colormodal" href="{{ route('ratgeber') }}?selected=Natur">Natur &
                                            Komplementär</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a class="colormodal">Über uns</a>
                                <ul class="dropdown">
                                    <li><a class="colormodal" href="{{ route('about') }}?selected=Geschichte">Geschichte</a></li>
                                    <li><a class="colormodal" href="{{ route('about') }}?selected=team">Team</a></li>
                                    <li><a class="colormodal" href="{{ route('about') }}?selected=Job">Job & Karriere</a></li>
                                </ul>
                            </li>
                            <li><a class="colormodal" href="{{ route('contact') }}">Kontakt</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <script>
            function Search() {
                document.querySelector('.site-mobile-menu').style.display = 'none';

            }
        </script>
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
