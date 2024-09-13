@extends("admin.layout.adminlayout")

@section("content")
    <a href="{{route('contact.create')}}" class="btn btn-success">Oluştur</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Sosyal Medya İsmi</th>
            <th scope="col">Sosyal Medya Linki</th>
            <th scope="col">Güncelle</th>
            <th scope="col">Sil</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contact as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->social_name}}</td>
                <td>{{$item->social_url}}</td>
                <td><a href="{{route('contact.edit',$item->id)}}" class="btn btn-info">Güncelle</a></td>
                <td>
                    <form action="{{route('contact.destroy',$item->id)}}" method="POST">
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

