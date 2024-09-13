@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('education.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Başlama Zamanı</label>
            <input type="date" class="form-control" name="start_edu">
        </div>
        <div class="mb-3">
            <label class="form-label">Bitiş Zamanı</label>
            <input type="date" class="form-control" name="end_edu">
        </div>
        <div class="mb-3">
            <label class="form-label">Okul İsmi</label>
            <input type="text" class="form-control" name="school_name">
        </div>
        <div class="mb-3">
            <label class="form-label">Okul Açıklaması</label>
            <input type="text" class="form-control" name="school_description">
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
