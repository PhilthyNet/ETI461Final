<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "eti461final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM Sales";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["saleID"]. " - Name: " . $row["city"]. " " . $row["state"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM Rentals";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["rentalID"]. " - Name: " . $row["city"]. " " . $row["state"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM Agents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["agentID"]. " - Name: " . $row["agentName"]. " " . $row["agentNum"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>