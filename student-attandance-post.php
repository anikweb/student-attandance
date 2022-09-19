<?php
    require 'inc/db.php';
    $department = $_POST['department'];
    $session = $_POST['session'];
    $semester = $_POST['semester'];

    $select = "SELECT * FROM students WHERE department='$department' AND session='$session' AND semester='$semester'";
    $query = mysqli_query($db,$select);

    $rows = mysqli_num_rows($query);
    $assoc = mysqli_fetch_assoc($query);
   


    foreach ($query as $key => $value) {
        $id = $_POST['student_id'][$key];
        $status = $_POST['status'][$key];
        $insert = "INSERT INTO attandance(student_id,status) VALUES('$id','$status')";
        $query2 = mysqli_query($db,$insert);
    }
    header('location: taken.php');
?>