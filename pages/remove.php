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
                <a href="../index.php"><img src="../images/search.png" alt="Search" title="Search for residents"></a></div>
            <a href="add.php"><img src="../images/add-user.png" alt="Add-resident" title="Add new resident"></a>
            <a href="remove.php"><img src="../images/remove-user.png" alt="Remove-resident" title="Remove resident"></a>
           </div>
       <?php
        require 'connection.php';
        $query = "SELECT * FROM residents";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
                ?>
       <div id="search_result">
           <a href="remover.php?id=<?php echo $row['id'] ?>"><img src="../images/remove-user1.png" alt="Remove resident"></a>
           <p><strong>Name:</strong><?php echo $row['first_name']." ".$row['last_name']; ?></p>
           <p><strong>Tel number:</strong><?php echo $row['tel_number'];?></p>
           <p><strong>Floor:</strong><?php echo $row['floor']; ?></p>
</div>
        <?php
            }
        }else{
            echo "No residents in the database.";
        }
        ?>
    </div>
</body>

</html>
