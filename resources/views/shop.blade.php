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

        .site-section {
            margin: 50px 0;
        }

        .bg-light {
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .feedbackshowmore{
           color: #3C486B !important
        }
    </style>
    @php
        $parameters = request()->input('cat_id');
    @endphp
    @include('layouts.navbar')
    <div class="site-wrap">
        <div class="site-section">
            <div class="bg-light py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span
                                class="mx-2 mb-0">/</span> <strong class="text-black">Produkte</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if ($parameters)
                    <div class="row">
                        @foreach ($products->where('cat_id', $parameters) as $product)
                            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                                <a href="{{ route('shopsingle', ['id' => $product->id]) }}">
                                    <img class="productsallpublished" src="{{ asset($product->img) }}"
                                        alt="{{ $product->title }}">
                                </a>
                                <p class="price">
                                    Category: {{ $product->category->title ?? "Don't have" }}
                                </p>
                                <h3 class="text-dark">
                                    <a href="#">{{ Ucfirst($product->title) }}</a>
                                </h3>
                                <p class="price">
                                    Price: {{ $product->price }} CHF
                                </p>
                                <p>{{ strlen( $product->detail) > 100 ? substr( $product->detail, 0, 100) . '...' :  $product->detail }}</p>
                                <div>
                                    <a class="feedbackshowmore"
                                        href="{{ route('shopsingle', ['id' => $product->id]) }}">Zeig mehr</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-6 col-lg-4 text-center item mb-4">
                                <a href="{{ route('shopsingle', ['id' => $product->id]) }}">
                                    <img class="productsallpublished" src="{{ asset($product->img) }}"
                                        alt="{{ $product->title }}">
                                </a>
                                <p class="price">
                                    Category: {{ $product->category->title ?? "Don't have" }}
                                </p>
                                <h3 class="text-dark">
                                    <a href="#">{{ Ucfirst($product->title) }}</a>
                                </h3>
                                <p class="price">
                                    Price: {{ $product->price }}CHF
                                </p>
                                <p>{{ strlen( $product->detail) > 100 ? substr( $product->detail, 0, 100) . '...' :  $product->detail }}</p>
                                <div>
                                    <a class="feedbackshowmore"
                                        href="{{ route('shopsingle', ['id' => $product->id]) }}">Zeig mehr</a>
                                </div>
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

        <div class="" style="background-image: url('images/pills.jpg'); height:100%; background-repeat:no-repeat;background-size:cover;">
            <div>
                <img src='images/coverno.png' alt="virus" style="width:100%;">
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
