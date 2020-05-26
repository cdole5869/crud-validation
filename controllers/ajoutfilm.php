<?php

$nomfilm=$_POST['nomfilm'];
$genrefilm=$_POST['genrefilm'];
$resumefilm=$_POST['resumefilm'];


$db = new PDO('mysql:host=localhost;dbname=validation;charset=utf8','root','0000');
$req = $db->prepare("INSERT INTO films (nomfilm,genrefilm,resumefilm) VALUES (:nomfilm,:genrefilm,:resumefilm)");
$req->bindParam(':nomfilm',$nomfilm);
$req->bindParam(':genrefilm',$genrefilm);
$req->bindParam(':resumefilm',$resumefilm);
$req->execute();
header('Location: /film.php');
