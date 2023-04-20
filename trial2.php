<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Zillow.com</title>
    <style>
      button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
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
      
    // button 1 state college  
      if (isset($_POST['button'])) {
        $sql = "SELECT * FROM Rentals LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "Rental id: " . $row["rentalID"]. " | City: " . $row["city"]. " | State: " . $row["state"] . 
            " | Address: " . $row["address"] . " | Category: " . $row["categoryID"] . "<br>";
          }
        } else {
          echo "0 results";
        }
        $sql = "SELECT * FROM Sales LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "Sale id: " . $row["saleID"]. " | City: " . $row["city"]. " | State: " . $row["state"] . 
            " | Address: " . $row["address"] . " | Category: " . $row["categoryID"] . "<br>";
          }
        } 
        else {echo "0 results";}
        $sql = "SELECT * FROM Agents LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Agent id: " . $row["agentID"]. " | Name: " . $row["agentName"]. " | Agent Phone Number: " . $row["agentNum"]. 
            " | Agent Email: " . $row["agentEmail"] . " | Category: " . $row["categoryID"] . "<br>";
            }
          }
        else {
            echo "0 results";
          }
        }

?>

<style>
      button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 12px 24px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
      }
    </style>
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

// button 2 houston

if (isset($_POST['button'])) {
    $sql = "SELECT * FROM Rentals ORDER BY DESC LIMIT 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Rental id: " . $row["rentalID"]. " | City: " . $row["city"]. " | State: " . $row["state"] . 
        " | Address: " . $row["address"] . " | Category: " . $row["categoryID"] . "<br>";
      }
    } else {
      echo "0 results";
    }
    $sql = "SELECT * FROM Sales ORDER BY DESC LIMIT 3";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "Sale id: " . $row["saleID"]. " | City: " . $row["city"]. " | State: " . $row["state"] . 
        " | Address: " . $row["address"] . " | Category: " . $row["categoryID"] . "<br>";
      }
    } 
    else {echo "0 results";}
    $sql = "SELECT * FROM Agents ORDER BY DESC LIMIT 1 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Agent id: " . $row["agentID"]. " | Name: " . $row["agentName"]. " | Agent Phone Number: " . $row["agentNum"]. 
        " | Agent Email: " . $row["agentEmail"] . " | Category: " . $row["categoryID"] . "<br>";
        }
      }
    else {
        echo "0 results";
      }
    }
    ?>


    <form method="post">
      <button type="submit" name="button">State College</button>
    </form>

    <form method="post">
      <button type="submit" name="button">Houston</button>
    </form>




  </body>
</html>
