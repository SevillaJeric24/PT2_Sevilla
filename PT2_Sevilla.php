<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Library Expansion Project</title>
    <h1>Public Library Expansion Project</h1>
    <br>
    <h2> Cost Estimates </h2>
    <style>

        body {
            background-color: lightblue;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1{ color: black}

        h2 {
            color: Red;
        }
        tr{color:darkblue}
        h3 {
            color: red;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 60%;
        }
         th,td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: darkgray;
        }
        .highlight {
            font-weight: bold;
            color: blue;
        }
        .total {
            font-weight: bold;
            color: green;
        }
        .footer {
            margin-top: 20px;
            font-style: italic;
        }
        .foreach{color: blue}
        b{color:black}
        thead {color:black}
        column{color:black}
        foreach{color:green}
    </style>
</head>

    <?php

$expenditures = [
    "Lumber" => 150000.00,
    "Concrete" => 78000.00,
    "Drywall" => 68000.00,
    "Paint" => 12000.00,
    "Miscellaneous" => 20000.00
];

echo "<table>";
echo "<thead><tr><th><column>Expenditures</column></th><th><column>Estimated Cost</column></th><th>10% Increase</th><th>15% Increase</th><th>20% Increase</th></tr></thead>";
echo "<tbody>";

$totalEstimated = 0;
$total10 = 0;
$total15 = 0;
$total20 = 0;

foreach ($expenditures as $name => $cost) {
    $increase10 = $cost * 1.10;
    $increase15 = $cost * 1.15;
    $increase20 = $cost * 1.20;

    echo "<tr>";
    echo "<td>" . $name . "</td>";
    echo "<td>$" . number_format($cost, 2) . "</td>";
    echo "<td>$" . number_format($increase10, 2) . "</td>";
    echo "<td>$" . number_format($increase15, 2) . "</td>";
    echo "<td>$" . number_format($increase20, 2) . "</td>";
    echo "</tr>";

    $totalEstimated += $cost;
    $total10 += $increase10;
    $total15 += $increase15;
    $total20 += $increase20;
} 

echo "<tr>";
echo "<td><b>Total Expenditures</b></td>";
echo "<td><b>$" . number_format($totalEstimated, 2) . "</b></td>";
echo "<td><b>$" . number_format($total10, 2) . "</b></td>";
echo "<td><b>$" . number_format($total15, 2) . "</b></td>";
echo "<td><b>$" . number_format($total20, 2) . "</b></td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>
<p> Created by: JERIC H. SEVILLA</p>