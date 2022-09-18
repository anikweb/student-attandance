<?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
    require('inc/db.php');
    $name = $_POST['name'];
    $department = $_POST['department'];
    $roll = $_POST['roll'];
    $session = $_POST['session'];
    $semester = $_POST['semester'];
    $contactNumber = $_POST['contactNumber'];
    $email = $_POST['email'];
    $guardianName = $_POST['guardianName'];
    $contactNumberGurdian = $_POST['contactNumberGurdian'];

    $insert  = "INSERT INTO students(student_name,department,roll,session,semester,contact_number,email,guardian_name,gurdian_number) VALUES('$name','$department','$roll','$session','$semester','$contactNumber','$email','$guardianName','$contactNumberGurdian')";
    $query = mysqli_query($db,$insert);
    if($query){
        header('location: students.php');
    }
}else{
    echo 'sorry';
}

?>