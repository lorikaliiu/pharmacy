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
        .btn-primary {
            border-radius: 8px !important;
            background: black !important;
            border-color: black !important;
            color: white;
        }

        .btn.btn-primary:hover {
            color: white !important;
        }
    </style>
    <div class="site-wrap">

        @include('layouts.navbar')

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="{{ route('home') }}">Home</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">Contact</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-5 text-black">In Kontakt kommen</h2>
                    </div>
                    @if (Illuminate\Support\Facades\Session::has('success'))
                        <span style="color:green; margin-bottom: 30px; margin-left: 15px">
                            {{ Illuminate\Support\Facades\Session::get('success') }}
                        </span>
                    @endif
                    <div class="col-md-12">

                        <form action="{{ route('Contact') }}" method="post">
                            @csrf
                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">Vorname<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">Nachname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_email" class="text-black">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_subject" class="text-black">Subject </label>
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_message" class="text-black"> </label>
                                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block"
                                            value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--Google map-->
        <!--Google map-->
        <div id="map-container-google-2" class="z-depth-1-half map-container">
            <iframe style="height:100hv !important; width:100%;"<iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2741.9164691638225!2d7.644839076812119!3d46.58888865769882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478faa1f639467a9%3A0xb8bfc26914ffe26e!2sApotheke%20Frutigen!5e0!3m2!1sen!2sus!4v1681818211463!5m2!1sen!2sus"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!--Google Maps-->

    </div>
    @include('layouts.footer')

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
