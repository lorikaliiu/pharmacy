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
  </style>
    @include('layouts.navbar')
    <div class="site-wrap">
        <div class="site-section">
            <div class="bg-light py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span
                                class="mx-2 mb-0">/</span> <a href="{{ route('shop') }}">Produkte</a> <span
                                class="mx-2 mb-0">/</span> <strong class="text-black">{{ Ucfirst($title) }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mr-auto">
                        <div class="border text-center">
                            <img src="{{ asset($img) }}" alt="{{ $title }}" class="img-fluid p-5">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="text-black">{{ Ucfirst($title) }}</h2>
                        <p>{{ $detail }}.</p>
                        <p><strong class="text-primary h4"> {{ $price }}CHF</strong></p>
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
