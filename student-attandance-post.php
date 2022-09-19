<?php
    require 'inc/db.php';
    $department = $_POST['department'];
    $session = $_POST['session'];
    $semester = $_POST['semester'];


    $select = "SELECT * FROM students WHERE department='$department' AND session='$session' AND semester='$semester'";
    $query = mysqli_query($db,$select);

    $rows = mysqli_num_rows($query);
    $assoc = mysqli_fetch_assoc($query);




    
    for ($i=0; $i < $rows; $i++) { 
        if(isset($_POST['status'][$i])){
            // echo $_POST['status'][$i]."<br/>";
            foreach ($query as $key => $value) {
                if($value['id'] == $_POST['status'][$i]){
                    // echo 'milse '. $_POST['status'][$i].' '.$value['id'].'<br/>';
                    $id = $_POST['status'][$i];
                    $insert = "INSERT INTO attandance(student_id,status) VALUES('$id','true')";
                    $query2 = mysqli_query($db,$insert);
                }else{
                    // echo 'mile nai '.$value['id'].'<br/>';
                    $id2 = $value['id'];
                    $insert = "INSERT INTO attandance(student_id,status) VALUES('$id2','false')";
                    $query3 = mysqli_query($db,$insert);
                }
            }
        }
    }
    
    // foreach ($_POST as $key => $value) {
    //    echo $_POST['student_id'][$key]."<br/>";
    //    echo $_POST['status'][$key]."<br/>";
    // }
    // echo $_POST['student_id'][1];
    // var_dump();
    // foreach($_POST as $value){
    //     foreach ($value as $key => $status) {
    //         var_dump($status);
    //     }
    // }

?>