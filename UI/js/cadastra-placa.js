$('#form-placa').submit(e=>{
	e.preventDefault();

	form = e.target;

	data = {
		"idcliente": form.idcliente.value,
		"dataentrega": form.dataentrega.value,
		"valorservico": form.largura.value,
		"valorsinal": form.valorsinal.value,
		"altura": form.altura.value,
		"largura": form.largura.value,
		"frase": form.frase.value,
		"idcorplaca": form.idcorplaca.value,
		"idcorfrase": form.idcorfrase.value
	}
	verificarData(data.dataentrega)
	.then(()=>{
		$.post(wsendpoint + "/api/pedido", data, (resp) =>{
			form.idpedido.value = resp.idpedido
			form.submit();
		}).fail((xhr, status, error)=>{
			console.log(error)
		})
	})
	.catch(()=>{
		errMessage = $('<p>').text(`Data '${data.dataentrega}' indisponível`).addClass(['text-danger', 'font-weight-bold'])
		$(form).prepend(errMessage)
	})


})

function verificarData(data){
	console.log(wsendpoint + "/api/pedido/date/" + data)
	return new Promise((resolve, reject) => {
		$.get(wsendpoint + "/api/pedido/date/" + data, (data)=>{
			if (data.length < 6){
				resolve()
			} else {
				reject()
			}
		});
	})
}