<?php 

$bdb=new PDO('mysql:host=localhost;dbname=portfolio', 'root','root');









// preparation de la requéte
$podStat = $bdb->prepare('DELETE FROM projects WHERE id=:num LIMIT 1');

// liason du paramaitre nomé
$podStat->bindValue(':num', $_GET['numPost'], PDO::PARAM_INT);


$executeIsOk=$podStat->execute();
if($executeIsOk){
   header('location:dashbord.php');
}
?>