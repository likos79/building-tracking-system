<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Building</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">
        <div id="box">
            <div class="search">
                <a href="../index.php"><img src="../images/search.png" alt="Search"></a></div>
            <a href="add.php"><img src="../images/add-user.png" alt="Add-resident" title="Add new resident"></a>
            <a href="remove.php"><img src="../images/remove-user.png" alt="Remove-resident" title="Remove resident"></a>
            <form action="#" method="POST">
                <label for="first_name">First name:</label><br>
                    <input type="text" name="first_name"><br>
                <label for="last_name">Last name:</label><br>
                    <input type="text" name="last_name"><br>
                <label for="tel_number">Tel number:</label><br>
                    <input type="text" name="tel_number"><br>
                <label for="floor">Floor:<br></label>
                <input type="text" name="floor">
                <br><br>
             <input type="submit" name="add" value="Add resident">
            </form>
        </div>
        <div>
              <?php
            include 'add1.php';
            ?>
        </div>
    </div>
</body>

</html>
