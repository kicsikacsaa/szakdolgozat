@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form method="POST" action="{{ route('users.create') }}">
                @csrf()
                <div class="form-group mb-3">
                    <label>Név</label>
                    <input name="name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input name="email" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Telefonszám</label>
                    <input name="phone" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Jelszó</label>
                    <input name="password" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label>Szerep</label>
                    <input name="role" class="form-control">
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Létrehozás
                </button>
            </form>
        </div>
    </div>
@stop