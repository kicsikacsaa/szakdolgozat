<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('users.create') }}">
        @csrf
        <input name="email" placeholder="E-mail cím">
        <br>
        <input name="name" placeholder="Név">
        <br>
        <input name="password" type="password" placeholder="Jelszó">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>