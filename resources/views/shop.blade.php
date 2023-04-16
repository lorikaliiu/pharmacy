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
        .page-link {
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .site-block-27 {
            display: flex;
            text-align: center;
            justify-content: center;
        }
    </style>
    <div class="site-wrap">

        @include('layouts.navbar')

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Store</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
{{-- 
                <div class="row" style="align-items: center">
                    <div class="col-lg-6">
                        <form action="{{ route('shop') }}" method="get">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Nach Preis filtern</h3>
                            <div id="slider-range" class="border-primary"></div>
                            <input type="text" name="price_query" id="amount"
                                class="form-control border-0 pl-0 bg-white" />

                    </div>
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-secondary btn-md  px-4">Suchen</button>
                    </div>
                    </form>
                </div> --}}
                @php
                $parameters = request()->input('cat_id');
            @endphp
            
            @if ($parameters)
                <div class="row">
                    @foreach ($products->where('cat_id', $parameters) as $product)
                        <div class="col-sm-6 col-lg-4 text-center item mb-4">
                            <a href="{{ route('shopsingle', ['id' => $product->id]) }}">
                                <img class="productsallpublished" src="{{ asset($product->img) }}" alt="{{ $product->title }}">
                            </a>
                            <p class="price">
                                {{ $product->category->title ?? "Don't have" }}
                            </p>
                            <h3 class="text-dark">
                                <a href="#">{{Ucfirst( $product->title) }}</a>
                            </h3>
                            <p class="price">
                                {{ $product->price }}$
                            </p>
                            <div>
                                <a class="feedbackshowmore" href="{{ route('shopsingle', ['id' => $product->id]) }}">Zeig mehr</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-lg-4 text-center item mb-4">
                            <a href="{{ route('shopsingle', ['id' => $product->id]) }}">
                                <img class="productsallpublished" src="{{ asset($product->img) }}" alt="{{ $product->title }}">
                            </a>
                            <p class="price">
                                {{ $product->category->title ?? "Don't have" }}
                            </p>
                            <h3 class="text-dark">
                                <a href="#">{{ $product->title }}</a>
                            </h3>
                            <p class="price">
                                {{ $product->price }}$
                            </p>
                        </div>
                    @endforeach
                </div>
            @endif
            
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section bg-secondary bg-image" style="background-image: url('images/bg_2.jpg');">
            <div class="container">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('images/bg_1.jpg');">
                            <div class="banner-1-inner align-self-center">
                                <h2>Pharma Products</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <a href="#" class="banner-1 h-100 d-flex"
                            style="background-image: url('images/bg_2.jpg');">
                            <div class="banner-1-inner ml-auto  align-self-center">
                                <h2>Rated by Experts</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem
                                    odio voluptatem.
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')
    </div>
    {{-- <script>
        $(function() {
            var minPrice = 0; // Minimum price
            var maxPrice = 1000; // Maximum price

            $("#slider-range").slider({
                range: true,
                min: minPrice,
                max: maxPrice,
                values: [minPrice, maxPrice],
                slide: function(event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });

            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider(
                "values", 1));
        });
    </script> --}}
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
