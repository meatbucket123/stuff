<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Student Information</h1>

    <table class="table">
        <tr>
            <th>Firstname</th>
            <td>{{ $student['firstname'] }}</td>
        </tr>
        <tr>
            <th>Lastname</th>
            <td>{{ $student['lastname'] }}</td>
        </tr>
        <tr>
            <th>Student Number</th>
            <td>{{ $student['student_number'] }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ $student['gender'] }}</td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td>{{ $student['birthday'] }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $student['course'] }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $student['email'] }}</td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>{{ $student['contact_number'] }}</td>
        </tr>
    </table>
</div>

<button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('register') }}'">Back</button>
</body>
</html>
