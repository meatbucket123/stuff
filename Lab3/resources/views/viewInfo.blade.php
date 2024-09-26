<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Reservation Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .table {
            background-color: #fff;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            vertical-align: middle;
        }

        th {
            background-color: #4a69bd;
            color: white;
            text-align: left;
            width: 25%;
        }

        td {
            width: 75%;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #4a69bd;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            transition: background-color 0.2s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .table tr {
            border-bottom: 1px solid #dee2e6;
        }

        .table tr:last-child {
            border-bottom: none;
        }

        .table td {
            color: #333;
        }

        .table th {
            color: #333;
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .table th,
            .table td {
                font-size: 0.9rem;
            }
        }
    </style>
    <script>
        function calculateTotalPrice() {
    const roomPrices = {
        standard: 1500,
        deluxe: 3000,
        suite: 4500
    };

    const roomPreference = document.getElementById('roomPreference').innerText.toLowerCase();
    const days = parseInt(document.getElementById('days').innerText);
    const totalPrice = roomPrices[roomPreference] * days;
    const baseCost = roomPrices[roomPreference];

    document.getElementById('totalPrice').innerText = totalPrice;
    document.getElementById('baseRoomCost').innerText = baseCost;
}

        window.onload = calculateTotalPrice;
    </script>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Hotel Registration Information</h1>

        <table class="table table-bordered">
            <tr>
                <th>First Name:</th>
                <td>{{ $student['firstnameYEE'] }}</td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td>{{ $student['lastnameYEE'] }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $student['emailYEE'] }}</td>
            </tr>
            <tr>
                <th>Contact Number:</th>
                <td>{{ $student['contact_numberYEE'] }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $student['addressYEE'] }}</td>
            </tr>
            <tr>
                <th>Check-in:</th>
                <td>{{ $student['checkInYEE'] }}</td>
            </tr>
            <tr>
                <th>Room Preference:</th>
                <td id="roomPreference">{{ $student['priceYee'] }}</td>
            </tr>
            <tr>
                <th>Number of Days:</th>
                <td id="days">{{ $student['daysYEE'] }}</td>
            </tr>
            <tr>
                <th>Number of Guests:</th>
                <td>{{ $student['guestsYEE'] }}</td>
            </tr>
            <tr>
                <th>Base Room Cost: </th>
                <td id="baseRoomCost"></td>
            </tr>
            <tr>
                <th>Total Room Price:</th>
                <td id="totalPrice"></td>
            </tr>
        </table>

        <div class="text-center mt-4">
            <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('register') }}'">Back</button>
        </div>
    </div>
</body>

</html>
