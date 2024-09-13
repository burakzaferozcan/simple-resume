@extends("admin.layout.adminlayout")

@section("content")
    <form action="{{route('experience.update',$experience->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Başlama Zamanı</label>
            <input type="date" class="form-control" name="job_start" value="{{$experience->job_start}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Bitiş Zamanı</label>
            <input type="date" class="form-control" name="job_finish" value="{{$experience->job_finish}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Firma İsmi</label>
            <input type="text" class="form-control" name="company_name" value="{{$experience->company_name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">İş Açıklaması</label>
            <input type="text" class="form-control" name="job_description" value="{{$experience->job_description}}">
        </div>

        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
@endsection
