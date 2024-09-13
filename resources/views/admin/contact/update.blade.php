@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('contact.update',$contact->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Sosyal Medya İsmi</label>
            <input type="text" class="form-control" name="social_name" value="{{$contact->social_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Sosyal Medya Linki</label>
            <input type="text" class="form-control" name="social_url" value="{{$contact->social_url}}">
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
