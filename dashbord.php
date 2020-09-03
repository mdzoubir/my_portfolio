<?php
session_start();

if (isset($_SESSION['admin'])) {



?>

<?php 
include('includes/admin/db.php');

// ----------------new projects
if (isset($_POST['ajouter'])) {
    if (!empty($_POST['titre']) AND !empty($_POST['desc']) AND !empty($_POST['date_d']) AND !empty($_POST['date_f'])) {
        $titre = htmlspecialchars($_POST['titre']);
        $desc = htmlspecialchars($_POST['desc']);
        $date_d = $_POST['date_d'];
        $date_f = $_POST['date_f'];
        $sql = "INSERT INTO projects (titre, description, date_debut, date_fin, date_pub) VALUE ('$titre', '$desc', '$date_d', '$date_f', NOW())";
        mysqli_query($conn, $sql);
    }
}





include('includes/users/header.php'); 
include('includes/admin/navbar.php');
?>
<section id="dashbord">
    <div class="dashbord container">
        <form action="" method="POST">
            <h1>Creet Project</h1>
            <div>
                <label for="">Titre</label>
                <input type="text" placeholder="Titre de le project" name="titre">
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="desc" id="" cols="30" rows="10" placeholder="description"></textarea>
            </div>
            <div>
                <label for="">Date de début</label>
                <input type="date" name="date_d">
            </div>
            <div>
                <label for="">Date de fin</label>
                <input type="date" name="date_f">
            </div>
            <div>
                <input type="submit" value="POST" name="ajouter">
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