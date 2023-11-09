<?php

session_start();

if (empty($_SESSION['usuario'])) {
    echo "<script>alert('Usuário não logado!')</script>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
}

$pdo = new PDO("mysql:host=localhost;dbname=exemplo","root","");
$sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
$sql->execute(array($_POST['id']));
$info = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("UPDATE `usuarios` SET nome=?, cpf=?, sexo=?, `data`=?, email=?, senha=?, sobrenome=?, barbeiro=?, hora=? WHERE id=?");
$sql->execute(array(
    $_POST['nome'], $_POST['cpf'], $_POST['sexo'], $_POST['datanasc'], $_POST['email'],
    sha1($_POST['senha']), $_POST['sobrenome'], $_POST ['barbeiro'], $_POST ['hora'], $_POST['id']));

$_SESSION['erro'] = "<div class='alert alert-success' role='alert'>Alterações realizadas com sucesso!</div>";
echo "<meta http-equiv= 'refresh' content='0; URL=listar.php'/>";

?>