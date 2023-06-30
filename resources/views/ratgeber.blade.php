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
            background: black!important;
            border-color: black !important;
            color: white;
        }

        .btn.btn-primary:hover {
            color: white !important;
        }
        .site-section {
            margin: 10px 0;
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

        .feedbackshowmore {
            color: #3C486B !important
        }
    </style>
    @include('layouts.navbar')
    @php
        $parameters = request()->input('selected');
    @endphp
    <div class="site-wrap">
        <div class="site-section">
            <div class="bg-light py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-0"><a href="{{ route('home') }}">Home</a> <span
                                class="mx-2 mb-0">/</span> <strong class="text-black">
                                    @if($parameters == 'Natur')
                                        {{ $parameters }} & Komplementär
                                    @else
                                        {{ $parameters }}
                                    @endif
                                </strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @if($parameters == 'Gesundheit')
                <div>
                    <div>
                        <div>
                            <h1></h1>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7">
                                <div>
                                    <img src="images/health2.png" alt="health" style="width:100%;">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="footer-heading mb-2" style="padding-top: 13px">Kontaktinformation</h4>
                                <ul class="list-unstyled">
                                    <li class="address">Apotheke Frutigen
                                        Qendrese Isufi-Ramadani
                                        Obere Bahnhofstrasse 5
                                        3714 Frutigen</li>
                                    <li class="phone">Telefon : +41 33 671 12 65</li>
                                    <li class="phone">Fax : +41 33 535 41 51</li>
                                    <li class="email"> info@apotheke-frutigen.ch</li>
                                    <li class="social-media">
                                        <a style="color:#3C486B" href="https://www.facebook.com/apotheke-frutigen"
                                            target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 10.061c0 -5.557 -4.477 -10.064 -10 -10.064C4.476 0 -0.003 4.504 -0.003 10.061A10.044 10.044 0 0 0 8.436 20V12.971H5.897V10.061h2.54V7.844c0 -2.521 1.495 -3.915 3.777 -3.915a15.28 15.28 0 0 1 2.239 0.196v2.476h-1.263c-1.241 0 -1.628 0.776 -1.628 1.572v1.888h2.772l-0.443 2.908H11.561V20A10.048 10.048 0 0 0 20 10.061z" />
                                            </svg>
                                        </a>
                                        <a style="margin-left:10px; color:#3C486B"
                                            href="https://www.instagram.com/apotheke-frutigen" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 0c-2.713 0 -3.055 0.012 -4.121 0.06 -1.067 0.05 -1.792 0.218 -2.429 0.465A4.896 4.896 0 0 0 1.679 1.679 4.909 4.909 0 0 0 0.525 3.45C0.278 4.085 0.109 4.812 0.06 5.875 0.012 6.944 0 7.284 0 10.001c0 2.715 0.012 3.055 0.06 4.121 0.05 1.065 0.218 1.791 0.465 2.428A4.912 4.912 0 0 0 1.679 18.321a4.868 4.868 0 0 0 1.77 1.153c0.638 0.248 1.362 0.416 2.428 0.465 1.068 0.048 1.408 0.061 4.124 0.061s3.055 -0.012 4.122 -0.06c1.064 -0.05 1.792 -0.218 2.429 -0.465a4.895 4.895 0 0 0 1.77 -1.153 4.901 4.901 0 0 0 1.153 -1.771c0.247 -0.636 0.415 -1.362 0.465 -2.428 0.048 -1.067 0.059 -1.407 0.059 -4.122s-0.012 -3.056 -0.06 -4.124c-0.05 -1.064 -0.219 -1.791 -0.465 -2.427a4.908 4.908 0 0 0 -1.153 -1.771A4.889 4.889 0 0 0 16.551 0.526C15.912 0.278 15.185 0.109 14.121 0.06 13.053 0.012 12.715 0 9.998 0h0.004zm-0.896 1.802h0.898c2.67 0 2.987 0.009 4.04 0.058 0.975 0.044 1.505 0.208 1.858 0.344 0.467 0.181 0.8 0.399 1.15 0.749a3.087 3.087 0 0 1 0.748 1.15c0.138 0.351 0.3 0.881 0.344 1.856 0.049 1.053 0.059 1.37 0.059 4.039s-0.01 2.987 -0.059 4.04c-0.044 0.975 -0.208 1.504 -0.344 1.856a3.088 3.088 0 0 1 -0.749 1.149 3.087 3.087 0 0 1 -1.15 0.748c-0.35 0.138 -0.88 0.3 -1.856 0.345 -1.053 0.048 -1.37 0.059 -4.04 0.059s-2.988 -0.011 -4.041 -0.059c-0.975 -0.045 -1.504 -0.208 -1.856 -0.345a3.098 3.098 0 0 1 -1.15 -0.748 3.1 3.1 0 0 1 -0.75 -1.15c-0.136 -0.351 -0.3 -0.881 -0.344 -1.856 -0.048 -1.053 -0.058 -1.37 -0.058 -4.041 0 -2.67 0.01 -2.985 0.058 -4.039 0.045 -0.975 0.208 -1.505 0.345 -1.858 0.181 -0.467 0.399 -0.8 0.749 -1.15a3.087 3.087 0 0 1 1.15 -0.748c0.352 -0.138 0.881 -0.3 1.856 -0.345 0.922 -0.042 1.28 -0.055 3.144 -0.056v0.002zm6.235 1.66a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0 -2.4zm-5.338 1.402a5.136 5.136 0 1 0 0 10.271 5.136 5.136 0 0 0 0 -10.271zm0 1.801a3.333 3.333 0 1 1 0 6.668 3.333 3.333 0 0 1 0 -6.668z" />
                                            </svg></a>
                                    </li>
                                </ul>
                                <hr>
                                <h4 class="footer-heading mb-2">Öffnungszeiten:</h4>
                                <ul class="list-unstyled">
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
                                <h2></h2>
                            </div>
                            <div>
                                <p>Gesundheit ist ein Zustand vollständigen körperlichen, geistigen und sozialen
                                    Wohlbefindens und nicht nur das Fehlen von Krankheit oder Gebrechen. Dieser Zustand
                                    des Wohlbefindens ist von vielen Faktoren abhängig, wie z.B. einer ausgewogenen
                                    Ernährung, regelmäßiger Bewegung, ausreichendem Schlaf und einer gesunden
                                    psychischen Verfassung. Gesundheit ist ein lebenslanger Prozess, der sowohl
                                    individuelle Anstrengungen als auch die Unterstützung der Gemeinschaft erfordert.
                                    Indem wir uns um unsere Gesundheit kümmern, können wir unsere Lebensqualität
                                    verbessern und unser Potenzial voll ausschöpfen..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <hr style="border-top: 3px solid black">
                </div>
                @elseif($parameters == 'Schönheit')
                <div>
                    <div>
                        <div>
                            <h1></h1>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7">
                                <div>
                                    <img src="images/beauty2.webp" alt="beauty2" style="width:100%;">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="footer-heading mb-2" style="padding-top: 13px">Kontaktinformation</h4>
                                <ul class="list-unstyled">
                                    <li class="address">Apotheke Frutigen
                                        Qendrese Isufi-Ramadani
                                        Obere Bahnhofstrasse 5
                                        3714 Frutigen</li>
                                    <li class="phone">Telefon : +41 33 671 12 65</li>
                                    <li class="phone">Fax : +41 33 535 41 51</li>
                                    <li class="email"> info@apotheke-frutigen.ch</li>
                                    <li class="social-media">
                                        <a style="color:#3C486B" href="https://www.facebook.com/apotheke-frutigen"
                                            target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 10.061c0 -5.557 -4.477 -10.064 -10 -10.064C4.476 0 -0.003 4.504 -0.003 10.061A10.044 10.044 0 0 0 8.436 20V12.971H5.897V10.061h2.54V7.844c0 -2.521 1.495 -3.915 3.777 -3.915a15.28 15.28 0 0 1 2.239 0.196v2.476h-1.263c-1.241 0 -1.628 0.776 -1.628 1.572v1.888h2.772l-0.443 2.908H11.561V20A10.048 10.048 0 0 0 20 10.061z" />
                                            </svg>
                                        </a>
                                        <a style="margin-left:10px; color:#3C486B"
                                            href="https://www.instagram.com/apotheke-frutigen" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 0c-2.713 0 -3.055 0.012 -4.121 0.06 -1.067 0.05 -1.792 0.218 -2.429 0.465A4.896 4.896 0 0 0 1.679 1.679 4.909 4.909 0 0 0 0.525 3.45C0.278 4.085 0.109 4.812 0.06 5.875 0.012 6.944 0 7.284 0 10.001c0 2.715 0.012 3.055 0.06 4.121 0.05 1.065 0.218 1.791 0.465 2.428A4.912 4.912 0 0 0 1.679 18.321a4.868 4.868 0 0 0 1.77 1.153c0.638 0.248 1.362 0.416 2.428 0.465 1.068 0.048 1.408 0.061 4.124 0.061s3.055 -0.012 4.122 -0.06c1.064 -0.05 1.792 -0.218 2.429 -0.465a4.895 4.895 0 0 0 1.77 -1.153 4.901 4.901 0 0 0 1.153 -1.771c0.247 -0.636 0.415 -1.362 0.465 -2.428 0.048 -1.067 0.059 -1.407 0.059 -4.122s-0.012 -3.056 -0.06 -4.124c-0.05 -1.064 -0.219 -1.791 -0.465 -2.427a4.908 4.908 0 0 0 -1.153 -1.771A4.889 4.889 0 0 0 16.551 0.526C15.912 0.278 15.185 0.109 14.121 0.06 13.053 0.012 12.715 0 9.998 0h0.004zm-0.896 1.802h0.898c2.67 0 2.987 0.009 4.04 0.058 0.975 0.044 1.505 0.208 1.858 0.344 0.467 0.181 0.8 0.399 1.15 0.749a3.087 3.087 0 0 1 0.748 1.15c0.138 0.351 0.3 0.881 0.344 1.856 0.049 1.053 0.059 1.37 0.059 4.039s-0.01 2.987 -0.059 4.04c-0.044 0.975 -0.208 1.504 -0.344 1.856a3.088 3.088 0 0 1 -0.749 1.149 3.087 3.087 0 0 1 -1.15 0.748c-0.35 0.138 -0.88 0.3 -1.856 0.345 -1.053 0.048 -1.37 0.059 -4.04 0.059s-2.988 -0.011 -4.041 -0.059c-0.975 -0.045 -1.504 -0.208 -1.856 -0.345a3.098 3.098 0 0 1 -1.15 -0.748 3.1 3.1 0 0 1 -0.75 -1.15c-0.136 -0.351 -0.3 -0.881 -0.344 -1.856 -0.048 -1.053 -0.058 -1.37 -0.058 -4.041 0 -2.67 0.01 -2.985 0.058 -4.039 0.045 -0.975 0.208 -1.505 0.345 -1.858 0.181 -0.467 0.399 -0.8 0.749 -1.15a3.087 3.087 0 0 1 1.15 -0.748c0.352 -0.138 0.881 -0.3 1.856 -0.345 0.922 -0.042 1.28 -0.055 3.144 -0.056v0.002zm6.235 1.66a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0 -2.4zm-5.338 1.402a5.136 5.136 0 1 0 0 10.271 5.136 5.136 0 0 0 0 -10.271zm0 1.801a3.333 3.333 0 1 1 0 6.668 3.333 3.333 0 0 1 0 -6.668z" />
                                            </svg></a>
                                    </li>
                                </ul>
                                <hr>
                                <h4 class="footer-heading mb-2">Öffnungszeiten:</h4>
                                <ul class="list-unstyled">
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
                                <h2></h2>
                            </div>
                            <div>
                                <p>Schönheit bezieht sich auf die ästhetische Attraktivität einer Person oder eines
                                    Gegenstands. Es ist ein subjektiver Begriff, der von verschiedenen Kulturen und
                                    Personen unterschiedlich interpretiert wird. Schönheit kann jedoch nicht nur auf das
                                    Äußere beschränkt werden, sondern umfasst auch innere Schönheit wie Freundlichkeit,
                                    Empathie und Charakterstärke. Um die Schönheit zu erhalten und zu verbessern, sind
                                    eine gesunde Ernährung, ausreichend Schlaf, regelmäßige körperliche Aktivität sowie
                                    eine positive Einstellung und ein gutes Selbstwertgefühl von großer Bedeutung. Durch
                                    die Pflege unseres Körpers und Geistes können wir unser äußeres Erscheinungsbild
                                    verbessern und uns innerlich glücklicher und selbstbewusster fühlen..</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <hr style="border-top: 3px solid black">
                </div>
                @elseif($parameters == 'Natur')
                <div>
                    <div>
                        <div>
                            <h1></h1>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-7">
                                <div>
                                    <img src="images/natural.webp" alt="natural" style="width:100%;">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="footer-heading mb-2" style="padding-top: 13px">Kontaktinformation</h4>
                                <ul class="list-unstyled">
                                    <li class="address">Apotheke Frutigen
                                        Qendrese Isufi-Ramadani
                                        Obere Bahnhofstrasse 5
                                        3714 Frutigen</li>
                                    <li class="phone">Telefon : +41 33 671 12 65</li>
                                    <li class="phone">Fax : +41 33 535 41 51</li>
                                    <li class="email"> info@apotheke-frutigen.ch</li>
                                    <li class="social-media">
                                        <a style="color:#3C486B" href="https://www.facebook.com/apotheke-frutigen"
                                            target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-facebook" viewBox="0 0 20 20">
                                                <path
                                                    d="M20 10.061c0 -5.557 -4.477 -10.064 -10 -10.064C4.476 0 -0.003 4.504 -0.003 10.061A10.044 10.044 0 0 0 8.436 20V12.971H5.897V10.061h2.54V7.844c0 -2.521 1.495 -3.915 3.777 -3.915a15.28 15.28 0 0 1 2.239 0.196v2.476h-1.263c-1.241 0 -1.628 0.776 -1.628 1.572v1.888h2.772l-0.443 2.908H11.561V20A10.048 10.048 0 0 0 20 10.061z" />
                                            </svg>
                                        </a>
                                        <a style="margin-left:10px; color:#3C486B"
                                            href="https://www.instagram.com/apotheke-frutigen" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-instagram" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 0c-2.713 0 -3.055 0.012 -4.121 0.06 -1.067 0.05 -1.792 0.218 -2.429 0.465A4.896 4.896 0 0 0 1.679 1.679 4.909 4.909 0 0 0 0.525 3.45C0.278 4.085 0.109 4.812 0.06 5.875 0.012 6.944 0 7.284 0 10.001c0 2.715 0.012 3.055 0.06 4.121 0.05 1.065 0.218 1.791 0.465 2.428A4.912 4.912 0 0 0 1.679 18.321a4.868 4.868 0 0 0 1.77 1.153c0.638 0.248 1.362 0.416 2.428 0.465 1.068 0.048 1.408 0.061 4.124 0.061s3.055 -0.012 4.122 -0.06c1.064 -0.05 1.792 -0.218 2.429 -0.465a4.895 4.895 0 0 0 1.77 -1.153 4.901 4.901 0 0 0 1.153 -1.771c0.247 -0.636 0.415 -1.362 0.465 -2.428 0.048 -1.067 0.059 -1.407 0.059 -4.122s-0.012 -3.056 -0.06 -4.124c-0.05 -1.064 -0.219 -1.791 -0.465 -2.427a4.908 4.908 0 0 0 -1.153 -1.771A4.889 4.889 0 0 0 16.551 0.526C15.912 0.278 15.185 0.109 14.121 0.06 13.053 0.012 12.715 0 9.998 0h0.004zm-0.896 1.802h0.898c2.67 0 2.987 0.009 4.04 0.058 0.975 0.044 1.505 0.208 1.858 0.344 0.467 0.181 0.8 0.399 1.15 0.749a3.087 3.087 0 0 1 0.748 1.15c0.138 0.351 0.3 0.881 0.344 1.856 0.049 1.053 0.059 1.37 0.059 4.039s-0.01 2.987 -0.059 4.04c-0.044 0.975 -0.208 1.504 -0.344 1.856a3.088 3.088 0 0 1 -0.749 1.149 3.087 3.087 0 0 1 -1.15 0.748c-0.35 0.138 -0.88 0.3 -1.856 0.345 -1.053 0.048 -1.37 0.059 -4.04 0.059s-2.988 -0.011 -4.041 -0.059c-0.975 -0.045 -1.504 -0.208 -1.856 -0.345a3.098 3.098 0 0 1 -1.15 -0.748 3.1 3.1 0 0 1 -0.75 -1.15c-0.136 -0.351 -0.3 -0.881 -0.344 -1.856 -0.048 -1.053 -0.058 -1.37 -0.058 -4.041 0 -2.67 0.01 -2.985 0.058 -4.039 0.045 -0.975 0.208 -1.505 0.345 -1.858 0.181 -0.467 0.399 -0.8 0.749 -1.15a3.087 3.087 0 0 1 1.15 -0.748c0.352 -0.138 0.881 -0.3 1.856 -0.345 0.922 -0.042 1.28 -0.055 3.144 -0.056v0.002zm6.235 1.66a1.2 1.2 0 1 0 0 2.4 1.2 1.2 0 0 0 0 -2.4zm-5.338 1.402a5.136 5.136 0 1 0 0 10.271 5.136 5.136 0 0 0 0 -10.271zm0 1.801a3.333 3.333 0 1 1 0 6.668 3.333 3.333 0 0 1 0 -6.668z" />
                                            </svg></a>
                                    </li>
                                </ul>
                                <hr>
                                <h4 class="footer-heading mb-2">Öffnungszeiten:</h4>
                                <ul class="list-unstyled">
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
                                <h2></h2>
                            </div>
                            <div>
                                <p>Natur & Komplementär bezieht sich auf alternative medizinische Behandlungsmethoden,
                                    die oft auf natürlichen oder traditionellen Heilverfahren basieren. Dazu gehören
                                    unter anderem die traditionelle chinesische Medizin, Ayurveda, Homöopathie und
                                    Kräutermedizin. Diese alternativen Methoden können eine wirksame Ergänzung zur
                                    konventionellen medizinischen Behandlung sein und können helfen, körperliche und
                                    geistige Beschwerden zu lindern oder zu verhindern. Die Natur und ihre Ressourcen
                                    bieten eine breite Palette an natürlichen Heilmitteln, die bei der Vorbeugung und
                                    Behandlung von Krankheiten helfen können. Komplementäre Methoden können auch dazu
                                    beitragen, das Wohlbefinden zu steigern, Stress abzubauen und das Immunsystem zu
                                    stärken. Es ist jedoch wichtig, sich vor der Anwendung von alternativen Methoden mit
                                    einem qualifizierten Arzt oder Therapeuten zu beraten, um mögliche Risiken und
                                    Wechselwirkungen mit anderen Medikamenten oder Therapien zu vermeiden.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <hr style="border-top: 3px solid black">
                </div>
                @endif
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
