<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Pedido</title>
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

    <main class="container mt-5">
        <h4>Novo Pedido</h4>
        <div class="w-75 mx-auto mt-5 row">
            <form action="cadastrar-placa-confirmar.php" class="mt-5 col-8" method="POST">
                <input type="hidden" name="idcliente" value="<?php echo $_POST["idcliente"]; ?>">
                <fieldset>
                    <div class="row m-0 p-0 justify-content-between">
                        <legend class="col-12 p-0">Dimensões da Placa:</legend>          
                        <div class="form-group row align-items-center col-6 row p-0">
                            <label for="altura" class="col-6">Altura:</label>
                            <input type="number" id="altura" name="altura" class="form-control col-6 input-pink" required min="0" step="0.01">
                        </div>
                        <div class="form-group align-items-center col-6 row p-0">
                            <label for="largura" class="col-6">Largura:</label>
                            <input type="number" name="largura" id="largura" class="form-control col-6 input-pink" required min="0" step="0.01">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Conteúdo Placa:</legend>
                    <div class="form-group align-items-center row">
                        <label for="frase" class="col-3">Frase:</label>
                        <input type="text" id="frase" name="frase" class="form-control input-pink col-9" required>
                    </div>
                    <div class="form-group align-items-center row">
                        <label for="cor" class="col-3">Cor Placa:</label>
                        <select name="idcorplaca" id="cor" class="form-control input-pink col-9" required>
                            <option value="" selected disabled>Selecione...</option>
                            <option value="1">Branca</option>
                            <option value="2">Cinza</option>
                        </select>
                    </div>
                    <div class="form-group align-items-center row">
                        <label for="cor-frase" class="col-3">Cor Frase:</label>
                        <select name="idcorfrase" id="cor-frase" class="form-control input-pink col-9" required>
                            <option value="" selected disabled>Selecione...</option>
                            <option value="1">Azul</option>
                            <option value="2">Vermelho</option>
                            <option value="3">Amarelo</option>
                            <option value="4">Preto</option>
                            <option value="5">Verde</option>
                        </select>
                    </div>
                </fieldset>
                
                <input type="submit" class="btn btn-pink text-white mt-5 d-block w-25 p-2 mx-auto" value="Continuar">
            </form>
            
            <div class="mt-5 col-4">
                <h5 class="legend">Prévia:</h5>
            </div>
        </div>
    </main>
    
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>