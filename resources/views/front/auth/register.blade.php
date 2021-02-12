@extends('front.layouts.master-product')
@section('title','Kayıt ol')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="{{route('homepage')}}">Anasayfa</a> <span class="divider">/</span></li>
            <li class="active">Kayıt Ol</li>
        </ul>
        <h3> Kayıt Ol</h3>
        <div class="well">

            @include('front.layouts.errors.errors')

            <form class="form-horizontal" method="post" action="{{route('register')}}">

                {{csrf_field()}}



                <div class="control-group">
                    <label class="control-label" for="inputFname1">Ad <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputFname1" name="firstName" placeholder="Adınız">
                        @if($errors->has('firstName'))
                            <strong style="color: red">{{$errors->first('firstName')}}</strong>
                        @endif
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="inputLnam">Soyad <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLnam" name="lastName" placeholder="Soyadınız">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input_email">Telefon <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_email" name="phone" placeholder="Telefon numaranız" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="input_email">E-Posta <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="text" id="input_email" name="email" placeholder="E-posta Adresiniz" >
                        @if($errors->has('email'))
                            <strong style="color: red">{{$errors->first('email')}}</strong>
                        @endif
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Şifre <sup style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password" placeholder="Şifre" required>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPassword1">Şifre Tekrar <sup
                            style="color: red">*</sup></label>
                    <div class="controls">
                        <input type="password" id="inputPassword1" name="password_confirmation" placeholder="Şifre Tekrar"
                               required>
                    </div>
                </div>

                <p><sup>*</sup>Zorunlu Alanlar </p>

                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-large btn-success" type="submit" value="Kayıt Ol"/>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection
