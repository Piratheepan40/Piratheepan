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
            {{-- <th>Create at</th> --}}
            {{-- <th>Update </th> --}}
        </tr>
    @foreach ($students as $student)
       <tr>
        <td> {{$student->id}}</td>
        <td> {{$student->first_name}}</td>
        <td> {{$student->last_name}}</td>
        {{-- <td> {{$student->created_at}}</td>m
        <td> {{$student->updated_at}}</td> --}}

        <td><a href="{{url("/student/$student->id")}}">Show link</a></td>
       </tr>
    @endforeach
</table>
</body>
</html>