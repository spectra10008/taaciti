<form class="form form-vertical" action="/panel-admin/offers/{{ $offer->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-body">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">العنوان بالعربي</label>
                    <input type="text"
                        class="form-control @error('title_ar') is-invalid @enderror"
                        name="title_ar" value="{{ old('title_ar',$offer->title_ar) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">العنوان بالانجليزي</label>
                    <input type="text"
                        class="form-control @error('title_en') is-invalid @enderror"
                        name="title_en" value="{{ old('title_en',$offer->title_en) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">الوصف بالعربي</label>
                    <input type="text"
                        class="form-control @error('detail_ar') is-invalid @enderror"
                        name="detail_ar" value="{{ old('detail_ar',$offer->detail_ar) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">الوصف بالانجليزي</label>
                    <input type="text"
                        class="form-control @error('detail_en') is-invalid @enderror"
                        name="detail_en" value="{{ old('detail_en',$offer->detail_en) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">الصورة</label>
                    <input type="file"
                        class="form-control @error('image') is-invalid @enderror"
                        name="image">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical"> الحالة </label>
                    <select name="is_active" id="" class="form-control @error('is_active') is-invalid @enderror">
                        <option value="1"@selected(old('is_active',$offer->is_active) == 1)>نشط</option>
                        <option value="0"@selected(old('is_active',$offer->is_active) == 0)>غير نشط</option>
                    </select>
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
