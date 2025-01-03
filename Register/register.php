<?php
require "conectdb.php";

    
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = htmlspecialchars(trim($_POST['name']));
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = trim($_POST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
    $password = htmlspecialchars(trim($_POST['password']));
    $confirm_password = htmlspecialchars(trim($_POST['confirm_password']));
    $phone = htmlspecialchars(trim($_POST['phone']));
   
    
    $gender = htmlspecialchars(trim($_POST['gender']));


    if($password !==$confirm_password){
        
        header("Location: register.php?error= password not match");
        exit;

    }

    $hash_password=password_hash($password,PASSWORD_DEFAULT);

    try {
        $stm =$con->prepare("SELECT * FROM users WHERE email = :email");
        $stm->bindParam('email',$email, PDO::PARAM_STR);
        $stm->execute();

        if($stm->rowCount()>0){

            header("Location: register.php?error=Email already registeredsuccess");
            exit;
            

        }
       
            $stm = $con->prepare("INSERT INTO users (name, email, password, phone, gender) 
                                   VALUES (:name, :email, :password, :phone, :gender)");
            
            $stm->bindParam(':name', $name, PDO::PARAM_STR);
            $stm->bindParam(':email', $email, PDO::PARAM_STR);
            $stm->bindParam(':password', $hash_password, PDO::PARAM_STR);
            if (preg_match("/^77[0-9]{7}$/", $phone)) { // here to check phone number start with 77 or the length not nine
            $stm->bindParam(':phone', $phone, PDO::PARAM_STR);

            }else{
                header("Location: register.php?error=Phone number not start 77 or not nine length");

            }
           
            $stm->bindParam(':gender', $gender, PDO::PARAM_STR);
            
        
            $stm->execute();
            header("Location: register.php?success= Success add data  go to sign in");
            exit;
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
    <title>signup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="container" id ="signUp" >
        <h1 class="form-title">Register</h1>
        <div class="card-body">
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger">
                                <?= htmlspecialchars($_GET['error']) ?>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success">
                                <?= htmlspecialchars($_GET['success']) ?>
                            </div>
                        <?php endif; ?>
                        <br>

       
        <form method="post" action="register.php">
            <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name ="name" id="Name" placeholder=" Name" required>
            <label for="Name"> Name</label>
        </div>
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
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confage Password"required >
            <label for="password">Confage Password</label>
        </div>
        <div class="input-group">
            <i class="fas fa-phone"></i>
            <input type="text" name="phone" id="phone" placeholder="Phone"required >
            <label for="phone">Phone</label>
        </div>
        
     
    
        Gender:
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="female">Female

      
       

        <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
       
        <p class="or">
            ---------or--------
        

        <div class="links">
            <p>Already Have Account?</p>
            <a href="index.php">Sign In</a>
        </div>

    </div>
    
</body>
</html>

