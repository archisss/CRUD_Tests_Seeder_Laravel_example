<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Description</th>
            <th>Type</th>
            <th>Number of Days Old</th>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet ->id}}</td>
                <td>{{ $pet ->description}}</td>
                <td>{{ $pet ->type}}</td>
                <td>{{ \Carbon\Carbon::parse($pet->birthday)->diffInDays(now()) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
