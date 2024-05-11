<?php
    $server_name = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "myDB";

    $connection=mysqli_connect($server_name,$username,$password);

    //Get data from database
    $query = "select * from users where id = 3";

    $data = $connection->query($query);

    if ($data->num_rows > 0) {
        while($row = $data->fetch_assoc()) {
            echo "<br> id: ". $row["id"]."<br>". "Name: ". $row["fname"]. " " . $row["lname"] . "<br>"."Email : ".$row["email"]."<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($connection);
    ?>
