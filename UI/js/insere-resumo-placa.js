$(document).ready(() => {
	form = document.querySelector('#form-placa');

	altura = form.altura.value
	largura = form.largura.value
	frase = form.frase.value
	idCorFrase = form.idcorfrase.value
	idCorPlaca = form.idcorplaca.value

	corFrase = coresFrase[idCorFrase]
	corPlaca = coresPlaca[idCorPlaca]

	quantidadeLetras = frase.length

	resumoPlaca = `Placa ${largura}X${altura} ${corPlaca}. Frase "${frase}" (${quantidadeLetras} letras) cor ${corPlaca}.`

	areaPlaca = parseFloat(largura) *  parseFloat(altura)
	valorMaterial = precoPorArea * areaPlaca
	valorDesenho = precoPorLetra * quantidadeLetras

	valorTotal = (valorMaterial + valorDesenho).toFixed(2)
	valorMinSinal = (0.5 * valorTotal).toFixed(2)

	$("#descricao-placa").text(resumoPlaca)
	$("#valor-material").text("R$" + valorMaterial)
	$("#valor-desenho").text("R$" + valorDesenho)
	$("#valor-pedido").text("R$" + valorTotal)
	$("#valor-min-sinal").text("R$" + valorMinSinal)

	$("#sinal")
		.attr('min', valorMinSinal)
		.val(valorMinSinal)

	// CALCULAR DATA ENTREGA:
	//encontrarDataEntrega($("#data-entrega-sug"), $("#entrega"));



});