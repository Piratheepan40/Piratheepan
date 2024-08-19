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
            <th>Grade ID</th>
            <th>Grade Name</th>
            <th>Grade Color</th>
            <th>Grade Group</th>

            {{-- <th>Create at</th> --}}
            {{-- <th>Update </th> --}}
        </tr>
        @foreach ($students as $student)
            <tr>
                <td> {{ $student->id }}</td>
                <td> <a href="{{ url("/student/$student->id") }}">{{ $student->first_name }}</a></td>
                <td> {{ $student->last_name }}</td>
                <td>{{ $student->grade_id }}</td>
                <td> <a href="{{ url("/grade/$student->grade_id") }}">{{ $student->grade->grade_name }}</td>
                <td> {{ $student->grade->grade_color }}</td>
                <td> {{ $student->grade->grade_group }}</td>
                {{-- <td> {{$student->created_at}}</td>m
        <td> {{$student->updated_at}}</td> --}}

            </tr>
        @endforeach
    </table>
</body>

</html>
