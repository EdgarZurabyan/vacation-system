<!DOCTYPE html>
<html>
<head>
    <title>Edit Vacation Dates</title>
</head>
<body>
<h1>Edit Vacation Dates</h1>
<form method="POST" action="/vacation">
    @method('PUT')
    @csrf
    <label for="start_date">Start Date:</label>
    <input type="date" name="start_date" value="{{ $vacation->start_date }}" required><br><br>

    <label for="end_date">End Date:</label>
    <input type="date" name="end_date" value="{{ $vacation->end_date }}" required><br><br>

    <button type="submit">Save</button>
</form>
</body>
</html>
