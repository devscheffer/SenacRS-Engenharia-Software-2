<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente Cadastrado!</title>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/139864ae00.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/css/bootstrap.min.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header class="navbar navbar-gradiente">
        <div class="container justify-content-between align-items-baseline">
            <h1><a class="navbar-brand text-white" href="index.html">Super Placas</a></h1>
            <h3 class="text-white nome-departamento">DEPARTAMENTO ADMINISTRATIVO</h3>
        </div>
    </header>
    <main class="container w-50 mt-5">
        <i class="fas fa-check-circle d-block text-center icone-sucesso mb-5"></i>
        <h5 class="text-center mb-5">Pedido cadastrado com sucesso!</h5>
        <div class="row justify-content-center">
            <a href="emitir-recibo.php?idpedido=<?php echo $_POST['idpedido'];?>" class="btn btn-pink text-white w-25 p-2 mx-3">Emitir Recibo</a>
            <a href="index.html" class="btn btn-outline-pink w-25 p-2 mx-3">Voltar</a>
        </div>
    </main>

    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>