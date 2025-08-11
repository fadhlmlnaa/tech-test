<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Technical Test</title>
</head>

<body>
    <h2>Public Table</h2>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Email</td>
                <!-- <td>Password</td> -->
            </tr>
        </thead>
        <tbody>
            @foreach ($public as $item)
            <tr>
                <td>
                    {{ $item->id }}
                </td>
                <td>
                    {{ $item->name }}
                </td>
                <td>
                    {{ $item->email }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>