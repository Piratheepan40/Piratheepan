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


    <h3>Grade Details</h3>
    {{-- <table border="2">
        <tr>
            <td>Grade ID</td>
            <td>{{ $student->grade_id}}</td>
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
            <td>Subject Color</td>
            <td>{{ $grade->grade_color }}</td>
        </tr>
    </table> --}}



    <table border="2">

        <tr>
            <th> Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade ID</th>
            <th>Grade Name</th>
            <th>Grade Color</th>
            <th>Grade Group</th>

        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->grade_id }}</td>
                <td>{{ $student->grade->grade_name }}</td>
                <td>{{ $student->grade->grade_color }}</td>
                <td>{{ $student->grade->grade_group }}</td>
            </tr>
         @endforeach
    </table><br>
    <table border="2">
        <tr>
      <th>Common Subject</th>
      <td>@foreach ($grades->subjects as $subject)
        {{$subject->subject_name}}
        @endforeach </td>
        </tr>
    </table>
</body>

</html>
