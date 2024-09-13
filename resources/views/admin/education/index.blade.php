@extends("admin.layout.adminlayout")

@section("content")
    <a href="{{route('education.create')}}" class="btn btn-success">Oluştur</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Başlama Zamanı</th>
            <th scope="col">Bitiş Zamanı</th>
            <th scope="col">Okul İsmi</th>
            <th scope="col">Açıklama</th> 
            <th scope="col">Güncelle</th>
            <th scope="col">Sil</th>
        </tr>
        </thead>
        <tbody>
        @foreach($education as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->start_edu}}</td>
                <td>{{$item->end_edu}}</td>
                <td>{{$item->school_name}}</td>
                <td>{{$item->school_description}}</td>
                <td><a href="{{route('education.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td>
                    <form action="{{route('education.destroy',$item->id)}}" method="POST">
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

