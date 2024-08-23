<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject List</title>
</head>
{{-- <style>
    table,td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        th{
            border: 2px solid black;
        }
        tr:nth-child(even) {
            background-color: #D6EEEE;
        }
        th, td {
            padding: 15px;
        }
</style> --}}
<body>
    <h2>Subject List</h2>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Subject Name</th>
            <th>Subject Order</th>
            <th>Subject Color</th>
        </tr>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->id }}</td>
                <td><a href="{{ url('subject', $subject->id) }}">{{ $subject->subject_name }}</a></td>
                <td>{{ $subject->subject_order }}</td>
                <td>{{ $subject->subject_color }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
