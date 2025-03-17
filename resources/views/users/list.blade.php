<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <h1>Lista</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>E-mail cím</th>
            <th>Felhasználónév</th>
            <th colspan="2">Műveletek</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    <a href="{{ route('users.updateForm', ['user' => $user->id]) }}">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('users.delete', ['user' => $user->id]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>