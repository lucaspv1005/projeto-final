<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles3.css">
</head>

<body class="bg-secondary">
    <!-- CABEÇALHO DO SITE -->
    <nav class="navbar bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="..\Recursos/barbearia.png" alt="" width="50px"></a>

            <div class="container text-center">
                <a class="btn btn-lg btn-success" href="listar.php">Listar Clientes</a>
                <a class="btn btn-lg btn-warning" href="cortes.php">Cortes</a>
                <a class="btn btn-lg btn-light" href="sobrenos.php">Sobre nós</a>
            </div>

            <a class="btn btn-dark" href="logout.php">Sair</a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="principalfotos">
                    <div class="nomes">
                        <h1>Imagem de fora de nossa barbearia </h1>
                    </div>
                    <img src="..\Recursos/fotofora.jpg" class="fora" alt="" width="600px">
                    <h2>Rua das Macieiras, Nº 218, Bairro das Árvores</h2>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="principalfotos">
                    <div class="nomes">
                        <h1>Tabela de preços</h1>
                    </div>

    <br>
    <br>
   
                    <img src="..\Recursos/tabela.png" class="tabela" alt="" width="900px">
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <!-- RODAPÉ DO SITE -->
    <footer class="footer text-center fixed-bottom bg-dark py-3">
        <div class="container">
            <p class="text-light">Qualquer dúvida entre em contato com nosso barbeiro através do número +55 14 99891-6301</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
