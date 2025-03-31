@extends("layout")

@section("content")
    <div class="row">
        <div class="col-12">
            <a href="{{ route('reservations.create') }}" class="btn btn-primary">Létrehozás</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Időpont</th>
                        <th>Státusz</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($reservations) > 0)
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->status }}</td>
                                <td class="d-flex flex-col">
                                    <a class="btn btn-warning" href="{{ route('reservations.updateForm', ['reservation' => $reservation->id]) }}">Módosítás</a>
                                    <form method="POST" action="{{ route('reservations.delete', ['reservation' => $reservation->id]) }}">
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