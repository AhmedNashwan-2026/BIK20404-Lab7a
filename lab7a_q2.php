<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 7a Q2</title>
</head>
<body>
<?php
    $students = [
        [
            'name' => 'AHMED NASHWAN',
            'program' => 'BIK20404',
            'age' => 21
        ],
        [
            'name' => 'ANAS AWSAN',
            'program' => 'BIK20404',
            'age' => 20
        ],
        [
            'name' => 'MD JOWEL',
            'program' => 'BIK20404',
            'age' => 22
        ]
    ];
?>
<h2>Students</h2>
<table border="1" cellpadding="8">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
    <?php } ?
</table>
</body>
</html>