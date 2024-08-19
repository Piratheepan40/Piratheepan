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
        <table border="1">
            <tr>
                <th> Id</th>
                <th>Age</th>
                <th>Address</th>
                <th>Designation</th>
                <th>NIC</th>
                <th>Salary</th>
                <th>Show</th>
            </tr>
            @foreach ($designations as $designation)
                <tr>
                    <td>{{ $designation->id }}</td>
                    <td>{{ $designation->age }}</td>
                    <td>{{ $designation->address }}</td>
                    <td>{{ $designation->designation }}</td>
                    <td>{{ $designation->nic_number }}</td>
                    <td>{{ $designation->salary }}</td>
                    
                   
                    <td><a href="{{ url("/designation/$designation->id") }}">Show link</a></td>
                </tr>
            @endforeach
        </table>
</body>
</html>