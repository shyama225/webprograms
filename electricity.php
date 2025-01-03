<?php
// Define the electricity tariff rate (per kWh)
$tariffRate = 0.15; // Example: $0.15 per kWh
$totalBill = 0; // Initialize total bill

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate user input
    if (isset($_POST['consumption']) && is_numeric($_POST['consumption']) && $_POST['consumption'] >= 0) {
        $consumption = floatval($_POST['consumption']);
        $totalBill = $consumption * $tariffRate; // Calculate total bill
    } else {
        $error = "Please enter a valid electricity consumption value.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Generator</title>
</head>
<body>
    <h1>Electricity Bill Generator</h1>
    <form method="POST" action="">
        <label for="consumption">Enter your electricity consumption (in kWh):</label>
        <input type="number" step="0.01" id="consumption" name="consumption" required>
        <br><br>
        <input type="submit" value="Calculate Bill">
    </form>

    <?php
    // Display error message if any
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }

    // Display total bill if calculated
    if ($totalBill > 0) {
        echo "<h2>Your electricity bill:</h2>";
        echo "<p>Consumption: " . number_format($consumption, 2) . " kWh</p>";
        echo "<p>Tariff Rate: $" . number_format($tariffRate, 2) . " per kWh</p>";
        echo "<p><strong>Total Bill: $" . number_format($totalBill, 2) . "</strong></p>";
    }
    ?>
</body>
</html>

