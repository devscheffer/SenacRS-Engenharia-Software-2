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

    <main class="container text-center mt-5">
        <h4 class="underline-pink mb-4">Resumo do Pedido</h4>

        <dl>
            <div class="dt-group">
                <dt>Resumo do Pedido: </dt>
                <dd id="descricao-placa">Descricao Placa</dd>
            </div>

            <div class="dt-group">
                <dt>Valor do Material: </dt>
                <dd id="valor-material">R$ 294,70</dd>
            </div>

            <div class="dt-group">
                <dt>Valor do desenho: </dt>
                <dd id="valor-desenho">R$ 6,60</dd>
            </div>

            <hr class="w-35">

            <div class="dt-group">
                <dt>Valor Total do pedido: </dt>
                <dd id="valor-pedido">R$ 10,00</dd>
            </div>

            <div class="dt-group">
                <dt>Valor Minimo do Sinal: </dt>
                <dd id="valor-min-sinal">R$ 24,00</dd>
            </div>

            <div class="dt-group">
                <dt>Data de entrega sugerida</dt>
                <dd id="data-entrega-sug">03/01/2020</dd>
            </div>

            <hr class="w-35">
        </dl>

        <form action="cadastrar-placa-sucesso.html" method="POST" id="form-placa">
            <input name="idcliente" type="hidden" value= <?php echo $_POST['idcliente']; ?>>
            <input name="altura" type="hidden" value= <?php echo $_POST['altura']; ?>>
            <input name="largura" type="hidden" value= <?php echo $_POST['largura']; ?>>
            <input name="frase" type="hidden" value= <?php echo $_POST['frase']; ?>>
            <input name="idcorplaca" type="hidden" value= <?php echo $_POST['idcorplaca']; ?>>
            <input name="idcorfrase" type="hidden" value= <?php echo $_POST['idcorfrase']; ?>>
            <input name="valorservico" type="hidden" value="">

            <div class="form-group text-left mx-auto row w-35">
                <label for="sinal" class="font-weight-bold col-7">Valor do Sinal: </label>
                <input type="number" id="sinal" name="valorsinal" min="0" step="0.01" class=" form-control input-pink col-5">
            </div>

            <div class="form-group text-left mx-auto row w-35">
                <label for="entrega" class="font-weight-bold col-7">Data de Entrega: </label>
                <input type="date" name="dataentrega" id="entrega" class="form-control input-pink col-5">
            </div>

            <input type="submit" value="Finalizar" class="d-block btn btn-pink text-white mx-auto w-25 py-2 mt-5">
        </form>
    </main>

    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="js/variaveis.js"></script>
    <script src="js/encontrar-data-entrega.js"></script>
    <script src="js/insere-resumo-placa.js"></script>
</body>
</html>