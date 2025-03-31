@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form method="POST" action="{{ route('tables.create') }}">
                @csrf()
                <div class="form-group mb-3">
                    <label>Szám</label>
                    <input name="number" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Ülőhelyek</label>
                    <input name="seats" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Státusz</label>
                    <input name="status" class="form-control">
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Létrehozás
                </button>
            </form>
        </div>
    </div>
@stop