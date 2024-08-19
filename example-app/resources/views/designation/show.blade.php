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
        <td><a href="{{url('designations')}}">Designation List</a></td>
        <tr>
            <td>ID</td>
            <td>{{$designation->id}}</td>
        </tr>
        <tr>
            <td>Age</td>
            <td>{{$designation->age}}</td>
        </tr>
        <tr>
            <td>Address</td>
            <td>{{$designation->address}}</td>
        </tr>
        <tr>
            <td>Designation</td>
            <td>{{ $designation->designation}}</td>
        </tr>
        <tr>
            <td>NIC</td>
            <td>{{ $designation->nic_number }}</td>
        </tr>
        <tr>
            <td>Salary</td>
            <td>{{ $designation->salary }}</td>
        </tr>
    </table>
</body>
</html>