<?php
session_start();

if (isset($_SESSION['admin'])) {



?>
<?php 
// include('conn.php');
$bdb=new PDO('mysql:host=localhost;dbname=portfolio', 'root','root');

// preparation de la requéte
$podStat = $bdb->prepare('SELECT * FROM projects WHERE id=:num');

// liason du paramaitre nomé
$podStat->bindValue(':num', $_GET['numPost'], PDO::PARAM_INT);


$executeIsOk=$podStat->execute();


//le resulta

$contact = $podStat->fetch();
// var_dump($contact);
include('includes/users/header.php'); 
include('includes/admin/navbar.php');
?>
<section id="cp">
    <div class="cp container">
        <form action="mod.php" method="POST">
            <input type="hidden" name="numPost" value="<?= $contact['id']?>">
            <h1>Creet Project</h1>
            <div>
                <label for="">Titre</label>
                <input type="text" placeholder="Titre de le project" name="titre" value="<?= $contact['titre']?>">
            </div>
            <div>
                <label for="">Description</label>
                <textarea name="desc" id="" cols="30" rows="10" placeholder="description"><?= $contact['description']?></textarea>
            </div>
            <div>
                <label for="">Date de début</label>
                <input type="date" name="date_d" value="<?= $contact['date_debut']?>">
            </div>
            <div>
                <label for="">Date de fin</label>
                <input type="date" name="date_f" value="<?= $contact['date_fin']?>">
            </div>
            <div>
                <input type="submit" value="EDIT" name="edit">
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