<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Student Information</h1>
    <div class="mt-4">
        <h3>Student Details</h3>
        <ul>
            <li><strong>Firstname:</strong> {{ $studentData['firstname'] }}</li>
            <li><strong>Lastname:</strong> {{ $studentData['lastname'] }}</li>
            <li><strong>Student Number:</strong> {{ $studentData['student_number'] }}</li>
            <li><strong>Gender:</strong> {{ $studentData['gender'] }}</li>
            <li><strong>Birthday:</strong> {{ $studentData['birthday'] }}</li>
            <li><strong>Course:</strong> {{ $studentData['course'] }}</li>
            <li><strong>Email:</strong> {{ $studentData['email'] }}</li>
            <li><strong>Contact Number:</strong> {{ $studentData['contact_number'] }}</li>
            <li><strong>Additional Information:</strong> {{ $studentData['additional_information'] }}</li>
        </ul>
    </div>
    <a href="{{ route('registration.form') }}" class="btn btn-primary mt-3">Back to Registration</a>
</div>
</body>
</html>
