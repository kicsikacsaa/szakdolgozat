@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <a href="{{ route('tables.create') }}" class="btn btn-primary">Létrehozás</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Szám</th>
                        <th>Ülőhelyek</th>
                        <th>Státusz</th>
                        <th>Foglalás</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($tables) > 0)
                        @foreach($tables as $table)
                            <tr>
                                <td>{{ $table->id }}</td>
                                <td>{{ $table->number }}</td>
                                <td>{{ $table->seats }}</td>
                                <td>{{ $table->status }}</td>
                                <td>{{ $table->reservation ? $table->reservation->id : "" }}</td>
                                <td class="d-flex flex-col">
                                    <a class="btn btn-warning" href="{{ route('tables.updateForm', ['table' => $table->id]) }}">Módosítás</a>
                                    <form method="POST" action="{{ route('tables.delete', ['table' => $table->id]) }}">
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