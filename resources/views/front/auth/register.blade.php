@extends('front.layouts.master-product')
@section('title','Kayıt ol')
@section('content')
    <div class="span9">
        <ul class="breadcrumb">
            <li><a href="index.html">Ana Sayfa</a> <span class="divider">/</span></li>
            <li class="active">Kayıt Ol</li>
        </ul>
        <h3> Kayıt Ol</h3>
        <hr class="soft"/>
        <div class="well">
            <form class="form-horizontal">
                <h3>Kişisel Bilgiler</h3>
                <div class="control-group">
                    <label class="control-label">Cinsiyet <sup>*</sup></label>
                    <div class="controls">
                        <select class="span1" name="days">
                            <option value="">-</option>
                            <option value="1">Erkek</option>
                            <option value="2">Kadın</option>
                            <option value="3">Belirtmek istemiyorum</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputFname">İsim<sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputFname" placeholder="İsim">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLname">Soyisim <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputLname" placeholder="Soyisim">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">E-posta <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder="E-posta">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Şifre <sup>*</sup></label>
                    <div class="controls">
                        <input type="password" placeholder="Şifre">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Doğum Tarihi <sup>*</sup></label>
                    <div class="controls">
                        <select class="span1" name="days">
                            <option value="">-</option>
                            <option value="1">1&nbsp;&nbsp;</option>
                            <option value="2">2&nbsp;&nbsp;</option>
                            <option value="3">3&nbsp;&nbsp;</option>
                            <option value="4">4&nbsp;&nbsp;</option>
                            <option value="5">5&nbsp;&nbsp;</option>
                            <option value="6">6&nbsp;&nbsp;</option>
                            <option value="7">7&nbsp;&nbsp;</option>
                        </select>
                        <select class="span1" name="days">
                            <option value="">-</option>
                            <option value="1">1&nbsp;&nbsp;</option>
                            <option value="2">2&nbsp;&nbsp;</option>
                            <option value="3">3&nbsp;&nbsp;</option>
                            <option value="4">4&nbsp;&nbsp;</option>
                            <option value="5">5&nbsp;&nbsp;</option>
                            <option value="6">6&nbsp;&nbsp;</option>
                            <option value="7">7&nbsp;&nbsp;</option>
                        </select>
                        <select class="span1" name="days">
                            <option value="">-</option>
                            <option value="1">1&nbsp;&nbsp;</option>
                            <option value="2">2&nbsp;&nbsp;</option>
                            <option value="3">3&nbsp;&nbsp;</option>
                            <option value="4">4&nbsp;&nbsp;</option>
                            <option value="5">5&nbsp;&nbsp;</option>
                            <option value="6">6&nbsp;&nbsp;</option>
                            <option value="7">7&nbsp;&nbsp;</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="submitAccount" value="Kayıt Ol" class="exclusive shopBtn">
                    </div>
                </div>
            </form>
        </div>

        <div class="well">
            <form class="form-horizontal" >
                <h3>Ödeme Detayları</h3>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <textarea></textarea>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="submitAccount" value="Kaydet" class="shopBtn exclusive">
                    </div>
                </div>
            </form>
        </div>


        <div class="well">
            <form class="form-horizontal" >
                <h3>Hesap Detayları</h3>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div><div class="control-group">
                    <label class="control-label">Fiels label <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" placeholder=" Field name">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="submit" name="submitAccount" value="Kaydet" class="exclusive shopBtn">
                    </div>
                </div>
            </form>
        </div>


    </div>

@endsection
