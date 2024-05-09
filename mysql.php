<?php
    // include('userinput.php');
    $server_name = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "myDB";

    $connection=mysqli_connect($server_name,$username,$password);

    // if(!$connection){
    //     die("connection faild !");
    // }
    // else{
    //     echo "connection to MySQL server successfully...";
    // }

    //create database
    // $SQL="CREATE DATABASE $db_name";
        
    // if(mysqli_query($connection,$SQL)){
    //     echo "Database created successfully";
    // } else {
    //     echo "Error. creating database ";
    // }

    // create table query

    mysqli_query($connection,"use myDB");

    // $query = "create table users(id int auto_increment primary key,fname varchar(100) not null,lname varchar(100),email varchar (50) not null)";

    // if(mysqli_query($connection,$query)){
    //     echo "Table creation successfully";
    // }else{
    //     echo "Error table creation...";
    // }

    // $query = "Insert into users (id,fName,lName,email) values(null,'Miraz','Hossain','2211081038@uttarauniversity.edu.bd')";

    $query = "select * from users";

    $data = $connection->query($query);

    if ($data->num_rows> 0) {
        while($row = $data->fetch_array()) {
            echo "<br> id: ". $row["id"]."<br>". "Name: ". $row["fname"]. " " . $row["lname"] . "<br>"."Email : ".$row["email"]."<br>";
        }
    } else {
        echo "0 results";
    }

    // if(isset($_POST['submit_user'])){
    //     $id = $_POST['id'];
    //     $fName = $_POST['fName'];
    //     $lName = $_POST['lName'];
    //     $email = $_POST['email'];
    //     // echo "Id : ". $id."<br>First Name : ".$fName."<br> Last Name : ".$lName."<br>Email address : ".$email;
    //     $query = "Insert into users(id,fname,lname,email) values(NULL,'$fName','$lName','$email')";
    //     mysqli_query($connection,$query);
    // }


    // if(mysqli_affected_rows($connection)>0){
    //     echo "Data inserted successfully...";
    // }else{
    //     echo "Data not inserted";
    // }

    mysqli_close($connection);

    ?>