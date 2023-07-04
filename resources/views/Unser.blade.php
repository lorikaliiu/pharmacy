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
        @if ($parameters == 'Naturheilkunde')
            <div class="site-blocks-cover inner-page" style="background-image: url('images/banerunser.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto align-self-center">
                            <div class=" text-center">
                                <h1>Naturheilkunde</h1>
                                <p>Willkommen bei Apotheke Frutigen!</p>
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
                                    <img src="{{ asset('images/imageunser.jpg') }}" alt="Image placeholder"
                                        class="img-fluid rounded">

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Naturheilkunde</h2>
                            </div>
                            <p class="text-black">Liebe Besucher,
                                <br>
                                <br>

                                Willkommen in unserem Naturheilkundezentrum, wo wir die Prinzipien der natürlichen
                                Heilung und des ganzheitlichen Wohlbefindens verkörpern. Wir sind bestrebt, Sie
                                umfassend naturheilkundlich zu betreuen und Sie zu befähigen, auf natürliche und
                                nachhaltige Weise die Verantwortung für Ihre Gesundheit zu übernehmen.

                                Naturheilkunde ist ein medizinisches System, das sich auf die dem Körper innewohnende
                                Fähigkeit zur Selbstheilung konzentriert. Wir glauben an die Lebenskraft jedes Einzelnen
                                und arbeiten daran, seinen natürlichen Heilungsprozess zu unterstützen. Unser Team aus
                                engagierten naturheilkundlichen Ärzten und Praktikern ist in verschiedenen natürlichen
                                Therapien und Techniken geschult, um auf Ihre Gesundheitsprobleme einzugehen und ein
                                optimales Wohlbefinden zu fördern.
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
        @elseif($parameters == 'Hauspezialitätens')
            <div class="site-blocks-cover inner-page" style="background-image: url('images/health2.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto align-self-center">
                            <div class=" text-center">
                                <h1>Hauspezialitätens</h1>
                                <p>Willkommen bei Apotheke Frutigen!</p>
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
                                    <img src="{{ asset('images/imageunser.jpg') }}" alt="Image placeholder"
                                        class="img-fluid rounded">

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Hauspezialitätens</h2>
                            </div>
                            <p class="text-black">

                                Wir bei Apotheke Frutigen sind stolz darauf, Ihnen unsere besonderen Hauspezialitäten
                                anzubieten. Diese einzigartigen Produkte wurden sorgfältig ausgewählt und entwickelt, um
                                Ihnen zusätzliche Unterstützung und Lösungen für Ihre Gesundheitsbedürfnisse zu bieten.

                                Unsere Hauspezialitäten werden mit höchster Sorgfalt und unter Verwendung hochwertiger
                                Inhaltsstoffe hergestellt. Sie basieren auf langjähriger Erfahrung und
                                wissenschaftlichen Erkenntnissen, um Ihnen optimale Ergebnisse zu garantieren.

                                Egal, ob Sie nach natürlichen Nahrungsergänzungsmitteln, ätherischen Ölen, Kräutertees
                                oder speziellen Hautpflegeprodukten suchen, unsere Hauspezialitäten decken eine Vielzahl
                                von Gesundheitsbereichen ab. Von der Stärkung des Immunsystems über die Unterstützung
                                bei Schlafproblemen bis hin zur Verbesserung des allgemeinen Wohlbefindens - wir haben
                                die richtigen Lösungen für Sie.

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
        @elseif($parameters == 'Kosmetik')
            <div class="site-blocks-cover inner-page" style="background-image: url('images/banerkosmetik.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto align-self-center">
                            <div class=" text-center">
                                <h1 style="color: black">Kosmetik</h1>
                                <p style="color: black">Willkommen bei Apotheke Frutigen!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .rotateimg {
                    transform: rotate(90deg);
                }
            </style>
            <div class="site-section bg-light custom-border-bottom" data-aos="fade">
                <div class="container">
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6 order-md-2">
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('images/beauty2.webp') }}" alt="Image placeholder"
                                        class=" rounded rotateimg" style="width:135% !important;">

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Kosmetik</h2>
                            </div>
                            <p class="text-black">Sehr geehrte Besucher,
                                <br>
                                <br>

                                Bei Apotheke Frutigen legen wir nicht nur Wert auf Ihre gesundheitlichen Bedürfnisse,
                                sondern bieten Ihnen auch eine umfangreiche Auswahl an hochwertiger Kosmetik. Unsere
                                Kosmetikprodukte wurden sorgfältig ausgewählt, um Ihnen natürliche Schönheitslösungen zu
                                bieten und Ihr Wohlbefinden zu steigern.

                                Unsere Kosmetikabteilung umfasst eine Vielzahl von Produkten, die speziell entwickelt
                                wurden, um Ihre Haut zu pflegen, zu schützen und zu verwöhnen. Von Gesichtscremes und
                                Seren über Körperlotions bis hin zu Reinigungsmitteln und Masken - wir führen eine
                                breite Palette von Kosmetikmarken, die auf Qualität und Wirksamkeit geprüft wurden.

                                Unser Sortiment umfasst sowohl konventionelle Kosmetikprodukte als auch eine wachsende
                                Auswahl an natürlichen und biologischen Optionen. Wir verstehen, dass jeder Mensch
                                unterschiedliche Bedürfnisse und Präferenzen hat, daher bieten wir Ihnen eine
                                vielfältige Auswahl, um Ihren individuellen Ansprüchen gerecht zu werden.

                                Unser geschultes Team von Kosmetikexperten steht Ihnen zur Verfügung, um Ihnen bei der
                                Auswahl der richtigen Produkte zu helfen und Ihnen individuelle Beratung zu bieten. Wir
                                sind bestrebt, Ihnen qualitativ hochwertige Kosmetikprodukte anzubieten, die Ihre
                                Hautbedürfnisse berücksichtigen und Ihnen ein strahlendes und gesundes Aussehen
                                verleihen.
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
        @elseif($parameters == 'Orlochstehen')
            <div class="site-blocks-cover inner-page" style="background-image: url('images/health2.png');">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto align-self-center">
                            <div class=" text-center">
                                <h1 style="color: black">Ohrloch Stechen</h1>
                                <p style="color: black">Willkommen bei Apotheke Frutigen!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .rotateimg {
                    transform: rotate(90deg);
                }
            </style>
            <div class="site-section bg-light custom-border-bottom" data-aos="fade">
                <div class="container">
                    <div class="row align-items-center mb-5">
                        <div class="col-md-6 order-md-2">
                            <div class="block-16">
                                <figure>
                                    <img src="{{ asset('images/beauty2.webp') }}" alt="Image placeholder"
                                        class=" rounded rotateimg" style="width:135% !important;">

                                </figure>
                            </div>
                        </div>
                        <div class="col-md-5 mr-auto">

                            <div class="site-section-heading pt-3 mb-4">
                                <h2 class="text-black">Ohrloch Stechen</h2>
                            </div>
                            <p class="text-black">Sehr geehrte Besucher,
                                <br>
                                <br>

                                Wir freuen uns, Ihnen unseren professionellen Ohrlochstechservice anzubieten. Bei
                                Apotheke Frutigen verstehen wir, dass das Stechen von Ohrlöchern ein bedeutender Schritt
                                in puncto Schmuck und persönlichem Stil sein kann. Deshalb legen wir großen Wert auf
                                hygienische Standards, Komfort und fachkundige Betreuung.

                                Unser geschultes Team von Fachleuten steht Ihnen zur Verfügung, um das Ohrlochstechen
                                sicher und effektiv durchzuführen. Wir verwenden hochwertige Materialien und sterile
                                Werkzeuge, um die Risiken einer Infektion zu minimieren. Ihre Sicherheit und
                                Zufriedenheit haben für uns oberste Priorität.

                                Vor dem Ohrlochstechen werden wir Sie ausführlich beraten, um sicherzustellen, dass Sie
                                die richtigen Entscheidungen bezüglich Positionierung, Schmuckstück und Pflege treffen
                                können. Wir beantworten gerne Ihre Fragen und geben Ihnen Anleitungen zur Nachsorge, um
                                eine optimale Heilung zu gewährleisten.

                                Unser Ziel ist es, Ihnen eine angenehme und professionelle Erfahrung zu bieten, während
                                wir Ihre Ohrlöcher stechen. Wir nehmen uns die Zeit, auf Ihre individuellen Bedürfnisse
                                einzugehen und Ihre Wünsche zu berücksichtigen.

                                Besuchen Sie Apotheke Frutigen, um unseren Ohrlochstechservice in Anspruch zu nehmen.
                                Wir freuen uns darauf, Ihnen zu helfen, Ihren persönlichen Stil zum Ausdruck zu bringen
                                und Ihnen die bestmögliche Betreuung zu bieten.
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
