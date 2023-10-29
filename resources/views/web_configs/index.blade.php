@extends('layouts.app')
@section('title', 'إعدادات النظام')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">إعدادات النظام</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">إعدادات النظام</h4>
                </div>
                <div class="card-content">

                    <div class="card-body card-dashboard">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="form form-vertical" action="/panel-admin/web-configs" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">اسم الموقع عربي</label>
                                            <input type="text"
                                                class="form-control @error('website_title_ar') is-invalid @enderror"
                                                name="website_title_ar"
                                                value="{{ old('website_title_ar', $configs['website_title_ar'] ?? '-') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">إسم الموقع إنجليزي</label>
                                            <input type="text"
                                                class="form-control @error('website_title_en') is-invalid @enderror"
                                                name="website_title_en"
                                                value="{{ old('website_title_en', $configs['website_title_en'] ?? '-') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">الوصف بالعربي </label>
                                            <textarea name="description_ar" class="form-control @error('description_ar') is-invalid @enderror"
                                                placeholder="Website Arabic Description">{{ old('description_ar', $configs['description_ar'] ?? '-') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical">الوصف بالإنجليزي  </label>
                                            <textarea name="description_en" class="form-control @error('description_en') is-invalid @enderror" >{{ old('description_en', $configs['description_en'] ?? '-') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="email-id-vertical"> الكلمات المفتاحية </label>
                                            <textarea name="keywords" class="form-control @error('keywords') is-invalid @enderror" placeholder="keywords">{{ old('keywords', $configs['keywords'] ?? '-') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رقم الهاتف للمكالمات</label>
                                            <input type="number" class="form-control @error('call_phone') is-invalid @enderror"
                                                name="call_phone"
                                                value="{{ old('call_phone', $configs['call_phone'] ?? '-') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رقم هاتف الواتساب</label>
                                            <input type="number" class="form-control @error('whatsapp_phone') is-invalid @enderror"
                                                name="whatsapp_phone"
                                                value="{{ old('whatsapp_phone', $configs['whatsapp_phone'] ?? '-') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">البريد الالكتروني</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" placeholder="Email"
                                                value="{{ old('email', $configs['email'] ?? '-') }}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">العنوان بالعربي</label>
                                            <input type="text"
                                                class="form-control @error('address_ar') is-invalid @enderror" name="address_ar"
                                                value="{{ old('address_ar', $configs['address_ar'] ?? '-') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">العنوان بالإنجليزي</label>
                                            <input type="text"
                                                class="form-control @error('address_en') is-invalid @enderror" name="address_en"
                                                 value="{{ old('address_en', $configs['address_en'] ?? '-') }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رابط صفحة فيسبوك</label>
                                            <input type="text"
                                                class="form-control @error('facebook_url') is-invalid @enderror"
                                                name="facebook_url"
                                                value="{{ old('facebook_url', $configs['facebook_url'] ?? '-') }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رابط صفحة تويتر</label>
                                            <input type="text"
                                                class="form-control @error('twitter_url') is-invalid @enderror"
                                                name="twitter_url"
                                                value="{{ old('twitter_url', $configs['twitter_url'] ?? '-') }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رابط صفحة أنستغرام</label>
                                            <input type="text"
                                                class="form-control @error('instagram_url') is-invalid @enderror"
                                                name="instagram_url"
                                                value="{{ old('instagram_url', $configs['instagram_url'] ?? '-') }}"
                                                >
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">رابط صفحة لينكدن</label>
                                            <input type="text"
                                                class="form-control @error('linkedin_url') is-invalid @enderror"
                                                name="linkedin_url"
                                                value="{{ old('linkedin_url', $configs['linkedin_url'] ?? '-') }}">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first-name-vertical">اللوقو</label>
                                            <input type="file"
                                                class="form-control @error('logo') is-invalid @enderror" name="logo"
                                                @if ($configs == null) required @endif >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        @if ($configs == null)
                                            <button type="submit" class="btn btn-primary mr-1 mb-1">إضافة</button>
                                        @else
                                            <button type="submit" class="btn btn-success mr-1 mb-1">تحديث</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Add </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" action="/admin-panel/teams" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">الإسم عربي</label>
                                        <input type="text" class="form-control @error('name_ar') is-invalid @enderror"
                                            name="name_ar" placeholder="الإسم عربي" value="{{ old('name_ar') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="first-name-vertical">الإسم انجليزي</label>
                                        <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                                            name="name_en" placeholder="الإسم انجليزي" value="{{ old('name_en') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">الموقع الوظيفي عربي</label>
                                        <input type="text"
                                            class="form-control @error('job_title_ar') is-invalid @enderror"
                                            name="job_title_ar" placeholder="الموقع الوظيفي عربي"
                                            value="{{ old('job_title_ar') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">الموقع الوظيفي انجليزي</label>
                                        <input type="text"
                                            class="form-control @error('job_title_en') is-invalid @enderror"
                                            name="job_title_en" placeholder="الموقع الوظيفي انجليزي"
                                            value="{{ old('job_title_en') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">فيسبوك</label>
                                        <input type="text"
                                            class="form-control @error('facebook_link') is-invalid @enderror"
                                            name="facebook_link" placeholder="فيسبوك" value="{{ old('facebook_link') }}"
                                            required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">لنكدن</label>
                                        <input type="text"
                                            class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                                            placeholder="لنكدن" value="{{ old('linkedin') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">الصورة</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            name="image" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- edit Modal -->
    <div class="modal fade text-left" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">تعديل </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-section">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptjs')
    <script>
        $(document).ready(function() {
            $("button[name='edit_button']").click(function() {

                var edit_val = this.value;

                $(".form-section").html(" ");
                $(".form-section").append(
                    "<center><img src='{{ asset('dashboard/images/loader.gif') }}'  width='300px'/></center>"
                );
                $.get("/admin-panel/teams/" + edit_val + "/edit", function(data, status) {
                    $(".form-section").html(data);
                }).fail(function() {
                    $(".form-section").html(" ");
                    $(".form-section").append(
                        "<div class='alert alert-danger' role='alert'>عذراً , حصل خطأ ما !!</div>"
                    );
                });
            });
        });
    </script>
@endsection
