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
            <th>Designation ID</th>
            <th>Designation Name</th>
            <th>Designation Department</th>
            <th>Salary Range</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td><a href="{{ url("/employee/$employee->id") }}">{{ $employee->id }}</a></td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->nic_number }}</td>
                <td>{{ $employee->join_date }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->designation_id}}</td>
                <td><a href="{{ url("/designation/$employee->designation_id") }}">{{ $employee->designation->designation_name}}</a></td>
                <td>{{ $employee->designation->designation_department}}</td>
                <td>{{ $employee->designation->salary_range}}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>