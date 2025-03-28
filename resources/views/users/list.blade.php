@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <a href="{{ route('users.store') }}" class="btn btn-primary">Létrehozás</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>Email</th>
                        <th>Telefonszám</th>
                        <th>Jelszó</th>
                        <th>Szerep</th>
                        <th>Foglalás</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($users) > 0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ $user->reservation ? $user->reservation->id : "" }}</td>
                                <td class="d-flex flex-col">
                                    <a class="btn btn-warning" href="{{ route('users.updateForm', ['user' => $user->id]) }}">Módosítás</a>
                                    <form method="POST" action="{{ route('users.delete', ['user' => $user->id]) }}">
                                        @csrf()
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h1>Nincs adat!</h1>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop