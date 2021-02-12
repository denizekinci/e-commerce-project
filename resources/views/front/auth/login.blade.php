@extends('front.layouts.master-product')
@section('title','Kullanıcı Girişi')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Anasayfa</a> <span class="divider">/</span></li>
            <li class="active">Giriş Yap</li>
        </ul>
        <h3> Giriş Yap</h3>
        <hr class="soft"/>

        <div class="row">


            <div class="span4">
                <div class="well">
                    <form>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail1">E-Posta</label>
                            <div class="controls">
                                <input class="span3"  type="text" id="inputEmail1" placeholder="E-posta">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword1">Şifre</label>
                            <div class="controls">
                                <input type="password" class="span3"  id="inputPassword1" placeholder="Şifre">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <a href="forgetpass.html">Şifremi Unuttum</a> <button type="submit" class="btn">Giriş Yap</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
