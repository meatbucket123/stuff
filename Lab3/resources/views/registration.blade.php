<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert2 -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #4a69bd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3b5287;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card p-4">
                    <h1 class="text-center text-primary mb-4">Hotel Registration</h1>
                    <p class="text-center mb-4">Please fill in the form to complete your registration.</p>

                    <form action="{{ route('registration.submit') }}" method="POST">
                        @csrf


                        <div class="row mb-3">
                            <div class="col">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" name="firstnameYEE" required
                                    placeholder="Enter your first name">
                            </div>
                            <div class="col">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="text" class="form-control" id="lastname" name="lastnameYEE" required
                                    placeholder="Enter your last name">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="emailYEE" required
                                placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="address" class="form-control" id="address" name="addressYEE" required
                                placeholder="Enter your Address">
                        </div>


                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_numberYEE" required
                                placeholder="Enter your contact number">
                        </div>


                        <div class="mb-3">
                            <label for="birthday" class="form-label">Check-in Date</label>
                            <input type="date" class="form-control" id="checkIN" name="checkInYEE" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Room Preferences</label>
                            <div class="d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceYee" id="female" value="Standard"
                                        required>
                                    <label class="form-check-label" for="female">Standard</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceYee" id="male" value="Deluxe">
                                    <label class="form-check-label" for="male">Deluxe</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priceYee" id="others" value="Suite">
                                    <label class="form-check-label" for="others">Suite</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="days" class="form-label">No. of Days</label>
                            <input type="text" class="form-control" id="days" name="daysYEE" required
                                placeholder="Enter your contact number">
                        </div>
                        <div class="mb-3">
                            <label for="guests" class="form-label">No. of Guests</label>
                            <input type="text" class="form-control" id="guests" name="guestsYEE" required
                                placeholder="Enter your contact number">
                        </div>








                        <div class="mb-3">
                            <label for="additional_information" class="form-label">Additional Information</label>
                            <textarea class="form-control" id="additional_information" name="additional_information"
                                rows="3" placeholder="Enter any additional information"></textarea>
                        </div>


                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-secondary"
                                onclick="window.location.href='{{ url('test') }}'">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
