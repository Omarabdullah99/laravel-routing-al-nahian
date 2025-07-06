<!DOCTYPE html>
<html>
<head>
    <title>Profile Details</title>
</head>
<body>
    <h1>{{ $profile->name }} এর প্রোফাইল</h1>
    <p><strong>Email:</strong> {{ $profile->email }}</p>
    <p><strong>Bio:</strong> {{ $profile->bio }}</p>

    <a href="{{ route('profiles.index') }}">← সব প্রোফাইলে ফিরে যাও</a>
</body>
</html>
