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
    @php
        $parameters = request()->input('selected');
    @endphp
    <div class="site-wrap">

        @include('layouts.navbar')
        @if ($parameters == 'Geschichte')
            <div class="site-blocks-cover inner-page" style="background-image: url('images/health2.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto align-self-center">
                            <div class=" text-center">
                                <h1>Über uns</h1>
                                <p>Willkommen bei Apotheke Frutigen, Ihrer vertrauenswürdigen Apotheke in Frutigen!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-section bg-light custom-border-bottom" data-aos="fade">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6 order-md-2">
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('images/about.jpg') }}" alt="Image placeholder"
                                        class="img-fluid rounded">

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Wir sind ein vertrauenswürdiges Unternehmen</h2>
                            </div>
                            <p class="text-black">Willkommen bei Apotheke Frutigen, Ihrer vertrauenswürdigen Apotheke in
                                Frutigen!
                                Wir freuen uns, Ihnen eine umfassende Palette pharmazeutischer Dienstleistungen und
                                Produkte anzubieten, um Ihre Gesundheitsbedürfnisse zu erfüllen. Unsere Apotheke ist
                                darauf spezialisiert, Ihnen außergewöhnlichen Kundenservice zu bieten und Ihre
                                Gesundheit steht bei uns an erster Stelle.
                                Ob Sie verschreibungspflichtige Medikamente, rezeptfreie Arzneimittel,
                                Nahrungsergänzungsmittel oder Körperpflegeprodukte benötigen - wir haben alles für Sie
                                vorrätig. Unser erfahrenes und kompetentes Team von Apothekern steht Ihnen bei Fragen
                                oder Anliegen zu Ihren Medikamenten oder Ihrer allgemeinen Gesundheit zur Seite.
                                <br>
                                <br>
                                Mit freundlichen Grüßen
                                <br>
                                <br>
                                Apotheke Frutigen.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($parameters == 'Job')
            <div class="site-section bg-light custom-border-bottom" data-aos="fade" style="margin-top: 100px">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('images/job.jpg') }}" alt="Image placeholder" class="img-fluid rounded">
                                    

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-5">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Wie wir angefangen haben</h2>
                            </div>
                            <p>Herzlich willkommen bei Apotheke Frutigen, Ihrer vertrauenswürdigen Apotheke in Frutigen!
                                Wir möchten Ihnen gerne einen Einblick in unsere Anfänge geben und wie wir zu dem
                                Unternehmen geworden sind, das wir heute sind.
                                <br>

                                Unsere Geschichte begann vor vielen Jahren, als wir erkannten, dass die Gemeinde
                                Frutigen einen zuverlässigen und zugänglichen Ort für ihre pharmazeutischen Bedürfnisse
                                benötigte. Mit dieser Vision haben wir uns entschlossen, eine Apotheke zu begründen, die
                                eine qualitativ hochwertige Versorgung mit Medikamenten und Gesundheitsprodukten bietet.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        @elseif($parameters == 'team')
            <div class="site-section bg-light custom-border-bottom" data-aos="fade">
                <div class="container">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 site-section-heading text-center pt-4">
                            <h2>The Team</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mb-5">

                            <div class="block-38 text-center">
                                <div class="block-38-img">
                                    <div class="block-38-header">
                                        <img src="images/person_1.webp" alt="Image placeholder" class="mb-4">
                                        <h3 class="block-38-heading h4">Elizabeth Graham</h3>
                                        <p class="block-38-subheading">CEO/Co-Founder</p>
                                    </div>
                                    <div class="block-38-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima
                                            nihil
                                            sit distinctio
                                            recusandae doloribus ut fugit officia voluptate soluta. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-5">
                            <div class="block-38 text-center">
                                <div class="block-38-img">
                                    <div class="block-38-header">
                                        <img src="images/person_2.webp" alt="Image placeholder" class="mb-4">
                                        <h3 class="block-38-heading h4">Jennifer Greive</h3>
                                        <p class="block-38-subheading">Co-Founder</p>
                                    </div>
                                    <div class="block-38-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima
                                            nihil
                                            sit distinctio
                                            recusandae doloribus ut fugit officia voluptate soluta. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-5">
                            <div class="block-38 text-center">
                                <div class="block-38-img">
                                    <div class="block-38-header">
                                        <img src="images/person_3.webp" alt="Image placeholder" class="mb-4">
                                        <h3 class="block-38-heading h4">Patrick Marx</h3>
                                        <p class="block-38-subheading">Marketing</p>
                                    </div>
                                    <div class="block-38-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima
                                            nihil
                                            sit distinctio
                                            recusandae doloribus ut fugit officia voluptate soluta. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mb-5">
                            <div class="block-38 text-center">
                                <div class="block-38-img">
                                    <div class="block-38-header">
                                        <img src="images/person_4.webp" alt="Image placeholder" class="mb-4">
                                        <h3 class="block-38-heading h4">Mike Coolbert</h3>
                                        <p class="block-38-subheading">Sales Manager</p>
                                    </div>
                                    <div class="block-38-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae aut minima
                                            nihil
                                            sit distinctio
                                            recusandae doloribus ut fugit officia voluptate soluta. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

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
