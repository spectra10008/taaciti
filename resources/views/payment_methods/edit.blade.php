<form class="form form-vertical" action="/panel-admin/payment-methods/{{ $paymentMethod->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">طرق الدقع بالعربي</label>
                    <input type="text" class="form-control @error('method_ar') is-invalid @enderror"
                        name="method_ar" value="{{ old('method_ar',$paymentMethod->method_ar) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">طرق الدفع بالانجليزي</label>
                    <input type="text" class="form-control @error('method_en') is-invalid @enderror"
                        name="method_en" value="{{ old('method_en',$paymentMethod->method_en) }}"
                        required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">الايقونة</label>
                    <input type="file"
                        class="form-control @error('icon') is-invalid @enderror"
                        name="icon">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">
                 تعديل
                </button>
            </div>
        </div>
    </div>
</form>
