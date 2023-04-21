<div class="site-navbar py-2" id="closenav">
    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="{{ route('shop') }}" method="get">
                <input type="text" name="query" class="form-control"
                    placeholder="Stichwort suchen und Enter drücken...">
            </form>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
            <div class="site-logo">
                <a style="margin-left: 20px;" href="{{ route('home') }}"><img
                        src="{{ asset('images/logo.svg') }}" /></a>

                <a href="{{ route('home') }}" class="js-logo-clone" style="margin-left: 20px;">Apotheke Frutigen</a>
            </div>
        </div>
        <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="has-children">
                        <a href="#">Dienstleistungen</a>
                        <ul class="dropdown">
                            <li><a href="#">Gesundheitsberatung</a></li>
                            <li class="has-children">
                                <a href="#">Medizinisch
                                    Dienstleistungen</a>
                                <ul class="dropdown">
                                    <li><a href="#">+</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Impfungen</a>
                                <ul class="dropdown">
                                    <li><a href="#">+</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Checks && Messungen</a>
                                <ul class="dropdown">
                                    <li><a href="#">+</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Hauslieferdienst</a></li>
                            <li><a href="#">Herstellung v. Medikamenten</a></li>
                            <li><a href="#">Verblisterung v. Medikamenten</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Aktuelles</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('news') }}">Aktuelle Aktionen</a></li>
                            <li class="has-children">
                                <a href="{{ route('news') }}">Corona Pandemie</a>
                                <ul class="dropdown">
                                    <li><a href="#">+</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Unser Angebot</a>
                        <ul class="dropdown">
                            <li class="has-children">
                                <a href="#">Naturheilkunde</a>
                                <ul class="dropdown">
                                    <li><a href="#">+</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Hauspezialitätens</a></li>
                            <li><a href="#">Kosmetik</a></li>
                            <li><a href="#">Orlochstehen</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#">Ratgeber</a>
                        <ul class="dropdown">
                            <li><a href="#">Gesundheit</a></li>
                            <li><a href="#">Schönheit</a></li>
                            <li><a href="#">Natur &
                                    Komplementär</a></li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="{{ route('about') }}">Über uns</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('about') }}">Geschichte</a></li>
                            <li><a href="{{ route('about') }}">Team</a></li>
                            <li><a href="{{ route('about') }}">Job & Karriere</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Kontakt</a></li>
                </ul>
            </nav>
        </div>
        <div class="icons ">
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                    class="icon-menu"></span></a>
        </div>
    </div>
    {{-- <div class="container">
       
    </div> --}}
</div>
<script>
    function Search() {
        document.querySelector('.site-mobile-menu').style.display = 'none';
    }
</script>
<style>
    
    @media only screen and (max-width: 480px) {
        .logo img {
            width: 30px;
            height: auto;
        }

        .logo .js-logo-clone {
            font-size: 12px;
            margin-left: 9px;

        }
    }

    .site-logo {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logo-img {
        height: 50px;
    }

    .logo-text {
        font-size: 20px;
    }
</style>
