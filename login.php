<?php
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login_Page</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
         <!-- notification message -->
         <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input_group">
            <label for="username">Enter Username</label>
            <input type="text" name="username">
        </div>
        
        <div class="input_group">
            <label for="password">Enter Password</label>
            <input type="password" name="password">
        </div>

        <div class="input_group">
            <button type="submit" name="log_user" class="btn">Login</button>
        </div>

        <p>Not yet a member? <a href="register.php">Sign up</a></p>

    </form>
</body>
</html>