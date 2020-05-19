<?php
require 'connection.php';
if(isset($_GET['search'])){
    if(!empty($_GET['search'])){
        $search = trim($_GET['search']);
        $search = mysqli_real_escape_string($conn, $search);
    $query = "SELECT * FROM residents WHERE first_name LIKE '%{$search}%' OR last_name LIKE '%{$search}%'";
    $search_result = mysqli_query($conn, $query);
    if(mysqli_num_rows($search_result) > 0){
       while($row = mysqli_fetch_assoc($search_result)){
           ?>
<div id="search_result">
    <p>Name:
        <?php echo $row['first_name']." ".$row['last_name']; ?>
    </p>
    <p>Tel number:
        <?php echo $row['tel_number']; ?>
    </p>
    <p>Floor:
        <?php echo $row['floor']; ?>
    </p>
</div>
<?php
       }
               echo "Number of results: " . mysqli_num_rows($search_result);
        }else{
               echo 'No such resident found.';
        }
        }else{
               echo 'You must enter queries in the Search bar.';
}
}
?>


