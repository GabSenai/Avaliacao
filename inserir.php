<?php

include('connect.php');

$titulo = $_POST['title'];
$descricao = $_POST['description'];

$stmt = $connect->prepare("INSERT INTO posts(titulo,descricao) VALUES(:titulo,:descricao)");

$stmt->bindParam(':titulo',$titulo);
$stmt->bindParam(':descricao',$descricao);
$stmt->execute();
echo "Enviado";

?>