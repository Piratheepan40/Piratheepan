<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Details</title>
</head>

<body>
    <h2><a href="{{ url('grades') }}">Grade List</a></h2>

    <h2><a href="{{ url('students') }}">Student List</a></h2>

    <h3><a href="{{ url('subjects') }}">Subject List</a></h3>

    <h3>{{$grades->grade_name}} Grade Details</h3>
        <table border="2">
            <tr>
                <th>Grade ID</th>
                <th>Grade Name</th>
                <th>Grade Color</th>
                <th>Grade Group</th>

            </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->grade_id }}</td>
                <td>{{ $student->grade->grade_name }}</td>
                <td>{{ $student->grade->grade_color }}</td>
                <td>{{ $student->grade->grade_group }}</td>
            </tr>
        @endforeach
    </table><br>

    <h3>Subject Details</h3>
    <table border="2">
        <thead>
            <tr>
                <th>Subject ID</th>
                <th>Subject Name</th>
                <th>Subject Order</th>
                <th>Subject Color</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades->subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td> <a href="{{ url("/subject/$subject->id") }}">{{ $subject->subject_name }}</a></td>
                    <td>{{ $subject->subject_order }}</td>
                    <td>{{ $subject->subject_color }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>

    <h3>Student Details</h3>
    <table border="2">
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td> <a href="{{ url("/student/$student->id") }}">{{ $student->first_name }}</a></td>
                <td>{{ $student->last_name }}</td>
        @endforeach
    </table>
    <br>
</body>
</html>
