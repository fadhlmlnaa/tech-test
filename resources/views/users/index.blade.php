<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Odoo Nih</title>
</head>

<body>
    <h1>Data Odoo Nih</h1>
    <ul>
        @foreach ($users as $user)
        <li>{{ $user['id'] }} - {{ $user['name'] }} ({{ $user['login'] }})</li>
        @endforeach
    </ul>
</body>

</html>