<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Building</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrapper">
        <div id="box">
            <div class="search">
                <img src="images/search.png" alt="Search for residents" title="Search for residents"></div>
            <a href="pages/add.php"><img src="images/add-user.png" alt="Add-resident" title="Add new resident"></a>
            <a href="pages/remove.php"><img src="images/remove-user.png" alt="Remove-resident" title="Remove resident"></a>
            <form action="#" method="GET">
                <input type="text" name="search" id="search" placeholder="Search for residents...">
                <input type="submit" name="submit" value="Search">
            </form>
        </div>
        <?php
        include 'pages/search.php';
        ?>
    </div>
</body>

</html>
