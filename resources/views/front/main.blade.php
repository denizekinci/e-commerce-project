@extends('front.layouts.master-main')
@section('title','Anasayfa')
@section('content')
    <div class="span9">
        <div class="well np">
            <div id="myCarousel" class="carousel slide homCar">
                <div class="carousel-inner">
                    <div class="item">
                        <img style="width:100%" src="assets/img/bootstrap_free-ecommerce.png"
                             alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Mücevherler</h4>
                            <p><span>Uygun fiyatlara yüksek kalite ürünleri keşfedin, modeller üzerinde inceleyin</span></p>
                        </div>
                    </div>
                    <div class="item">
                        <img style="width:100%" src="assets/img/carousel1.png"
                             alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Saatler</h4>
                            <p><span>Yüzlerce model arasından ister sade, ister gösterişli bir model beğenin</span></p>
                        </div>
                    </div>
                    <div class="item active">
                        <img style="width:100%" src="assets/img/carousel3.png"
                             alt="bootstrap ecommerce templates">
                        <div class="carousel-caption">
                            <h4>Aksesuarlar</h4>
                            <p><span>Gündelik hayatta kullanmanız için sade ve şık aksesuarlar</span></p>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
        </div>
        <!--
New Products
-->
        <div class="well well-small">
            <h3>Yeni Ürünler </h3>
            <hr class="soften" />
            <div class="row-fluid">
                <div id="newProductCar" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="assets/img/bootstrap-ring.png"
                                                                            alt="bootstrap-ring"></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="assets/img/i.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="#" class="tag"></a>
                                        <a href="product_details.html"><img src="assets/img/g.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="product_details.html"><img src="assets/img/s.png" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="item">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="product_details.html"><img src="assets/img/i.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="product_details.html"><img src="assets/img/f.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="product_details.html"><img src="assets/img/h.jpg" alt=""></a>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <a class="zoomTool" href="product_details.html"
                                           title="Sepete Ekle"><span class="icon-search"></span> İncele</a>
                                        <a href="product_details.html"><img src="assets/img/j.jpg" alt=""></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
                </div>
            </div>
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">

                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/b.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Yüzükler</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Favorilere Ekle </a>
                                    <a class="pull-left" href="#"> Karşılaştır </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/c.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Yüzükler</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Favorilere Ekle </a>
                                    <a class="pull-left" href="#"> Karşılaştır </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/a.jpg" alt=""></a>
                            <div class="caption cntr">
                                <p>Yüzükler</p>
                                <p><strong> $22.00</strong></p>
                                <h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
                                <div class="actionList">
                                    <a class="pull-left" href="#">Favorilere Ekle </a>
                                    <a class="pull-left" href="#"> Karşılaştır </a>
                                </div>
                                <br class="clr">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--
Featured Products
-->
        <div class="well well-small">
            <h3><a class="btn btn-mini pull-right" href="products.html" title="Daha Fazla">Daha Fazla<span
                        class="icon-plus"></span></a> Önerilen Ürünler </h3>
            <hr class="soften" />
            <div class="row-fluid">
                <ul class="thumbnails">
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/d.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Yüzükler</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.html"
                                       title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="Sepete Ekle"><span
                                            class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/e.jpg" alt=""></a>
                            <div class="caption">
                                <h5>Yüzükler</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.html"
                                       title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="Sepete Ekle"><span
                                            class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                    <li class="span4">
                        <div class="thumbnail">
                            <a class="zoomTool" href="product_details.html" title="Sepete Ekle"><span
                                    class="icon-search"></span> İncele</a>
                            <a href="product_details.html"><img src="assets/img/f.jpg" alt="" /></a>
                            <div class="caption">
                                <h5>Yüzükler</h5>
                                <h4>
                                    <a class="defaultBtn" href="product_details.html"
                                       title="Click to view"><span class="icon-zoom-in"></span></a>
                                    <a class="shopBtn" href="#" title="Sepete Ekle"><span
                                            class="icon-plus"></span></a>
                                    <span class="pull-right">$22.00</span>
                                </h4>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">Daha Fazla <span class="icon-plus"></span></a>
            Popüler Ürünler
        </div>
        <hr>
        <div class="well well-small">
            <a class="btn btn-mini pull-right" href="#">Daha Fazla <span class="icon-plus"></span></a>
            Çok Satan Ürünler
        </div>
    </div>
@endsection

