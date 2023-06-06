<!DOCTYPE html>
<html>

<head>
    <title>Empoloyees</title>
</head>

<body>
    <h1>Empoloyees</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>start_date</th>
                <th>Details</th>
                <th>Profile_image</th>

            </tr>
        </thead>
        <tbody>
            @foreach($employees as $item)
            <tr>
                <td>{{ $item->employee_id}}</td>
                <td>{{ $item->name}}</td>
                <td>{{ $item->start_date}}</td>
                <td>{{ $item->details}}</td>
                <td><img src="{{ $item->profile_image }}" alt="Image" style="max-width: 50px; max-height: 50px; "></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('departments') }}">Go to Departments</a>

    <a href="{{ route('Allview') }}">Go to Allview</a>
</body>

</html>