@extends('auth.layouts.app')
@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-11 d-flex justify-content-center">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                    <img src="{{ asset('images/taciti.svg') }}" alt="branding logo" width="320px">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">تسجيل الدخول</h4>
                            </div>
                        </div>
                        <p class="px-2">مرحباً بك , الرجاء إدخال كافة البيانات لتسجيل الدخول</p>
                        <div class="card-content">
                            <div class="card-body pt-1 mb-3">
                                @if ($errors->any())
                                    <div class="alert alert-danger mb-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset
                                        class="form-label-group form-group position-relative has-icon-left">
                                        <input type="text"
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="user-name" placeholder="البريد الألكتروني" required
                                            name="email" value="{{ old('email') }}">
                                        <div class="form-control-position">
                                            <i class="feather icon-user"></i>
                                        </div>
                                        <label for="user-name">البريد الألكتروني</label>
                                    </fieldset>

                                    <fieldset class="form-label-group position-relative has-icon-left">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            id="user-password" placeholder="كلمة المرور" required
                                            name="password">
                                        <div class="form-control-position">
                                            <i class="feather icon-lock"></i>
                                        </div>
                                        <label for="user-password">كلمة المرور</label>
                                    </fieldset>
                                    <div
                                        class="form-group d-flex justify-content-between align-items-center">
                                        <div class="text-left">
                                            <fieldset class="checkbox">
                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" name="remember">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">تذكرني</span>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="text-right"><a href="/admin/forgot-password"
                                                class="card-link">نسيت كلمة السر ؟</a></div>
                                    </div>
                                    <button type="submit"
                                        class="btn btn-primary float-right btn-inline">تسجيل
                                        الدخول</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
