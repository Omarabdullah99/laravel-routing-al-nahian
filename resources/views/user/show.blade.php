<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <h1>{{ $singleUser->name }} এর প্রোফাইল</h1>
    <p><strong>Age:</strong> {{ $singleUser->age }}</p>
    <p><strong>Salary:</strong> {{ $singleUser->salary }}</p>

    <a href="{{ route('alluser.show') }}">← সব Users ফিরে যাও</a>
</body>
</html>
