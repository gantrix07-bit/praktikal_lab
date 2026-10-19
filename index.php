<?php
include 'process.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate House Electricity Bill</title>
</head>

<body>
    <h1>Calcualte House Electricity Build</h1>
    <div>
        <table border="1">
            <tr>
                <th>Block Tariff (Per Month)</th>
                <th>Unit</th>
                <th>Rate</th>
            </tr>
            <tr>
                <td>For the first 200 kWh (1-200 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.128</td>
            </tr>
            <tr>
                <td>For the next 100 kWh (201-300 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (301-600 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.516</td>
            </tr>
            <tr>
                <td>For the next 300 kWh (601-900 kWh) per month</td>
                <td>sen/kWh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the next kWh (901 kWh onwards) per month</td>
                <td>sen/kWh</td>
                <td>0.571</td>
            </tr>
            <tr>
                <td colspan="3">The minimum monthly charge is RM3.00</td>
            </tr>
        </table>
    </div>
<br>

<?php 
if ($error != "") 
    echo "<h4 style='color:red;'><b>Warning:</b>" . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "</h4>";
?>
    <div>
        <form method="post">
            <label for="first">Enter your first 200 kWh (1 - 200 kWh) per month:</label>
            <input type="number" id="first" name="first" >
            <br>
            <label for="second">Enter your next 100 kWh (201 - 300 kWh) per month:</label>
            <input type="number" id="second" name="second" >
            <br>
            <label for="third">Enter your next 300 kWh (301 - 600 kWh) per month:</label>
            <input type="number" id="third" name="third" >
            <br>
            <label for="fourth">Enter your next 300 kWh (601 - 900 kWh) per month:</label>
            <input type="number" id="fourth" name="fourth" >
            <br>
            <label for="fifth">Enter next kWh (901 kWh onwards) per month:</label>
            <input type="number" id="fifth" name="fifth" >
            <br>
            <button type="submit" name="calculate">Calculate Bill</button>
        </form>
    </div>
</body>

<?php 
if ($showbill) {
  echo "<hr>";
  echo "<h3>Electricity Bill</h3>";

  echo "First input: " . $firstinput . " * 0.128 = RM" . $firstcharge . "<br>";
  echo "Second input: " . $secondinput . " * 0.344 = RM" . $secondcharge . "<br>";
  echo "Third input: " . $thirdinput . " * 0.516 = RM" . $thirdcharge . "<br>";
  echo "Fourth input: " . $fourthinput . " * 0.546 = RM" . $fourthcharge . "<br>";
  echo "Fifth input: " . $fifthinput . " * 0.571 = RM" . $fifthcharge . "<br><br>";

  echo "Total Consumption: " . $totalinput . "kwh<br>";
  echo "Total Charge: RM" . $totalcharge . "<br>";
}
?>  
</html>