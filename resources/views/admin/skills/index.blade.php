@extends("admin.layout.adminlayout")

@section("content")
    <a href="{{route('skills.create')}}" class="btn btn-success">Oluştur</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Yetenek İsimi</th>
            <th scope="col">Beceri Yüzdesi</th>
            <th scope="col">Güncelle</th>
            <th scope="col">Sil</th>

        </tr>
        </thead>
        <tbody>
        @foreach($skill as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->skills_percent}}</td>
                <td><a href="{{route('skills.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td>
                    <form action="{{route('skills.destroy',$item->id)}}" method="POST">
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

