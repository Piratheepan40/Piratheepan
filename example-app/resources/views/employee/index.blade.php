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
            <th> Id</th>
            <th>First Nmae</th>
            <th>Last Name</th>
            <th>Date Of Birth</th>
            <th>NIC</th>
            <th>Join Date</th>
            <th>Gender</th>
            <th>Designation</th>
            <th>Address</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Show</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->nic_number }}</td>
                <td>{{ $employee->join_date }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->designation }}</td>
                <td>{{ $employee->adreess }}</td>
                <td>{{ $employee->created_at }}</td>
                <td>{{ $employee->updated_at }}</td>
                <td><a href="{{ url("/employee/$employee->id") }}">Show link</a></td>
            </tr>
        @endforeach
    </table>
</body>

</html>
