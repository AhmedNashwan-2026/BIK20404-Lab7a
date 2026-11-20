<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q1</title>
</head>
<body>
<?php
    $name = "AHMED NASHWAN AL-MASWARY";
    $matric = "AI250001";
    $course = " BIK20404 WebDev";
    $year = "Year 2";
    $address = "Universiti Tun Hussein Onn Malaysia (UTHM) is located at Persiaran Tun Dr. Ismail, 86400 Parit Raja, Batu Pahat, Johor, Malaysia";
?>
<h2>My Details</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Detail</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
</body>
</html>