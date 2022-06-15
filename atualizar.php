<?php

include('connect.php');

$id = 2;
$titulo = "novo";
$descricao = "nova";

$stmt = $connect->prepare("UPDATE posts SET titulo = :titulo, descricao = :descricao WHERE id = :ID");

$stmt->bindParam(':ID', $id);
$stmt->bindParam(':titulo',$titulo);
$stmt->bindParam(':descricao',$descricao);
$stmt->execute();

?>