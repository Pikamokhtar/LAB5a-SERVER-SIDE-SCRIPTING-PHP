<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    
<?php
$name = "NORAFIQAH BINTI MOKHTAR";
$matric_number = "CI230089"; 
$course = "SCIENCE COMPUTER IN MULTIMEDIA COMPUTING";
$year_of_study = "YEAR 2";
$address = "B6-2-3, JALAN MAJU BISTARI 6, TAMAN MAJU BISTARI, 86400 PARIT RAJA, JOHOR"; 
?>

<table border="1">
    <tr>
        <th>Details</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html
