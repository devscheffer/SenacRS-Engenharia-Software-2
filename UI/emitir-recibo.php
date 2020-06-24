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
        <input type="hidden" id="idpedido" value="<?php echo $_GET['idpedido'];?>">
        <h4 class="text-center underline-pink text-center">Recibo</h4>
        <div class="row w-75 mx-auto mt-5">
            <div class="col-6">
                <h5>Placa</h5>
                <dl>
                    <div class="dt-group">
                        <dt>Largura:</dt>
                        <dd id="largura">2m</dd>
                    </div>
                        
                    <div class="dt-group">
                        <dt>Altura:</dt>
                        <dd id="altura">1m</dd>
                    </div>

                    <div class="dt-group">
                        <dt>Frase:</dt>
                        <dd id="frase">Frase</dd>
                    </div>

                    <div class="dt-group">
                        <dt>Cor Placa:</dt>
                        <dd id="cor-placa">Cinza</dd>
                    </div>

                    <div class="dt-group">
                        <dt>Cor Texto:</dt>
                        <dd id="cor-texto">Azul</dd>
                    </div>
                </dl>
            </div>
            
            <div class="col-6">
                <h5>Pedido</h5>
                <dl>
                    <div class="dt-group">
                        <dt>Cliente:</dt>
                        <dd id="cliente"></dd>
                    </div>

                    <div class="dt-group">
                        <dt>Valor do Material:</dt>
                        <dd id="valor-material">R$ 250,00</dd>
                    </div>
                    
                    <div class="dt-group">
                        <dt>Valor do Desenho:</dt>
                        <dd id="valor-desenho">R$ 6,40</dd>
                    </div>
                    
                    <div class="dt-group">
                        <dt>Valor Total do Pedido</dt>
                        <dd id="valor-pedido">R$ 250,00</dd>
                    </div>
                    
                    <div class="dt-group">
                        <dt>Valor Sinal</dt>
                        <dd id="valor-sinal">R$ 125,00</dd>
                    </div>
                    
                    <div class="dt-group">
                        <dt>Data de Entrega:</dt>
                        <dd id="data-entrega">01/01/2019</dd>
                    </div>
                </dl>
            </div>
        </div>
        
        <div class="row justify-content-center w-50 mx-auto mt-5">
            <a href="emitir-recibo-sucesso.html" class="btn btn-pink text-white mx-3 w-25">Imprimir</a>
            <a href="index.html" class="btn btn-outline-pink mx-3 w-25">Voltar</a>
        </div>
    </main>
    
    <script src="vendor/js/jquery.min.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="js/variaveis.js"></script>
    <script src="js/carregar-recibo.js"></script>
</body>
</html>