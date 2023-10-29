@extends('auth.layouts.app')
@section('content')
<section class="row flexbox-container">
    <div class="col-xl-7 col-md-9 col-10 d-flex justify-content-center px-0">
        <div class="card bg-authentication rounded-0 mb-0">
            <div class="row m-0">
                <div class="col-lg-6 d-lg-block d-none text-center align-self-center">
                    <img src="../../../app-assets/images/pages/forgot-password.png" alt="branding logo">
                </div>
                <div class="col-lg-6 col-12 p-0">
                    <div class="card rounded-0 mb-0 px-2 py-1">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="mb-0">إسترجاع كلمة السر</h4>
                            </div>
                        </div>
                        <p class="px-2 mb-0">يرجى إدخال عنوان بريدك الإلكتروني وسنرسل لك تعليمات حول
                            كيفية إعادة تعيين كلمة المرور الخاصة بك .</p>
                        <div class="card-content">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger mb-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session()->has('status'))
                                    <div class="alert alert-success">
                                        {{ session()->get('status') }}
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="form-label-group">
                                        <input type="email" id="inputEmail"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="البريد الألكتروني" name="email" value="{{ old('email') }}"
                                            required>
                                        <label for="inputEmail">البريد الألكتروني</label>
                                    </div>
                                    <div class="float-md-left d-block mb-1">
                                        <a href="/admin/login" class="btn btn-outline-primary btn-block px-75">الرجوع
                                            لتسجيل الدخول</a>
                                    </div>
                                    <div class="float-md-right d-block mb-1">
                                        <button class="btn btn-primary btn-block px-75">إسترجاع
                                            كلمة السر</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
