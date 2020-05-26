<?php


$db = new PDO('mysql:host=localhost;dbname=validation;charset=utf8','root','0000');
$req = $db->prepare("DELETE FROM films WHERE idfilm=:idfilm");
$req->bindParam(':idfilm',$_POST['idfilm']);
$req->execute();
header('Location: /film.php');
