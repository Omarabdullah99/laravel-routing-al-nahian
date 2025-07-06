<!DOCTYPE html>
<html>
<head>
    <title>Profiles</title>
</head>
<body>
    <h1>সকল প্রোফাইল</h1>
    <ul>
        @foreach($profiles as $profile)
            <li>
                <a href="{{ route('profiles.show', $profile->id) }}">
                    {{ $profile->name }} ({{ $profile->email }})
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>
