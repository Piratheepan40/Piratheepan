<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <table border="2">
            <td><a href="{{url('employees')}}">Employee List</a></td>
            <tr>
                <td>First Name</td>
                <td>{{$employee->first_name}}</td>
            </tr>
            <tr>
                <td>LastName</td>
                <td>{{$employee->last_name}}</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>{{$employee->date_of_birth}}</td>
            </tr>
            <tr>
                <td>NIC</td>
                <td>{{ $employee->nic_number}}</td>
            </tr>
            <tr>
                <td>Joint Date</td>
                <td>{{ $employee->join_date }}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{ $employee->gender }}</td>
            </tr>
            <tr>
                <td>Designation</td>
                <td>{{ $employee->designation }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{ $employee->designation->address }}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{ $employee->created_at }}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{ $employee->updated_at }}</td>
            </tr>
        </table>
</body>
</html>