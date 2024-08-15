<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <td><a href="{{url('students')}}">Student List</a></td>
    <tr>
        <td>First Name</td>
        <td>{{$student->first_name}}</td>
    </tr>
    <tr>
        <td>LastName</td>
        <td>{{$student->last_name}}</td>
    </tr>
</table> 
</body>
</html>