<!DOCTYPE html>
<html>
<head>
    <title>Vacation Records</title>
</head>
<body>
<h1>Vacation Records</h1>
<table>
    <thead>
    <tr>
        <th>Employee</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Recorded</th>
    </tr>
    </thead>
    <tbody>
    @foreach($vacations as $vacation)
        <tr>
            <td>{{ $vacation->employee->name }}</td>
            <td>{{ $vacation->start_date }}</td>
            <td>{{ $vacation->end_date }}</td>
            <td>{{ $vacation->recorded ? 'Yes' : 'No' }}</td>
            <td>
                @if(!$vacation->recorded)
                    <form method="POST" action="/vacation/records/{{ $vacation->id }}">
                        @method('PUT')
                        @csrf
                        <button type="submit">Record</button>
                    </form>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
