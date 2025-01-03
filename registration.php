<?php
// Initialize variables for form data and error messages
$name = $email = $password = $confirm_password = "";
$nameErr = $emailErr = $passwordErr = $confirm_passwordErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate the form inputs
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate name
    if (empty($name)) {
        $nameErr = "Name is required";
    }

    // Validate email
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Validate password
    if (empty($password)) {
        $passwordErr = "Password is required";
    } elseif (strlen($password) < 6) {
        $passwordErr = "Password must be at least 6 characters";
    }

    // Validate confirm password
    if (empty($confirm_password)) {
        $confirm_passwordErr = "Please confirm your password";
    } elseif ($password !== $confirm_password) {
        $confirm_passwordErr = "Passwords do not match";
    }

    // If no errors, display success
    if (
        empty($nameErr) && 
        empty($emailErr) && 
        empty($passwordErr) && 
        empty($confirm_passwordErr)
    ) {
        $successMsg = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        .error {
            color: red;
        }
        .success {
            color: green;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    
    <?php
    if ($successMsg) {
        echo "<p class='success'>$successMsg</p>";
    }
    ?>

    <form method="POST" action="<?php echo html

