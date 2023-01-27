<?php
    session_start();
    include('server.php');
    $errors = array();

    if(isset($_POST['log_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username)) {
            array_push($errors, "Username is required");
        }
        if(empty($password)) {
            array_push($errors, "Password is required");
        }
    }
    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND passwords = '$password' ";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You're now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong Username or Password");
            $_SESSION['error'] = "Login failed";
            header('location: login.php');
        }
    }
?>