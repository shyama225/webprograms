<?php
// Array of Indian cricket players
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Sachin Tendulkar",
    "MS Dhoni",
    "Rahul Dravid",
    "Sourav Ganguly",
    "Anil Kumble",
    "Kapil Dev",
    "Yuvraj Singh",
    "Hardik Pandya"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        /* Styling the HTML table */
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #555;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>List of Famous Indian Cricket Players</h1>

    <!-- HTML Table -->
    <table>
        <tr>
        <th>Serial No.</th>
            <th>Player Name</th>
        </tr>
        <?php
        // Loop through the players array and display each name in the table
        foreach ($players as $index => $player) {
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>" . htmlspecialchars($player) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

