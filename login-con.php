<?php
session_start();

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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Prepare and execute SQL statement to retrieve user information
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists and password is correct
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            // Password is correct, set session variables and redirect to or home page
            $_SESSION["id"] = $user["id"];
            $_SESSION["name"] = $user["name"];
            header("Location: index.php"); // Change this to the appropriate page
            exit();

        } else {
            // Password is incorrect, display error message
            echo "Invalid email or password.<a href='login.php'>Login here</a>";
        }
    } else {
        // User does not exist, display error message
        echo "Invalid email or password.<a href='login.php'>Login here</a>";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>