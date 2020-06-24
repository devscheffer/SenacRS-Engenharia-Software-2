$(document).ready(()=>{
	idpedido = $('#idpedido').val();
	console.log(idpedido)
	$.get(wsendpoint + '/api/pedido/' + idpedido, data => {
		console.log(data)
		valorMaterial = parseFloat(data.largura) * parseFloat(data.altura) * precoPorArea;
		valorDesenho = precoPorLetra * data.frase.length

		carregarInfoCliente(data.idcliente).then(info => $('#cliente').text(info))
		$('#largura').text(data.largura.toFixed(2) + " m")
		$('#altura').text(data.altura.toFixed(2) + " m")
		$('#frase').text(data.frase)
		$('#cor-placa').text(coresPlaca[data.idcorplaca])
		$('#cor-texto').text(coresFrase[data.idcorfrase])
		$('#valor-material').text("R$" + valorMaterial.toFixed(2))
		$('#valor-desenho').text("R$" + valorDesenho.toFixed(2))
		$('#valor-pedido').text("R$" + data.valorservico.toFixed(2))
		$('#valor-sinal').text("R$" + data.valorsinal)
		$('#data-entrega').text(formataDataEntrega(data.dataentrega))
	});
})


function formataDataEntrega(stringData){
	data = new Date(stringData)

	ano = data.getFullYear()
	mes = data.getMonth() + 1 < 10? "0" + (data.getMonth() + 1) : data.getMonth() + 1
	dia = data.getDate() < 10? "0" + data.getDate() : data.getDate()

	return `${dia}/${mes}/${ano}`
}

function carregarInfoCliente(idcliente){
	return new Promise((resolve, reject)=>{
		$.get(wsendpoint + '/api/cliente/' + idcliente, (data)=>{
			resolve(`${data.idcliente} - ${data.nome}`);
		})

	})
}