<?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
    require('inc/db.php');

    $id =  $_POST['id'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $roll = $_POST['roll'];
    $session = $_POST['session'];
    $semester = $_POST['semester'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $guardianName = $_POST['guardianName'];
    $contactNumberGurdian = $_POST['contactNumberGurdian'];

    $update  = "UPDATE students 
    SET 
    student_name = '$name',
    department='$department',
    roll='$roll',
    session='$session',
    semester='$semester',
    contact_number='$contactNumber',
    email='$email',
    guardian_name='$guardianName',
    guardian_number='$contactNumberGurdian' WHERE id=$id";
    
    $query = mysqli_query($db,$update);

    if($query){
        header('location: students.php');
    }
}else{
    echo 'sorry';
}

?>