<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class = "bg-secondary">

<nav class="navbar bg-secondary">
        <div class="container-fluid">
        <a class="btn btn-lg btn-danger" href="../index.php">Voltar</a>
        </div>
    </nav>

    <div class="container mt-4 text-center">
        <h2>Cadastro de Clientes</h2>
        <p>Preencha as informações para concluir o cadastro.</p>

        <form action="bd.php" method="post">

            <div class="row py-2">
                <div class="col-md-12 ">
                    <input class="form-control" type="text" name="nome" id="" placeholder="Nome completo" required>
                </div>

                <div class="col-md-3 mt-3 ">
                    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" required>
                </div>
            </div>

            <div class="row py-2">
                <div class="col-md-6">
                    <select class="form-control" name="sexo" id="" required>
                        <option value="">Selecione o sexo</option>
                        <option value="fem">Feminino</option>
                        <option value="masc">Masculino</option>
                        <option value="indeterminado">Prefiro não marcar</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <select class="form-control" name="barbeiro" id="" required>
                    <option value="">Selecione o seu barbeiro</option>
                        <option value="lucasvieira">Lucas Vieira</option>
                        <option value="pedrocamargo">Pedro Camargo</option>
                    </select>
                </div>

                <div class="col-md-6 mt-3">
                    <select class="form-control" name="hora" id="" required>
                    <option value="">Selecione um horário disponível</option>
                        <option value="10:30">10:30</option>
                        <option value="11:30">11:30</option>
                        <option value="13:30">13:30</option>
                        <option value="14:30">14:30</option>
                        <option value="15:30">15:30</option>
                        <option value="16:30">16:30</option>
                        <option value="17:30">17:30</option>
                        <option value="18:30">18:30</option>
                        <option value="19:30">19:30</option>
                        <option value="20:30">20:30</option>
                        <option value="21:30">21:30</option>
                    </select>
                </div>

                <div class="col-md-6 mt-3">
                    <input class="form-control" type="date" name="data" id="" required>
                </div>
            </div>

            <div class="row py-2 border border-dark rounded mt-3">
                <div class="col-md-6">
                    <label class="form-label" for="email">Digite o e-mail de usuário</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="conf">Confirme o e-mail de usuário</label>
                    <input class="form-control" type="email" name="conf" id="conf" required>
                </div>
            </div>

            <div class="row py-2 border border-dark rounded mt-3">
                <div class="col-md-6">
                    <label class="form-label" for="senha">Digite a senha</label>
                    <input class="form-control" type="password" name="senha" id="senha" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="confsenha">Confirme a senha</label>
                    <input class="form-control" type="password" name="confsenha" id="confsenha" required>
                    
                </div>
            </div>

            <input class="btn btn-lg btn-success mb-5 mt-3" type="submit" value="Cadastrar Usuário">
        </form>

        <?php

            if (!empty($_SESSION['ok'])) {
                echo $_SESSION['ok'];
                unset($_SESSION['ok']);
            }

        ?>


    </div>
    <br>
    <br>
    <br>
    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Qualquer dúvida entre em contato com nosso barbeiro através do número +55 14 99891-6301</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>