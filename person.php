<?php
// Connect to MYSQL DB
$link = mysqli_connect("localhost", "root", "root", "demo");
 // Check if it coneected or not
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//SQL Query
$sql = "INSERT INTO persons (first_name, last_name, email_address) VALUES ('Wormy', 'VonWormenstein', 'email@email.com')";
// Check if SQL query was executed successfully or not
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
//Close the connection
mysqli_close($link);
?>
