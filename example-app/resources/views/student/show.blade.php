<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2">
    <td><a href="{{url('students')}}">Student List</a></td>
    <tr>
        <td>First Name</td>
        <td>{{$student->first_name}}</td>
    </tr>
    <tr>
        <td>LastName</td>
        <td>{{$student->last_name}}</td>
    </tr>
    <tr>
        <td>Grade ID</td>
        <td>{{$student->grade_id}}</td>
    </tr>
    <tr>
        <td>Grade Name</td>
        <td>{{ $student->grade->grade_name }}</td>
    </tr>
    <tr>
        <td>Grade Color</td>
        <td>{{ $student->grade->grade_color }}</td>
    </tr>
    <tr>
        <td>Grade Group</td>
        <td>{{ $student->grade->grade_group }}</td>
    </tr>
    
</table> 
</body>
</html>