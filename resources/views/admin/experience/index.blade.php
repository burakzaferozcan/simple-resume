@extends("admin.layout.adminlayout")

@section("content")
    <a href="{{route('experience.create')}}" class="btn btn-success">Oluştur</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Başlama Zamanı</th>
            <th scope="col">Bitiş Zamanı</th>
            <th scope="col">Firma İsmi</th>
            <th scope="col">Açıklama</th>
        </tr>
        </thead>
        <tbody>
        @foreach($experiences as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->job_start}}</td>
                <td>{{$item->job_finish}}</td>
                <td>{{$item->company_name}}</td>
                <td>{{$item->job_description}}</td>
                <td><a href="{{route('experience.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td>
                    <form action="{{route('experience.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

