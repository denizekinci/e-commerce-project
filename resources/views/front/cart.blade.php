@extends('front.layouts.master')
@section('title','Sepet')
@section('content')
    <div class="span12">
        <ul class="breadcrumb">
            <li><a href="index.html">Ana Sayfa</a> <span class="divider">/</span></li>
            <li class="active">Ödeme</li>
        </ul>
        <div class="well well-small">
            <h1>Ödeme <small class="pull-right"> Sepetinizde 2 ürün bulunmaktadır. </small></h1>
            <hr class="soften" />

            <table class="table table-bordered table-condensed">
                <thead>
                <tr>
                    <th>Ürün</th>
                    <th>Açıklama</th>
                    <th> Referans Kodu </th>
                    <th>Stok</th>
                    <th>Birim Fiyat</th>
                    <th>Adet </th>
                    <th>Toplam</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img width="100" src="assets/img/e.jpg" alt=""></td>
                    <td>Ürün Adı<br>Karat : 22<br>Model : n/a</td>
                    <td> - </td>
                    <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                    <td>$50.00</td>
                    <td>
                        <input class="span1" style="max-width:34px" placeholder="1"
                               id="appendedInputButtons" size="16" type="text" value="2">
                        <div class="input-append">
                            <button class="btn btn-mini" type="button">-</button><button
                                class="btn btn-mini" type="button"> + </button><button
                                class="btn btn-mini btn-danger" type="button"><span
                                    class="icon-remove"></span></button>
                        </div>
                    </td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td><img width="100" src="assets/img/f.jpg" alt=""></td>
                    <td>Ürün Adı ve Detayları<br>Karat:24 <br>Model:HBK24</td>
                    <td> - </td>
                    <td><span class="shopBtn"><span class="icon-ok"></span></span> </td>
                    <td>$348.42</td>
                    <td>
                        <input class="span1" style="max-width:34px" placeholder="1" size="16" type="text">
                        <div class="input-append">
                            <button class="btn btn-mini" type="button">-</button><button
                                class="btn btn-mini" type="button">+</button><button
                                class="btn btn-mini btn-danger" type="button"><span
                                    class="icon-remove"></span></button>
                        </div>
                    </td>
                    <td>$348.42</td>
                </tr>
                <tr>
                    <td colspan="6" class="alignR">Toplam Tutar: </td>
                    <td> $448.42</td>
                </tr>
                <tr>
                    <td colspan="6" class="alignR">Toplam Tutar: </td>
                    <td> $448.42</td>
                </tr>
                <tr>
                    <td colspan="6" class="alignR">Toplam Tutar: </td>
                    <td> $448.42</td>
                </tr>
                <tr>
                    <td colspan="6" class="alignR">Toplam Tutar: </td>
                    <td class="label label-primary"> $448.42</td>
                </tr>
                </tbody>
            </table><br />


            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>
                        <form class="form-inline">
                            <label style="min-width:159px"> Kupon Kodu: </label>
                            <input type="text" class="input-medium" placeholder="Kod">
                            <button type="submit" class="shopBtn"> Ekle</button>
                        </form>
                    </td>
                </tr>

                </tbody>
            </table>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>Kargo ve Vergi Hesaplama</td>
                </tr>
                <tr>
                    <td>
                        <form class="form-horizontal">
                            <div class="control-group">
                                <label class="span2 control-label" for="inputEmail">Ülke</label>
                                <div class="controls">
                                    <input type="text" placeholder="Ülke">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="span2 control-label" for="inputPassword">Posta Kodu</label>
                                <div class="controls">
                                    <input type="password" placeholder="Posta Kodu">
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <button type="submit" class="shopBtn">Hesapla</button>
                                </div>
                            </div>
                        </form>
                    </td>
                </tr>
                </tbody>
            </table>
            <a href="products.html" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Alışverişe devam et </a>
            <a href="login.html" class="shopBtn btn-large pull-right">İleri <span
                    class="icon-arrow-right"></span></a>

        </div>
    </div>
@endsection
