<?php
session_start();

if ($_POST['email'] == $_POST['conf'] && $_POST['senha'] == $_POST['confsenha']) {
    /* CONEXÃO COM O BANCO DE DADOS */
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo','root','');

    /* PREPARAÇÃO PARA A GRAVAÇÃO */
    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?)");

    /* GRAVAÇÃO DOS DADOS NO BANCO */
    $sql->execute(array(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['sexo'],
        $_POST['data'],
        $_POST['email'],
        $_POST['senha'],
        'vazio',
        $_POST['barbeiro'],
        $_POST['hora']
      
    ));

    $_SESSION['ok'] = "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso!</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";

} else {
    $_SESSION['ok'] = "<div class='alert alert-danger' role='alert'>Dados não conferem!</div>";
    echo "<meta http-equiv= 'refresh' content='0; URL=cadastrar.php'/>";
}
?>
