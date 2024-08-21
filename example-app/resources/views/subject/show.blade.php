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
        <tr>
            <td>Subject ID</td>
            <td>{{ $subject->id }}</td>
        </tr>
        <tr>
            <td>Subject Name</td>
            <td>{{ $subject->subject_name }}</td>
        </tr>
        <tr>
            <td>Subject Order</td>
            <td>{{ $subject->subject_order }}</td>
        </tr>
        <tr>
            <td>Subject Color</td>
            <td>{{ $subject->subject_color }}</td>
        </tr>
    </table>
</body>
</html>