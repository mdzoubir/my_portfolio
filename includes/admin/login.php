<?php
session_start();
include('db.php');
if (isset($_POST['login'])) {
    $user = htmlspecialchars(trim($_POST['user'])); //htmlspecialchars : pour les tags   /trim: Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $pass = $_POST['pass'];
    $passV = $_POST['passVerify'];
    $requit = "SELECT * FROM admin WHERE Username='$user' AND password='$pass'"; //verefication de user and pass
    $result = mysqli_query($conn, $requit);
    if($pass == $passV){
        if(mysqli_num_rows($result)>0){
            $_SESSION["admin"]=$user;
            header("location:index.php");
            
            }
        else{
            $message_error = 'your usename or password is incorrect';
        }
    }else{
        $message_error='your password is incorrect';
    }
    
} 
?>
<section id="login">
    <div class="login container">
        <div class="conn">
            <form action="" method="POST">
                <h1>Login</h1>
                <div class="user">
                    <label for="">Name</label>
                    <input type="text" placeholder="name"  name="user" require>
                </div>
                <div class="pass">
                    <label for="">Password</label>
                    <input type="password" placeholder="password" name="pass" require>
                </div>
                <div class="pass">
                    <label for="">Verify Password </label>
                    <input type="password" placeholder="Verify Password" name="passVerify" require>
                </div>
                <p class="msge"> <?php if(isset($message_error)){ echo $message_error; }?></p>
                <div class="login">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </div>
    </div>
</section>