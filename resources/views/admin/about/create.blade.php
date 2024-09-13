@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('about.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">İsim Soyisim</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Telefon</label>
            <input type="text" class="form-control" name="phone_number">
        </div>
        <div class="mb-3">
            <label class="form-label">E-Posta</label>
            <input type="text" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">Website</label>
            <input type="text" class="form-control" name="website">
        </div>
        <div class="mb-3">
            <label class="form-label">Adres</label>
            <input type="text" class="form-control" name="address">
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
