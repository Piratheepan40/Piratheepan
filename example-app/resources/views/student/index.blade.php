<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
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
    <table border="1">
        <tr>
            <th> Id</th>
            <th>First Nmae</th>
            <th>Last Name</th>
            <th>Grade ID</th>
            <th>Grade Name</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>  <a href="{{ url("/students/$student->id") }}">{{ $student->id }}</a></td>
                <td> <a href="{{ url("/students/$student->id") }}">{{ $student->first_name }}</a></td>
                <td> {{ $student->last_name }}</td>
                <td>{{ $student->grade_id }}</td>
                <td> <a href="{{ url("/grade/$student->grade_id") }}">{{ $student->grade->grade_name }}</a></td>
                <td> {{ $student->grade->grade_color }}</td>
                <td> {{ $student->grade->grade_group }}</td>
            
                
            </tr>
        @endforeach
    </table>
</body>

</html>
