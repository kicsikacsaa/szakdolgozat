@extends("layout")

@section("content")
    <div class="row">
        <div class="mx-auto col-4">
            <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
                @csrf()
                <div class="form-group">
                    <label>Név</label>
                    <input name="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input name="email" class="form-control" value="{{ $user->email }}">
                </div>
                <div class="form-group mb-3">
                    <label>Telefonszám</label>
                    <input name="phone" class="form-control" value="{{ $user->phone }}">
                </div>
                <div class="form-group mb-3">
                    <label>Jelszó</label>
                    <input name="password" class="form-control" value="{{ $user->password }}">
                </div>
                <div class="form-group mb-3">
                    <label>Szerep</label>
                    <input name="role" class="form-control" value="{{ $user->role }}">
                </div>
                <button type="submit" class="btn btn-success mt-3">
                    Létrehozás
                </button>
            </form>
        </div>
    </div>
@stop