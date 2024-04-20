<?php
// Step 2: Establish a connection to the MySQL database
$hostname = 'localhost';
$username = 'root@localhost'; // MySQL username
$password = '1234'; // MySQL password
$database = 'hackton'; // Database name

$conn = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$resume = $_FILES['resume']['name'];
$message = $_POST['message'];

// Step 4: Sanitize and validate the form data (implement your own sanitization and validation logic)

// Step 5: Insert the form data into the database
$sql = "INSERT INTO data (name, email, resume, message) VALUES ('$name', '$email', '$resume', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Data stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
