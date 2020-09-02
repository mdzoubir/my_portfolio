<?php



session_start();

if (isset($_SESSION['admin'])) {
?>






<?php 
}  else{
    header("location:login.php");
}


?>