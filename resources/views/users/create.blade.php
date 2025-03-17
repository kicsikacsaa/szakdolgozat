<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <input name="email" placeholder="E-mail cím">
        <br>
        <input name="name" placeholder="Felhasználó neve">
        <br>
        <input name="password" type="password" placeholder="Jelszó">
        <br>
        <button type="submit">Küldés</button>
    </form>
</body>
</html>