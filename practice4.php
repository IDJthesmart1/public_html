<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lab Six: Practice 4</title>
    <button onclick="location.href='index.html'">Back to Index</button>
    <button onclick="light_mode_toggle()">Toggle Light Mode</button>
    <script src="lightMode.js"></script>
</head>

<body>
    <!--
        Create a PHP program that receives a number and displays a multiplication table from 1 to the
        number. You also need to print the row and column indexes in the table.
    -->
    <h2>Multiplication Table Generator</h2>
    <form method="post">
        <label for="number">Enter a number: </label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        echo "<h3>Multiplication Table for $number</h3>";
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th></th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>