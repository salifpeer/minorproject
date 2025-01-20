<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card shadow text-center">
            <div class="card-body">
                <h1 class="text-primary mb-4">Appointment Booked</h1>
                <p class="text-success fs-3 fw-bold">Payment Successful</p>
                <label class="d-block">
                    Click <a onclick="goback()" href="welcome.php" class="text-info text-decoration-underline">here</a>
                    to return.
                </label>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>