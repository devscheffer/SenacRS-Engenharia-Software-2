function encontrarDataEntrega(textLabel, input){
	hoje = new Date();
	dataEntrega = new Date(hoje);
	dataEntrega.setDate(dataEntrega.getDate() + 1);

	new Promise(function(res, rej){
		encontrouData = false
		while(!encontrouData){
			console.log(dataEntrega)
			ano = dataEntrega.getFullYear();
			mes = dataEntrega.getMonth() < 10 ? "0" + dataEntrega.getMonth() : dataEntrega.getMonth();
			dia = dataEntrega.getDate() < 10 ? "0" + dataEntrega.getDate() : dataEntrega.getDate();
			dateString = `${ano}-${mes}-${dia}` 
			
			$.get(wsendpoint + `/api/pedido/date/${dateString}`, (data) => {
				if (data.length < 6){ //verifica se o numero de pedidos para o dia é menor que 6
					encontrouData = true
					resolve(dataEntrega);
				}else{
					dataEntrega.setDate(dataEntrega.getDate() + 1);
				}
			});

		}

	}).then(function(dataResolvida){
		ano = dataResolvida.getFullYear();
		mes = dataResolvida.getMonth() < 10 ? "0" + dataResolvida.getMonth() : dataResolvida.getMonth();
		dia = dataResolvida.getDate() < 10 ? "0" + dataResolvida.getDate() : dataResolvida.getDate();
		dataFormatada = `${dia}/${mes}/${ano}` 
		dataFormatadaVal = `${ano}-${mes}-${dia}`

		textLabel.text(dataFormatada);
		input.attr('min', dataFormatadaVal).val(dataFormatadaVal);
	})
}
