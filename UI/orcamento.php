<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orcamento</title>
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
        <h4 class="underline-pink mb-4">Resumo do Orçamento</h4>

        <dl>
            <div class="dt-group">
                <dt>Resumo do Pedido: </dt>
                <dd id="descricao-placa">Descricao Placa</dd>
            </div>            

            <div class="dt-group">
                <dt>Cliente: </dt>
                <dd id="descricao-cliente">Descricao Placa</dd>
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
        <form id="form-placa" action="#">
            <input name="idcliente" type="hidden" value='<?php echo $_POST['idcliente'];?>'>
            <input name="altura" type="hidden" value='<?php echo $_POST['altura']; ?>'>
            <input name="largura" type="hidden" value='<?php echo $_POST['largura']; ?>'>
            <input name="frase" type="hidden" value='<?php echo $_POST['frase']; ?>'>
            <input name="idcorplaca" type="hidden" value='<?php echo $_POST['idcorplaca']; ?>'>
            <input name="idcorfrase" type="hidden" value='<?php echo $_POST['idcorfrase']; ?>'>
            <input name="valorservico" type="hidden" value="">
            <input name="idpedido" type="hidden" value="">
        </form>

        <a class="btn btn-pink text-white mx-2" href="cadastrar-placa-selecionar-cliente.html">Cadastrar</a>
        <a href="index.html" class="btn btn-outline-pink mx-2 px-4">Voltar</a>
    </main>

    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="js/variaveis.js"></script>
    <script src="js/encontrar-data-entrega.js"></script>
    <script src="js/insere-resumo-placa.js"></script>
    <script src="js/cadastra-placa.js"></script>
</body>
</html>