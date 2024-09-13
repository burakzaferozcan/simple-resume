@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('education.update',$education->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Başlama Zamanı</label>
            <input type="date" class="form-control" name="start_edu" value="{{$education->start_edu}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Bitiş Zamanı</label>
            <input type="date" class="form-control" name="end_edu" value="{{$education->end_edu}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Okul İsmi</label>
            <input type="text" class="form-control" name="school_name" value="{{$education->school_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Okul Açıklaması</label>
            <input type="text" class="form-control" name="school_description"
                   value="{{$education->school_description}}">
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
