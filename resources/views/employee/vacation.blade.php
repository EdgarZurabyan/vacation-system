<!DOCTYPE html>
<html>
<head>
    <title>Employee Vacation</title>
</head>
<body>
<h1>Employee Vacation</h1>
<table>
    <thead>
    <tr>
        <th>Start Date</th>
        <th>End Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vacations as $vacation)
        <tr>
            <td>{{ $vacation->start_date }}</td>
            <td>{{ $vacation->end_date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
