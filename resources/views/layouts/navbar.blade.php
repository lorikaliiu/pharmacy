<div class="site-navbar py-2" style="position:fixed;" id="closenav">
    <div class="search-wrap">
        <div class="container">
            <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
            <form action="{{ route('shop') }}" method="get">
                <input type="text" name="query" class="form-control" placeholder="Search keyword and hit enter...">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo">
                <div class="site-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('images/logo.svg') }}" /></a>

                    <a href="{{ route('home') }}" class="js-logo-clone" style="margin-left: 20px;">Apotheke Frutigen</a>
                </div>
            </div>
            <div class="main-nav d-none d-lg-block">
                <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="active"><a href="{{ route('home') }}">Heim</a></li>
                        <li><a href="{{ route('shop') }}">Store</a></li>
                        <li class="has-children">
                            <a href="#">Ergänzungen</a>
                            <ul class="dropdown">
                                <li><a href="#">Ergänzungen</a></li>
                                <li class="has-children">
                                    <a href="#">Vitamins</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Ergänzungen</a></li>
                                        <li><a href="#">Vitamins</a></li>
                                        <li><a href="#">Diet &amp; Nutrition</a></li>
                                        <li><a href="#">Tea &amp; Coffee</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Diet &amp; Nutrition</a></li>
                                <li><a href="#">Tea &amp; Coffee</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">Über uns</a></li>
                        <li><a href="{{ route('contact') }}">Kontakt</a></li>
                        <li>
                            <div class="icons">
                                <a href="#" class="icons-btn d-inline-block js-search-open" onclick="Search()"><span
                                        class="icon-search"></span></a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="icons ">
                <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                        class="icon-menu"></span></a>
            </div>
        </div>
    </div>
</div>
<script>
 function Search(){
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
