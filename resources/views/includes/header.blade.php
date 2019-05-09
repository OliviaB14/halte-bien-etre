<!-- Header section -->
<header class="header-section">
    <a class="site-logo">
        <img src="img/header.png" alt="">
    </a>
    <div class="header-socil-links">
        <a href=""><i class="fa fa-pinterest"></i></a>
        <a href="https://www.facebook.com/lahaltebienetre/"><i class="fa fa-facebook"></i></a>
        <a href=""><i class="fa fa-twitter"></i></a>
    </div>
    <ul class="main-menu">
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
        <li class="{{ $current_page == 'qui-sommes-nous' ? 'active' : '' }}"><a href="{{ route('about') }}">Qui sommes-nous</a></li>
        <li class="{{ $current_page == 'prestations' ? 'active' : '' }}"><a href="{{ route('prestations') }}">Mes prestations</a></li>
        <li class="{{ $current_page == 'partenariats' ? 'active' : '' }}"><a href="partenariats.html">Partenariats</a></li>
        <li class="{{ $current_page == 'contact' ? 'active' : '' }}"><a href="contact.html">Contact</a></li>
    </ul>
</header>
<!-- Header section end -->

