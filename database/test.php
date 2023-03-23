<!DOCTYPE html>
<html>
    <body>
<?php
/*mysqli mysqli_connect (
[ string $host = ini_get("mysqli.default_host") 
[, string $username = ini_get("mysqli.default_user") 
[, string $passwd = ini_get("mysqli.default_pw") [, string$dbname = "" 
[, int $port =ini_get("mysqli.default_port") 
[, string $socket = ini_get("mysqli.default_socket") ]]]]]] )
*/
$servername = "localhost";
$username = "23286388";
$password = "23286388";
$dbname = "db_23286388";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  echo("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM CATEGORY";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
       echo "id: " . $row["category_id"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>