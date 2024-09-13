@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('contact.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sosyal Medya İsmi</label>
            <input type="text" class="form-control" name="social_name">
        </div>
        <div class="mb-3">
            <label class="form-label">Sosyal Medya Linki</label>
            <input type="text" class="form-control" name="social_url">
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
