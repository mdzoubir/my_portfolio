<?php 
// include('conn.php');
$bdb=new PDO('mysql:host=localhost;dbname=portfolio', 'root','root');
$pdoStat = $bdb->prepare('UPDATE projects set titre=:titre, description=:description, date_debut=:date_debut, date_fin=:date_fin WHERE id=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numPost'], PDO::PARAM_INT);
$pdoStat->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$pdoStat->bindValue(':description', $_POST['desc'], PDO::PARAM_STR);
$pdoStat->bindValue(':date_debut', $_POST['date_d'], PDO::PARAM_STR);
$pdoStat->bindValue(':date_fin', $_POST['date_f'], PDO::PARAM_STR);
$executeIsOk=$pdoStat->execute();

header('location:dashbord.php');

?>