<?php
session_start();
include('status.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <form action='' method='POST'>
        <div class="text-center mt-5">
            <h1>Make your Payments</h1>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <img src="mpesa.png" alt="M-PESA" class="img-fluid mx-auto d-block" style="width: 30%;">
            </div>
            <div class="card-body bg-light">
                <p class="text-muted">
                    3. After receiving the payment confirmation message, press "Confirm Payment" to finish making your order
                </p>
                <input type="hidden" name="phone_number" value="<?php echo $_SESSION["phone"]; ?>" />
                <input type="hidden" name="orderNo" value="<?php echo $_SESSION["MerchantRequestID"]; ?>" />
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary"><i class="ion-locked"></i> Confirm Payment</button>
        </div>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
