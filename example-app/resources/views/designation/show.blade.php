<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2><a href="{{ url('designations') }}">Designation List</a></h2>

    <h2><a href="{{ url('employees') }}">Employee List</a></h2>
    <table border="2">            
            {{-- <tr>
                <td>Designation ID</td>
                <td>{{ $designation->id }}</td>
            </tr>
            <tr>
                <td>Designation Name</td>
                <td>{{ $designation->designation_name }}</td>
            </tr>
            <tr>
                <td>Designation Department</td>
                <td>{{ $designation->designation_department }}</td>
            </tr>
            <tr>
                <td>Salary Range</td>
                <td>{{ $designation->salary_range }}</td>
            </tr> --}}
            
        <tr>
             <th> Id</th>
            <th>First Name</th>
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
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->date_of_birth }}</td>
                <td>{{ $employee->nic_number }}</td>
                <td>{{ $employee->join_date }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $designation->id }}</td>
                <td>{{ $employee->designation->designation_name }}</td>
                <td>{{ $employee->designation->designation_department }}</td>
                <td>{{ $employee->designation->salary_range }}</td>
            </tr>
        @endforeach
            
    </table>
</body>
</html>