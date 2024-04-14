@extends('admin.layouts.master')
@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="d-flex flex-row">
                <div class="flex-row-fluid ml-lg-8">
                    <div class="card card-custom card-stretch">
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder pt-3 text-dark">Profili Düzenle</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form class="form" id="postInfo" method="post" action="{{route('admin.updateProfile', $user->id)}}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mb-6">İletişim Bilgileri</h5>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Telefon</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control form-control-lg form-control-solid" name="phone" value="{{$user->phone}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Email Adres</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <div class="input-group input-group-lg input-group-solid">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-at"></i>
                                                </span>
                                            </div>
                                            <input type="email" class="form-control form-control-lg form-control-solid" name="email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-xl-3"></label>
                                    <div class="col-lg-9 col-xl-6">
                                        <h5 class="font-weight-bold mt-10 mb-6">Kullanıcı Bilgileri</h5>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Ad Soyad</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" name="name" type="text" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label">Kullanıcı Adı</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input class="form-control form-control-lg form-control-solid" name="username" type="text" value="{{$user->username}}">
                                    </div>
                                </div>
                            </form>

                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label">Şifre</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input disabled type="password" class="form-control form-control-lg form-control-solid" value="123456789">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a class="btn btn-primary btn-active-light-primary mb-1 py-3" onclick="showUpdate();">Güncelle</a>
                                </div>
                            </div>


                            <div class="form-group row mt-5 d-none" id="showPswrdUpdate">
                                <label class="col-xl-3 col-lg-3 col-form-label"></label>
                                <div class="col-lg-9 col-xl-6 mt-5">
                                    <div class="d-flex flex-wrap align-items-center mb-10">
                                        <div id="kt_signin_password_edit" class="flex-row-fluid">
                                            <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" method="post" action="{{route('admin.updatePassword', $user->id)}}" novalidate="novalidate">
                                                @csrf
                                                @method('put')
                                                <div class="row mb-1">
                                                    <div class="col-lg-12">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container mt-5">
                                                            <label for="currentPassword" class="form-label fs-6 fw-bolder mb-3">Eski Şifre</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid" name="oldPassword" id="currentPassword">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container mt-5">
                                                            <label for="newPassword" class="form-label fs-6 fw-bolder mb-3">Yeni Şifre</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid" name="newPassword" id="newPassword">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="fv-row mb-0 fv-plugins-icon-container mt-5">
                                                            <label for="confirmPassword" class="form-label fs-6 fw-bolder mb-3">Yeni Şifre Tekrar</label>
                                                            <input type="password" class="form-control form-control-lg form-control-solid" name="confirmPassword" id="confirmPassword">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex mt-3">
                                                    <button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Şifreyi Güncelle</button>
                                                    <a class="btn btn-secondary btn-active-light-primary ml-3 px-6" onclick="passwordCancel();">İptal</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a onclick="event.preventDefault(); document.forms['postInfo'].submit();" class="btn btn-primary mr-2">Kaydet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
