<?php
// Step 1: Open the CSV file
$file = fopen("data.csv", "r");

// Step 2: Read the header of the CSV file
$headers = fgetcsv($file);

// Step 3: Read the remaining data and store it in an array
$data = [];
while (($row = fgetcsv($file)) !== false) {
    $data[] = $row;
}

// Step 4: Close the CSV file
fclose($file);

// Initialize variables to calculate totals
$totalEmployees = count($data);
$totalBalance = 0;

// Calculate the total balance by summing the Balance column
$balanceIndex = array_search("Balance", $headers); // Find the index of the Balance column
foreach ($data as $row) {
    $totalBalance += floatval($row[$balanceIndex]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HBL Bank Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            font-family: "Poppins";
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 20px;
        }

        th {
            background-color: rgb(208, 208, 208);
        }

        td {
            background-color: rgb(243, 243, 243);
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h1 style="text-align:center">HBL Bank Employees Data</h1>

    <table>
        <thead>
            <tr>
                <?php
                // Step 5: Display table headers
                foreach ($headers as $header) {
                    echo "<th>" . htmlspecialchars($header) . "</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Step 6: Display the data rows in the table
            foreach ($data as $row) {
                echo "<tr>";
                foreach ($row as $column) {
                    echo "<td>" . htmlspecialchars($column) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Total Employees:</th>
                <th><?php echo $totalEmployees; ?></th>
            </tr>
            <tr>
                <th colspan="3">Total Balance:</th>
                <th><?php echo number_format( $totalBalance, 2) ?></th>
            </tr>
        </tfoot>
    </table>

</body>

</html>
