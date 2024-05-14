<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User input</title>
</head>
<body>
    <!-- User form -->
    <div>
        <form action="add.php" method="post">
            <p>
                <label for="fn">First Name</label>
                <input type="text" name="fn" id="fn">
            </p>
            <p>
                <label for="ln">Last Name</label>
                <input type="text" name="ln" id="ln">
            </p>
            <p>
                <input type="submit" value="insert" name="add">
            </p>
        </form>
    </div>

    <!-- User data -->

    <div>
        <table border="1" style='border-collaps:collaps'>
            <thead>
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </thead>
            <tbody border='1'>
            <?php
                include('dbConnect.php');
                $SQL = "use 53a";
                mysqli_query($connection,$SQL);
                $SQL = "Select * from user1";
                $query = mysqli_query($connection,$SQL);
                while($row=mysqli_fetch_array($query)){
                    ?>

            <tr>
                <td>
                    <?php echo $row[0] ?>
                </td>
                <td>
                    <?php echo $row[1] ?>
                </td>
                <td>
                    <?php echo $row[2] ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $row[0];?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row[0];?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>
</body>
</html>