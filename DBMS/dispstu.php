<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed and terminated: " . $conn->connect_error);
} 

$sql = "SELECT id,name FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
echo "id: " . $row["id"]. " - Name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<html> 
<body bgcolor="#00FA9A">
</body>

</html>

