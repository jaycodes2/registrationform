<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Capture form data
    $first_name = $_POST["first_name"] ?? "N/A";
    $last_name = $_POST["last_name"] ?? "N/A";
    $email = $_POST["email"] ?? "N/A";
    $password = $_POST["password"] ?? "N/A";
    $dob = $_POST["dob"] ?? "N/A";
    $gender = $_POST["gender"] ?? "N/A";
    $hobbies = $_POST["hobbies"] ?? "N/A";
    $country = $_POST["country"] ?? "N/A";

    // Display submitted information
    echo "<h1>Registration Successful</h1>";
    echo "<p><strong>First Name:</strong> $first_name</p>";
    echo "<p><strong>Last Name:</strong> $last_name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Password:</strong> [Hidden]</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    echo "<p><strong>Country:</strong> $country</p>";
}
?>
