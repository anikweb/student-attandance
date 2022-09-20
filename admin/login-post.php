<?php
    require_once('../inc/db.php');
    session_start();
    $_SESSION['loginEmail'] = $email = $_POST['email'];
    $pswd = $_POST['pswd'];
    // echo password_hash('rumdo',PASSWORD_DEFAULT);
    // die();
    if(empty($email)){
       	$_SESSION['loginEmailEmpty']="Email Field is required";
        header("location:login.php");

    }else if(empty($pswd)){
        $_SESSION['loginPassEmpty']="Password Field is required";
        header('location:login.php');
    }else{
        $select = "SELECT COUNT(*) as total, id, name, email, password, role FROM users WHERE email = '$email'";
        $query = mysqli_query($db,$select);
        $assoc = mysqli_fetch_assoc($query);

        if($assoc['total']>0){
            $hash = $assoc['password'];
            if(password_verify($pswd,$hash)){
                $_SESSION['id'] = $assoc['id'];
                header('location:../index.php');
            }else{
                $_SESSION['loginPassErr']='Incorect Password!';
                header('location:login.php');
            }
        }else{
            $_SESSION['loginEmailErr'] = "You don't have an account with this email";
            header('location:login.php');
        }
    }   
?>