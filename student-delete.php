<?php
    require_once('inc/db.php');
    $id = $_GET['id'];

    $delete = "DELETE FROM students WHERE id=$id";
    $query = mysqli_query($db,$delete);
    if($query){
        header('location: students.php');
    }else{
        echo 'sorry';
    }

?>