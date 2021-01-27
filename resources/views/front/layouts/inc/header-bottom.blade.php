<div id="gototop">

</div>
<header id="header">
    <div class="row">
        <div class="span4">
            <h1>
                <a class="logo" href="{{route('homepage')}}"><span>Deniz E-Ticaret Sayfası</span>
                    <img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
                </a>
            </h1>
        </div>
        <div class="span4">
            <div class="offerNoteWrapper">
                <h1 class="dotmark">
                    <i class="icon-cut"></i>
                    Reklam Alanı
                </h1>
            </div>
        </div>
        <div class="span4 alignR">
            <p><br> <strong> Destek (24/7) : 0800 1234 678 </strong><br><br></p>
            <span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
            <span class="btn btn-warning btn-mini">$</span>
            <span class="btn btn-mini">&pound;</span>
            <span class="btn btn-mini">&euro;</span>
        </div>
    </div>
</header>
<!--
Navigation Bar Section
-->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="{{route('homepage')}}">Ana Sayfa </a></li>
                    <li class=""><a href="{{route('product')}}">Ürünler</a></li>
                    <li class=""><a href="{{route('product_detail',['slug' => 'someslug'])}}">Ürün Detayları</a></li>
                    <li class=""><a href="{{route('about')}}">Hakkında</a></li>
                    <li class=""><a href="{{route('contact')}}">İletişim</a></li>
                    <li class=""><a href="{{route('cart')}}">Sepet</a></li>
                    <li class=""><a href="{{route('login')}}">Giriş Yap</a></li>
                    <li class=""><a href="{{route('register')}}">Kayıt Ol</a></li>

                </ul>

                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span
                                class="icon-lock"></span> Giriş Yap <b class="caret"></b></a>
                        <div class="dropdown-menu">
                            <form class="form-horizontal loginFrm">
                                <div class="control-group">
                                    <input type="text" class="span2" id="inputEmail" placeholder="Email">
                                </div>
                                <div class="control-group">
                                    <input type="password" class="span2" id="inputPassword"
                                           placeholder="Password">
                                </div>
                                <div class="control-group">
                                    <label class="checkbox">
                                        <input type="checkbox"> Beni Hatırla
                                    </label>
                                    <button type="submit" class="shopBtn btn-block">Giriş Yap</button>
                                </div>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
