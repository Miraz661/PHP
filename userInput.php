<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mysql.php" method="POST">
        <div>
            <label for="id">User id</label>
            <input type="text" name="id" placeholder="User ID">
        </div>
        <div>
            <label for="fName">First Name</label>
            <input type="text" name="fName" placeholder="First Name">
        </div>
        <div>
            <label for="lName">Last Name</label>
            <input type="text" name="lName" placeholder="Last Name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your email">
        </div>
        <input type="submit" value="Add user" name="submit_user">
    </form>
</body>
</html>