<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
    </style>
</head>
<body>

<h1>Booking Status</h1>

<!-- Placeholder for booking status -->
<p id="statusMessage">Checking booking status...</p>

<script>
    // Check if the booking status exists in localStorage
    window.onload = function() {
        let status = localStorage.getItem('bookingStatus');
        if (status) {
            document.getElementById('statusMessage').innerText = status;
        } else {
            document.getElementById('statusMessage').innerText = 'No booking made yet.';
        }
    };
</script>

</body>
</html>
