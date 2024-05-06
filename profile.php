
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>الملف الشخصي| بوركت</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for profile page */
    body {
      background-color: #f8f9fa;
      text-align: right; 
    }
    .container-fluid{
      margin-top:50px;
      margin-bottom: 50px;
    }
    .sidebar {
      background-color: #ffffff;
      padding: 20px;
      padding-bottom: 200px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      }
    .sidebar h4 {
      color: #333;
      font-weight: bold;
      margin-bottom: 20px;
      
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      margin-bottom: 10px;
    }
    .sidebar ul li a {
      color: #333;
      text-decoration: none;
      transition: color 0.3s;
    }
    .sidebar ul li a:hover {
      color: #858083;
    }
    .content {
      background-color: #ffffff;
      padding: 20px;
      padding-bottom: 80px;
      margin-left: 20px;
      box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }
    .content h1 {
      color: #333;
      font-weight: bold;
      margin-bottom: 20px;
    }
  </style>
</head>
  <?php include "projHeader.php"?>
  <?php
  // Check if session is not started, then start it
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  // Check if the user is logged in
  if (!isset($_SESSION['id'])) {
      // Redirect to the login page or display an error message
      header("Location: login.php"); // Redirect to your login page
      exit(); // Stop executing the script
  }

  // Example of fetching user information from a database
  // Replace this with your actual database connection and query
  $servername = "localhost";
  $username = "root";
  $password = "Tt08111190912";
  $dbname = "CS314";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve user ID from session
  $user_id = $_SESSION['id'];

  // SQL query to retrieve user information based on the logged-in user's ID
  $sql = "SELECT name, email FROM users WHERE id = $user_id";

  $result = $conn->query($sql);

  $name = "";
  $email = "";

  if ($result->num_rows > 0) {
      // Output data of the logged-in user
      while($row = $result->fetch_assoc()) {
          $name = htmlspecialchars($row["name"]);
          $email = htmlspecialchars($row["email"]);
      }
  } else {
      echo "User not found";
  }

  $conn->close();
  ?>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="sidebar">
          <h4>حسابي</h4>
          <ul>
            <li><a href="#" onclick="showAccountDetails()">تفاصيل الحساب</a></li>
            <li><a href="#" onclick="showOrders()">طلباتي</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="content" id="accountDetails">
          <h1>تفاصيل الحساب</h1>
          <form method="post">
            <div class="form-group">
              <label for="name">الاسم</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="email">البريد الإلكتروني</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" readonly>
            </div>
          </form>
        </div>
        <div class="content" id="orders" style="display: none;">
          <h1>طلباتي</h1>
        </div>
      </div>
    </div>
  </div>
  <?php include "footer.php"?>

  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function showAccountDetails() {
      document.getElementById('accountDetails').style.display = 'block';
      document.getElementById('orders').style.display = 'none';
    }

    function showOrders() {
      document.getElementById('accountDetails').style.display = 'none';
      document.getElementById('orders').style.display = 'block';
    }
  </script>
</body>
</html>
