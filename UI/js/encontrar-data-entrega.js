function dataEntrega(){
	hoje = new Date();
	amanha = new Date(hoje);
	amanha.setDate(amanha.getDate() + 1);

	
	encontrarDataEntrega(amanha);
	
}

function encontrarDataEntrega(dataTestada){
	console.log(dataTestada)
	ano = dataTestada.getFullYear();
	mes = dataTestada.getMonth() +1 < 10 ? "0" +( dataTestada.getMonth() +1) : dataTestada.getMonth() + 1;
	dia = dataTestada.getDate() < 10 ? "0" + dataTestada.getDate() : dataTestada.getDate();
	dateString = `${ano}-${mes}-${dia}` 
	new Promise(function(resolve, reject){
		$.get(wsendpoint + `/api/pedido/date/${dateString}`, (data) => {
			if (data.length < 6){ //verifica se o numero de pedidos para o dia é menor que 6
				resolve(dataTestada)
			}else{
				dataTestada.setDate(dataTestada.getDate() + 1);
				encontrarDataEntrega(dataTestada);
			}
		});
	}).then((dataResolvida)=>{
		ano = dataResolvida.getFullYear();
		mes = dataResolvida.getMonth() +1 < 10 ? "0" + (dataResolvida.getMonth() + 1) : dataResolvida.getMonth() +1;
		dia = dataResolvida.getDate() < 10 ? "0" + dataResolvida.getDate() : dataResolvida.getDate();
		dataFormatada = `${dia}/${mes}/${ano}` 
		dataFormatadaVal = `${ano}-${mes}-${dia}`


		$('#data-entrega-sug').text(dataFormatada);
		$('#entrega').attr('min', dataFormatadaVal).val(dataFormatadaVal);
	})
}