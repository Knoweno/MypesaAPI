<?php
include('malipoSTK.php');
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
    <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'>
        <div class="text-center mt-5">
        <h1>Make your Payments</h1>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <img src="mpesa.png" alt="M-PESA" class="img-fluid mx-auto d-block" style="width: 30%;">
                <p class="text-muted text-center mt-3">
                    1. Enter the <b>phone number</b> and press "<b>Confirm and Pay</b>"<br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b>
                </p>
                <?php if ($errmsg != ''): ?>
                    <div class="alert alert-danger text-center">
                        <?php echo $errmsg; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="hidden" name="orderNo" value="#O2JDI2I3R" />
                    <label for="cardnumber" class="form-label">Phone number</label>
                    <input id="cardnumber" type="text" class="form-control" name="phone_number" maxlength="10" placeholder="0700000000"/>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary"><i class="ion-locked"></i> Confirm and Pay</button>
        </div>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
