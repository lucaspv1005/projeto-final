<?php
/*     echo "Editar";
    print_r($_GET); */

    session_start();

    if (empty($_SESSION['usuario'])) {
        echo "<script>alert('Usuário não logado!')</script>";
        echo "<meta http-equiv= 'refresh' content='0; URL=../index.php'/>";
    }
    
    $pdo = new PDO("mysql:host=localhost;dbname=exemplo","root","");
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE id=?");
    $sql->execute(array($_GET['id']));
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    /* print_r($info);
    echo "<br>";
    echo "-------------------------------- <br>";
    echo "info--email->".$info[0]['email']."<br>";
    echo "usuario----->".$_SESSION['usuario'];
    echo "<br><br>"; */

    if ($info[0]['email'] != $_SESSION['usuario']) {
        //echo "Usuário inválido";
        $_SESSION['erro'] = "<div class='alert alert-danger' role='alert'>Usuário inválido para operação!</div>";
        echo "<meta http-equiv= 'refresh' content='0; URL=listar.php'/>";
        exit();

    } 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="principal.php"><img src="../Recursos/barbearia.png" alt="" width="50px"></a>
        </div>
    </nav>

    <div class="container text-center mt-2">
        <h2>Atualizar Cadastro</h2>
        <p>
            Altere as informações abaixo e clique no botão
            atualizar para modificar o seu cadastro.
        </p>
        <?php
       
        ?>
        <form action="updatecad.php" method="post">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <input class="form-control" type="text" name="id" id="" placeholder="ID" 
                        value="<?php
                                if (isset($info)) {
                                    echo $info[0]['id'];
                                }
                            ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input class="form-control" type="text" name="nome" id="" placeholder="Primeiro nome" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['nome'];
                            }
                        ?>" required>
                </div>
              
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <select class="form-control" name="sexo" id="" required>
                        <option <?php if ($info[0]['sexo'] == "Selecione") echo "selected"; ?>>Selecione</option>
                        <option <?php if ($info[0]['sexo'] == "fem") echo "selected"; ?>>Feminino</option>
                        <option <?php if ($info[0]['sexo'] == "masc") echo "selected"; ?>>Masculino</option>
                        <option <?php if ($info[0]['sexo'] == "indeterminado") echo "selected"; ?>>Prefiro não dizer</option>
                        
                    </select>
                </div>

                
            <div class="row mt-3">
                <div class="col-md-3">
                    <select class="form-control" name="barbeiro" id="" required>
                        <option <?php if ($info[0]['barbeiro'] == "Selecione") echo "selected"; ?>>Alterar o barbeiro</option>
                        <option <?php if ($info[0]['barbeiro'] == "lucasvieira") echo "selected"; ?>>Lucas Vieira</option>
                        <option <?php if ($info[0]['barbeiro'] == "pedrocamargo") echo "selected"; ?>>Pedro Camargo</option>
                       
                    </select>
                </div>

                <div class="row mt-3">
                <div class="col-md-3">
                    <select class="form-control" name="hora" id="" required>
                        <option <?php if ($info[0]['hora'] == "Selecione") echo "selected"; ?>>Alterar o horário</option>
                        <option <?php if ($info[0]['hora'] == "10:30") echo "selected"; ?>>10:30</option>
                        <option <?php if ($info[0]['hora'] == "11:30") echo "selected"; ?>>11:30</option>
                        <option <?php if ($info[0]['hora'] == "13:30") echo "selected"; ?>>13:30</option>
                        <option <?php if ($info[0]['hora'] == "14:30") echo "selected"; ?>>14:30</option>
                        <option <?php if ($info[0]['hora'] == "15:30") echo "selected"; ?>>15:30</option>
                        <option <?php if ($info[0]['hora'] == "16:30") echo "selected"; ?>>16:30</option>
                        <option <?php if ($info[0]['hora'] == "17:30") echo "selected"; ?>>17:30</option>
                        <option <?php if ($info[0]['hora'] == "19:30") echo "selected"; ?>>19:30</option>
                        <option <?php if ($info[0]['hora'] == "20:30") echo "selected"; ?>>20:30</option>
                        <option <?php if ($info[0]['hora'] == "21:30") echo "selected"; ?>>21:30</option>
             
                    </select>
                </div>
               
               
               
                <!-- CPF -->
                <div class="col-md-3">
                    <input class="form-control" type="number" name="cpf" id="" placeholder="CPF" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['cpf'];
                            }
                        ?>"
                    required>
                </div>
                <!-- Data de nascimento -->
                <div class="col-md-3">
                    <input class="form-control" type="date" name="datanasc" id="" placeholder="Data de nascimento" 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['data'];
                            }
                        ?>"
                    required>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="email" name="email" id="" placeholder="Digite seu e-mail de usuário..." 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['email'];
                            }
                        ?>"
                    required>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="email" name="emailconf" id="" placeholder="Confirme seu e-mail de usuário..." 
                    value="<?php
                            if (isset($info)) {
                                echo $info[0]['email'];
                            }
                        ?>"
                    required>
                </div>

            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <input class="form-control" type="password" name="senha" id="" placeholder="Digite sua senha..." required>
                </div>
                <div class="col-md-6">
                    <input class="form-control" type="password" name="senhaconf" id="" placeholder="Confirme sua senha..." required>
                </div>

            </div>

            <input class="btn btn-lg btn-success mt-5" name="atualizar" type="submit" value="Atualizar dados">
            <a class="btn btn-lg btn-danger mt-5 text-light" href="principal.php">Cancelar</a>
            
        </form>

        <br><br><br><br>
    </div>

    <footer class="footer py-3 bg-dark fixed-bottom">
        <div class="container text-center">
           <p class="text-light">Todos os direitos reservados - 2023</p> 
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>