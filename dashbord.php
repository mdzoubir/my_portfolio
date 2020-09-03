<?php



session_start();

if (isset($_SESSION['admin'])) {
?>
<?php include('includes/users/header.php'); include('includes/admin/navbar.php');?>
<section id="dashbord">
    <div class="dashbord container">
        <form action="" method="POST">
            <h1>Creet Project</h1>
            <div>
                <label for="">Titre</label>
                <input type="text" placeholder="titre de le project">
            </div>
            <div>
                <label for="">description</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Date de debut</label>
                <input type="date">
            </div>
            <div>
                <label for="">Date de fun</label>
                <input type="date">
            </div>
            <div>
                <input type="submit" value="POST">
            </div>
        </form>
    </div>
</section>



<?php include('includes/admin/footer.php'); ?>
<?php 
}  else{
    header("location:login.php");
}


?>