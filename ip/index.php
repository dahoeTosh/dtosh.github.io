<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $newURL = $_POST['url'];

    $url = explode('index.php', $_SERVER['PHP_SELF'])[0];
    header('Location:' . $url . 'cc/?url=' . $newURL . "&email=" . $_POST['email_address']);
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if (isset($_GET['page'])) { echo $_GET['page']." - "; } ?>Partnership Inquiry Form</title>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.webp" sizes="48x48">
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Add Dark Bootstrap theme CSS link -->
  <link rel="stylesheet" href="https://bootswatch.com/5/sketchy/bootstrap.min.css">

  <!-- Custom CSS -->
  <style>
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
  <div class="container mt-5">
    <h1 class="mb-4">Partnership Inquiry Form<?php if (isset($_GET['page'])) { echo " [".$_GET['page']."]"; } ?></h1>
    <form method="post">
      <div class="form-group">
        <label for="channel_name">Channel/Page Name:</label>
        <input type="text" class="form-control" id="channel_name" name="channel_name" placeholder="Enter Channel/Page Name" value="<?php if (isset($_GET['page'])) { echo $_GET['page']; } ?>" required>
      </div>

      <div class="form-group">
        <label for="email_address">Email Address:</label>
        <input type="email" class="form-control" id="email_address" name="email_address" placeholder="Enter Email Address" required>
      </div>

      <div class="form-group">
        <label for="location">Target Audience:</label>
        <select class="form-control" id="location" name="location" required>
          <option value="">-Select Region-</option>
          <optgroup label="Africa">
            <option value="East Africa">East Africa</option>
            <option value="Central Africa">Central Africa</option>
            <option value="North Africa">North Africa</option>
            <option value="Southern Africa">Southern Africa</option>
            <option value="West Africa">West Africa</option>
          </optgroup>
          <optgroup label="Asia">
            <option value="Central Asia">Central Asia</option>
            <option value="Eastern Asia">Eastern Asia</option>
            <option value="South-Eastern Asia">South-Eastern Asia</option>
            <option value="Southern Asia">Southern Asia</option>
            <option value="Western Asia">Western Asia</option>
          </optgroup>
          <optgroup label="Europe">
            <option value="Eastern Europe">Eastern Europe</option>
            <option value="Northern Europe">Northern Europe</option>
            <option value="Southern Europe">Southern Europe</option>
            <option value="Western Europe">Western Europe</option>
          </optgroup>
          <optgroup label="North America">
            <option value="Canada">Canada</option>
            <option value="United States">United States</option>
          </optgroup>
          <optgroup label="Oceania">
            <option value="Australia">Australia</option>
            <option value="New Zealand">New Zealand</option>
          </optgroup>
          <optgroup label="South America">
            <option value="Eastern South America">Eastern South America</option>
            <option value="Western South America">Western South America</option>
          </optgroup>
        </select>
      </div>

      <div class="form-group">
        <label for="content_type">Content Type:</label>
        <select class="form-control" id="content_type" name="content_type" required>
          <option value="">--</option>
          <option value="Beauty" selected="true">Beauty</option>
          <option value="Fashion">Fashion</option>
          <option value="Fitness">Fitness</option>
          <option value="Food">Food</option>
          <option value="Lifestyle">Lifestyle</option>
          <option value="Travel">Travel</option>
          <option value="Other">Other</option>
          <!-- Add more options as needed -->
        </select>
      </div>

      <div class="form-group">
        <label for="engagement_rate">Engagement Rate:</label>
        <select class="form-control" id="engagement_rate" name="engagement_rate" required>
          <option value="">N/A</option>
          <option value="Low">Low</option>
          <option value="Medium">Medium</option>
          <option value="High" selected>High</option>
        </select>
      </div>

      <div class="form-group">
        <label for="followers">Number of Followers:</label>
        <select class="form-control" id="followers" name="followers" required>
          <option value="Less than 100K">Less than 100K</option>
          <option value="100K - 500K">100K - 500K</option>
          <option value="500K - 1M">500K - 1M</option>
          <option value="1M - 10M">1M - 10M</option>
          <option value="More than 10M">More than 10M</option>
        </select>
      </div>

      <div class="form-group">
        <label for="rate_per_1000_views">Rate per 1000 Views:</label>
        <select class="form-control" id="rate_per_1000_views" name="rate_per_1000_views" required>
          <option value="$25">$25</option>
          <option value="$50">$50</option>
          <option value="$75">$75</option>
          <option value="$100">$100</option>
        </select>
      </div>

      <div class="form-group">
        <label for="budget">Budget:</label>
        <select class="form-control" id="budget" name="budget" required>
          <option value="$1000 - $2000">$1000 - $2000</option>
          <option value="$2000 - $5000">$2000 - $5000</option>
          <option value="$5000 - $10000">$5000 - $10000</option>
        </select>
      </div>

        <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">

      <button type="submit" class="btn btn-primary">Submit</button>
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

  <!-- Add Bootstrap JS and jQuery links (required for Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
