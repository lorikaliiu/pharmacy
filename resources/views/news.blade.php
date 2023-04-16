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

  <div class="site-wrap">


    @include('layouts.navbar')

    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                @foreach ($news as $item)
                  <div class="card-header">
                      {{ $item->title }}
                  </div>
                  <div class="card-body">
                      <img src="{{ asset($item->image) }}" class="img-fluid mb-3" alt="{{ $item->title }}">
                      <p class="card-text">{{ $item->content }}</p>
                      <p class="card-text"><small class="text-muted">Written by {{ $item->author }}</small></p>
                  </div>
                  @endforeach
              </div>
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
