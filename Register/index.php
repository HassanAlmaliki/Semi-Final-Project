<?php
require "conectdb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    try {
        
        $stm =$con->prepare("SELECT * FROM users WHERE email = :email");
        $stm->bindParam('email',$email, PDO::PARAM_STR);
        $stm->execute();

        $user = $stm->fetch(PDO::FETCH_ASSOC);

        IF($user ){
            
            header("Location: mainpage.php");
            exit;
        }else{
            header("Location: index.php");
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
   

    <div class="container" id ="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
            
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="Email" placeholder="Email" required>
            <label for="Email">Email</label>
        </div>  
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password"required >
            <label for="password">Password</label>
        </div>
        
        <input type="submit" class="btn" value="Sign In" name="signup">
        </form>
        <p class="or">
            ---------or--------
        </p>
        <div class="links">
            <p>Don' t Have Account Yet?</p>
            <a href="register.php">Sign Up</a>
        </div>

    </div>
    
    
    
</body>
</html>