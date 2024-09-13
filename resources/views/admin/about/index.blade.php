@extends("admin.layout.adminlayout")

@section("content")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">İsim Soyisim</th>
            <th scope="col">Telefon</th>
            <th scope="col">Email</th>
            <th scope="col">Website</th>
            <th scope="col">Adres</th>
            <th scope="col">Güncelle</th>
            <th scope="col">Sil</th>
        </tr>
        </thead>
        <tbody>
        @foreach($about as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->phone_number}}</td>
                <td>{{$item->email}}</td>
                <td><a href="{{$item->website}}" target="_blank">Git</a></td>
                <td>{{$item->address}}</td>
                <td><a class="btn btn-info">Güncelle</a></td>
                <td><a class="btn btn-danger">Sil</a></td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection

