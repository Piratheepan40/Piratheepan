<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3><a href="{{ url('students') }}">Student List</a></h3>
    <h1>{{$student->first_name}}  Detail</h1>
    <table border="2">

        <tr>
            <td>First Name</td>
            <td>{{ $student->first_name }}</td>
        </tr>
        <tr>
            <td>LastName</td>
            <td>{{ $student->last_name }}</td>
        </tr>
        <tr>
            <td>Grade ID</td>
            <td>{{ $student->grade_id }}</td>
        </tr>
        <tr>
            <td>Grade Name</td>
            <td> <a href="{{ url("/grade/$student->grade_id") }}">{{ $student->grade->grade_name }}</a></td>
        </tr>
        <tr>
            <td>Grade Color</td>
            <td>{{ $student->grade->grade_color }}</td>
        </tr>
        <tr>
            <td>Grade Group</td>
            <td>{{ $student->grade->grade_group }}</td>
        </tr>
        {{-- <tr>
            <td>Subject Name</td>
            <td>{{ $student->subject_name }}</td>
        </tr> --}}
    </table><br>
    <table border="2">
        <tr>
            <th> Subject </th>
            <th> Subject Order </th>
            <th> Subject Color</th>
        </tr>
        @foreach ($student->subjects as $subject)
            <tr>
                <td><a href="{{ url("/subject/$subject->id") }}">{{ $subject->subject_name }}</a></td>
                <td>{{ $subject->subject_order }}</td>
                <td>{{ $subject->subject_color }}</td>
            </tr> 
        @endforeach
        </td>
        </tr>
    </table>
</body>

</html>
