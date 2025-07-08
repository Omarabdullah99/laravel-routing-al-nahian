<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
    <h1>সকল Users</h1>
    <ul>
        @foreach($allUsersResult as $user)
            <li>
                <a href="{{ route('single.user', $user->id) }}">
                    {{ $user->name }} ({{ $user->age }}) ({{ $user->salary }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
