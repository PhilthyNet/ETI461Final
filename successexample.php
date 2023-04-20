<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "login.php";
    // $sql = "SELECT *
    // FROM Sales s" ;

    $res = $connection->query($sql);

    // if($res->num_rows >0) {
    //     echo "<table>,<tr><th>Sales</th>
    //     <th>city</th>
    //     <th>state</th>
    //     <th>adddress</th></tr>";

    //     while($row = $res->fetch_assoc()){
    //         echo "<tr><td>" . $row["saleID"] . "</td>
    //         <td>" . $row["city"]. "</td>
    //         <td>" . $row["state"]."</td>
    //         <td>" . $row["address"]."</td></tr>";
    //     }
    //     echo "</table>";
    //     }
    // $table1 ='Movie';
    // $table2 ='genre';

    /* $sql = "SELECT m.title, m.runtime, m.releaseDate, g.genre
    FROm " . $table1 . " m
    LEFT JOIN " . $table2 . " g on m.genreID = g.ID";

    $res = $connection ->query($sql);

    if($res->num_rows > 0) {
        echo "<table><tr><th>Title</th>
        <th>Runtime</th>
        <th>Release Date</th>
        <th>Genre</th></tr>";

        while($row = $res->fetch_assoc()){
            echo "<tr><td>" . $row["title"] . "</td>
            <td>" . $row["runtime"]. "</td>
            <td>" . $row["releaseDate"]."</td>
            <td>" . $row["genre"]."</td></tr>";
        }
        
        echo "</table>"; */
    }
    ?>
</body>
</html>
        
    