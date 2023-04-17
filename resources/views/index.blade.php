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
            justify-content: space-between;
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
    </style>
    <div class="site-wrap">

        @include('layouts.navbar')

        <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
                        <div class="site-block-cover-content text-center">
                            <h2 class="sub-title">Wirksame Medizin, täglich neue Medizin</h2>
                            <h1>Willkommen zu Apotheke Frutigen</h1>
                            <div class="buttons-container">
                                <p>
                                    <a href="{{ route('shop') }}" class="btn btn-primary px-5 py-3">Produkte</a>
                                </p>
                                <p>
                                    <a href="{{ route('news') }}" class="btn btn-primary px-5 py-3">Sie möchten
                                        Neuigkeiten lesen</a>
                                </p>
                                <p>
                                    <a href="{{ route('contact') }}" class="btn btn-primary px-5 py-3">Kontaktiere
                                        uns</a>
                                </p>
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
                        <div class="banner-wrap bg-primary h-100">
                            <a href="#" class="h-100">
                                <h5>Free <br> Shipping</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap h-100">
                            <a href="#" class="h-100">
                                <h5>Season <br> Sale 50% Off</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="banner-wrap bg-warning h-100">
                            <a href="#" class="h-100">
                                <h5>Buy <br> A Gift Card</h5>
                                <p>
                                    Amet sit amet dolor
                                    <strong>Lorem, ipsum dolor sit amet consectetur adipisicing.</strong>
                                </p>
                            </a>
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
                                <a class="feedbackshowmore"
                                    href="{{ route('shopsingle', ['id' => $product->id]) }}">Zeig
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
        {{-- <div>
            <div>
                <div class="row g-0">
                    @foreach ($news as $item)
                    <div class="col-md-4 text-center">
                        <div class="p-4">
                            <div>
                                <img src="{{ asset($item->img) }}"
                                alt="{{ $item->title }}" style="width:100%;">
                            </div>
                            <div>
                                <h4>{{ $item->title }}</h4>
                            </div>
                            <div>
                                <p style="font-size: 13px">
                                    {{ strlen( $item->content) > 100 ? substr( $item->content, 0, 100) . '...' :  $item->content }}</p>
                            </div>
                            <div class="">
                                <span style="color:black;">{{ $item->author }}</span>
                            </div>
                            <div>
                                <a href="{{ route('news', ['id' => $item->id]) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> --}}


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
                                    <img src="images/person_1.jpg" alt="Image"
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
                                    <img src="images/person_2.jpg" alt="Image"
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
                                    <img src="images/person_3.jpg" alt="Image"
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
                                    <img src="images/person_4.jpg" alt="Image"
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

        <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_3.jpg');">
            <div class="container">
                <div class="row align-items-stretch">
                    @foreach ($news as $item)
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <a href="{{ route('news', ['id' => $item->id]) }}" class="banner-1 h-100 d-flex"
                                style="background-image: url('{{ asset($item->img) }}');">
                                <div class="banner-1-inner align-self-center">
                                    <h4>{{ $item->title }}</h4>
                                    <p style="font-size: 13px">
                                        {{ strlen($item->content) > 100 ? substr($item->content, 0, 100) . '...' : $item->content }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        @include('layouts.footer')
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
