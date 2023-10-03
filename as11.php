<?php
include 'as.php';

$sql = "SELECT * FROM `as1`";
$result = mysqli_query($conn, $sql);
?>


<table border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['position'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
?>