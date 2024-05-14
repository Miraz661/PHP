<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php 
        include('dbConnect.php');
        $id = $_GET['id'];
    ?>
    <div>
        <form action="update.php?id=<?php echo $id; ?>" method="post">
            <p>
                <label for="fn">First Name</label>
                <input type="text" name="fn" id="fn">
            </p>
            <p>
                <label for="ln">Last Name</label>
                <input type="text" name="ln" id="ln">
            </p>
            <p>
                <input type="submit" value="Update" name="update">
            </p>
        </form>
    </div>
</body>
</html>