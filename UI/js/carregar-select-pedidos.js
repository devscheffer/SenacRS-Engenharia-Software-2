$(document).ready(() => {
	$.get(wsendpoint + '/api/pedido', data => {
		select = $('#select-pedido')
		$(data).each((i, pedido)=>{
			getTextoPedido(pedido).then(texto => {
				option = $('<option>').val(pedido.idpedido).text(texto)
				select.append(option);
			})
		})
	})
});


function getTextoPedido(pedido){
	return new Promise((resolve, reject) => {
		$.get(wsendpoint + '/api/cliente/' + pedido.idcliente, cliente => {
			dataentrega = formataDataEntrega(pedido.dataentrega);
			nomecliente = cliente.nome;
			descPlaca = `${pedido.largura.toFixed(2)}m X ${pedido.altura.toFixed(2)}m - "${pedido.frase}"`

			resolve(`${dataentrega} - ${nomecliente} - ${ descPlaca}`);
		});
	});
}

function formataDataEntrega(stringData){
	data = new Date(stringData)

	ano = data.getFullYear()
	mes = data.getMonth() + 1 < 10? "0" + (data.getMonth() + 1) : data.getMonth() + 1
	dia = data.getDate() < 10? "0" + data.getDate() : data.getDate()

	return `${dia}/${mes}/${ano}`
}