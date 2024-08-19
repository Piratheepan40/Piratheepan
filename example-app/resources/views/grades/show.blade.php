<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Details</title>
</head>
<body>
    <table border="2">
        <tr>
            <td><a href="{{ url('grades') }}">Grade List</a></td>
        </tr>
        <tr>
            <td>Grade ID</td>
            <td>{{ $grade->id }}</td>
        </tr>
        <tr>
            <td>Grade Name</td>
            <td>{{ $grade->grade_name }}</td>
        </tr>
        <tr>
            <td>Grade Order</td>
            <td>{{ $grade->grade_order }}</td>
        </tr>
        <tr>
            <td>Grade Color</td>
            <td>{{ $grade->grade_color }}</td>
        </tr>
        <tr>
            <td>Grade Group</td>
            <td>{{ $grade->grade_group }}</td>
        </tr>
    </table> 
</body>
</html>
