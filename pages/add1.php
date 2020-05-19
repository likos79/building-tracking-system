<?php
            if(isset($_POST['add'])){
                if(isset($_POST['first_name']) && ($_POST['last_name']) && $_POST['tel_number']){
                    if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['tel_number']) && !empty($_POST['floor'])){
                        $first_name = trim($_POST['first_name']);
                        $last_name = trim($_POST['last_name']);
                        $tel_number = trim($_POST['tel_number']);
                        $floor = trim($_POST['floor']);
                        
                        require('connection.php');
                         $first_name = mysqli_real_escape_string($conn, $first_name);
                         $last_name = mysqli_real_escape_string($conn, $last_name);
                         $tel_number = mysqli_real_escape_string($conn, $tel_number);
                         $floor = mysqli_real_escape_string($conn, $floor);
                        
                        $query = "INSERT INTO residents (first_name, last_name, tel_number, floor) VALUES ('{$first_name}', '{$last_name}', '{$tel_number}', '{$floor}')";
                        if(mysqli_query($conn, $query)){
                              echo "<strong>New resident succesfully added.</strong>";

                        }else{
                              echo "<strong>Wrong addition.</strong>";
                            
                        }
                        }else{
                              echo "<strong>Fields can not be empty.</strong>";
                        }
                        }else{
                              echo "<strong>Fill in all fields,please.</strong>";
}
}
?>
