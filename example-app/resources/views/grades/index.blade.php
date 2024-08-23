<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Grade Name</th>
            <th>Grade Order</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
           
        </tr>
        @foreach ($grades as $grade)
            <tr>
                <td>{{ $grade->id }}</td>
                <td><a href="{{ url("/grade/{$grade->id}") }}">{{ $grade->grade_name }}</a></td>
                <td>{{ $grade->grade_order }}</td>
                <td>{{ $grade->grade_color }}</td>
                <td>{{ $grade->grade_group }}</td>
                
                
            </tr>
        @endforeach
    </table>
</body>

</html>
