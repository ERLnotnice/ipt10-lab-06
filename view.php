<?php

require_once 'FileUtility.php';

$data = FileUtility::readFromFile('persons.csv');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .table-container {
            max-width: 100%;
            overflow-x: auto; /* Enables horizontal scroll */
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 1000px; /* Ensures the table fits in smaller screens */
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f8f8;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Person Data</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>UUID</th>
                        <th>Title</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Street Address</th>
                        <th>Barangay</th>
                        <th>Municipality</th>
                        <th>Province</th>
                        <th>Country</th>
                        <th>Phone Number</th>
                        <th>Mobile Number</th>
                        <th>Company Name</th>
                        <th>Company Website</th>
                        <th>Job Title</th>
                        <th>Favorite Color</th>
                        <th>Birthdate</th>
                        <th>Email Address</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                    <tr>
                        <?php foreach ($row as $cell): ?>
                        <td><?= htmlspecialchars($cell) ?></td>
                        <?php endforeach; ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
