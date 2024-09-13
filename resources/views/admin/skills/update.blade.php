@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('skills.update',$skill->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Yetenek İsmi</label>
            <input type="text" class="form-control" name="name" value="{{$skill->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Beceri Yüzdesi</label>
            <input type="text" class="form-control" name="skills_percent" value="{{$skill->skills_percent}}">
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
