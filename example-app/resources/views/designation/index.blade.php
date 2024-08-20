<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Designation Name</th>
            <th>Designation Department</th>
            <th>Salary Range</th>

        </tr>
        @foreach ($designations as $designation)
            <tr>
                <td><a href="{{ url("/designation/{$designation->id}") }}">{{ $designation->id }}</a></td>
                <td>{{ $designation->designation_name}}</td>
                <td>{{ $designation->designation_department }}</td>
                <td>{{ $designation->salary_range }}</td>
                
            </tr>
        @endforeach
    </table>
</body>
</html>