<?php
    $server_name = "localhost:3307";
    $username = "root";
    $password = "";
    $db_name = "mydb";

    $connection=mysqli_connect($server_name,$username,$password);

    if(!$connection){
        die("Connection faild !");
    }else{
        echo "Connection to MySQL server successfully..."."<br>";
    }


    // $query = "CREATE DATABASE  myDB";

    // if(mysqli_query($connection,$query)){
    //     echo "Database created successfully...";
    // }else{
    //     echo "Error Database creation...".mysqli_error($connection);
    // }

    // Create table query

    mysqli_query($connection,"use mydb");

    // $query = "create table users(id int auto_increment primary key,fName varchar(100) not null,lName varchar(100),email varchar(50) not null)";

    // if(mysqli_query($connection,$query)){
    //     echo "Table creation successfull...";
    // }else{
    //     echo "Error table creation...";
    // }

    // Insert data to the table users

    $query = "INSERT into users(id,fName,lName,email) VALUES(null,'Shakawat','Hassan','2211081056@uttarauniversity.edu.bd')";

    mysqli_query($connection,$query);

    mysqli_close($connection);

?>
