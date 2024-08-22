<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Details</title>
</head>
<body>
    <h3><a href="{{ url('subjects') }}">Subject List</a></h3>

    <!-- Subject Details -->
    <h3>Subject Details</h3>
    <table border="2">
        <tr>
            <td>Subject ID</td>
            <td>{{ $subject->id }}</td>
        </tr>
        <tr>
            <td>Subject Name</td>
            <td>{{ $subject->subject_name }}</td>
        </tr>
        <tr>
            <td>Subject Order</td>
            <td>{{ $subject->subject_order }}</td>
        </tr>
        <tr>
            <td>Subject Color</td>
            <td>{{ $subject->subject_color }}</td>
        </tr>
    </table>

    <h3>Students Enrolled in this Subject</h3>
    <table border="2">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade ID</th>
            <th>Grade Name</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->grade_id }}</td>
                <td>{{ $student->grade->grade_name }}</td>          
            </tr>
        @endforeach
    </table>

    <br>

    <h3>Subject Grade Details</h3>
    <table border="2">
        <tr>
            {{-- <th>Grade ID</th> --}}
            <th>Grade ID</th>
            <th>Grade Name</th>
            <th>Grade Color</th>
            <th>Grade Group</th>
            {{-- <th>Subject ID</th> --}}
           
        </tr>
        @foreach ($students as $student)
            <tr>
                {{-- <td>{{ $student->grade_id }}</td> --}}
                
                <td>{{ $student->grade_id }}</td>
                <td>{{ $student->grade->grade_name }}</td>
                <td>{{ $student->grade->grade_color }}</td>
                <td>{{ $student->grade->grade_group }}</td>
                {{-- <td>{{ $subject->id }}</td>  --}}
             
            </tr>
        @endforeach
    </table>
</body>
</html>
