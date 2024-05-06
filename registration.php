<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "Tt08111190912";
$dbname = "CS314";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create users table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

// SQL queries to create tables
$sql_products = "
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image_url VARCHAR(255)
)";

$sql_users = "
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
)";

$sql_order_items = "
CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
)";
// SQL query to create the cart table
$sql_cart = "
CREATE TABLE IF NOT EXISTS cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (product_id) REFERENCES products(id)
)";




// Initialize variables
$name = $email = $password = "";
$errorMessage = "";
$isValid = true;

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    $verifyPassword = htmlspecialchars($_POST["verifyPassword"]);

    // Check if email is already registered
    $check_email_sql = "SELECT * FROM users WHERE email = ?";
    $check_stmt = $conn->prepare($check_email_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        // Email is already registered, display error message
        $errorMessage = "Error: This email is already registered. <a href='login.php'>Login here</a>";
        echo "<div class='error'>$errorMessage</div>";
        $isValid = false;
    }

    $check_stmt->close();

    // If form data is valid, insert into database
    if ($isValid) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
     
        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $hashedPassword);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "New record created successfully";
            // Redirect to login page after successful registration
            header("Location: registration-succ.php");
            exit();
        } else {
            // Error handling for SQL query execution
            $errorMessage = "Error: " . $sql . "<br>" . $conn->error;
            echo $errorMessage; // Output the error message for debugging
        }

        // Close the statement
        $stmt->close();
    }
}