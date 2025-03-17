<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerkesztés</title>
</head>
<body>
    <form method="POST" action="{{ route('users.update', ['user' => $user->id]) }}">
    @csrf
    <input name="email" value="{{ $user->email }}">
    <br>
    <input name="name" value="{{ $user->name }}">
    <br>
    <input type="password" name="password">
    <br>
    <button type="submit">Update</button>
    </form>
</body>
</html>