<!-- Output Table  -->
<?php
$db = new PDO('mysql:host=localhost;dbname=hw4;charset=utf8mb4', 'user', 'password');

echo "<table>";

    foreach($db->query('SELECT * FROM fruits') as $row) {


        $name = $row['name'];
        $color = $row['color'];

        echo "<tr>";
        echo "<td>$name</td>";
        echo "<td>$color</td>";
        echo "</tr>";
    }


    echo "</table>";

?>
