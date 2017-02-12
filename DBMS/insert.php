<?php
$link = mysqli_connect("localhost", "root", "", "dbms");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($link, $_POST['id']);
$name = mysqli_real_escape_string($link, $_POST['name']);
//$email_address = mysqli_real_escape_string($link, $_POST['email']);
 
// attempt insert query execution
$sql = "INSERT INTO books (id,name) VALUES ('$id', '$name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>