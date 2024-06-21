<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
<?php
    $nameError = "";
    $passError = "";
    $loginError = "";
    $welcomeMessage = "";

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username)){
            $nameError = "Name is Required";
        } else {
            $username = trim($username);
            $username = htmlspecialchars($username);
            if(!preg_match("/^[a-zA-Z]+$/", $username)){
                $nameError = "Name should contain only characters";
            }
        }

        if(empty($password)){
            $passError = "Password is Required";
        } else {
            if(strlen($password) <= 8){
                $passError = "At least 8 characters";
            } else if(!preg_match("#[0-9]+#", $password)){
                $passError = "At least one digit";
            } else if(!preg_match("#[a-z]+#", $password)){
                $passError = "At least one lowercase letter";
            } else if(!preg_match("#[A-Z]+#", $password)){
                $passError = "At least one uppercase letter";
            }
        }

        if(empty($nameError) && empty($passError)){
            if($username == "Rojikensu" && $password == "Rojikensu123"){
                $welcomeMessage = "Welcome!";
            } else {
                $loginError = "Incorrect Username or Password";
            }
        }
    }
?>

<div class="form_container">
    <h3>Login Form Validation</h3>
    <form method="post" action="">
        <p>
            <input type="text" name="username" placeholder="Enter Username">
            <span class="error"><?php echo $nameError ?></span>
        </p>
        <p>
            <input type="password" name="password" placeholder="Enter Password">
            <span class="error"><?php echo $passError ?></span>
        </p>
        <p>
            <input type="submit" name="submit" value="Login">
        </p>
        <p class="error"><?php echo $loginError ?></p>
        <p class="welcome"><?php echo $welcomeMessage ?></p>
    </form>
</div>

</body>
</html>