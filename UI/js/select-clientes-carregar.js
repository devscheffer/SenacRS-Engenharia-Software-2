$(document).ready(()=>{
	$.get(wsendpoint + "/api/cliente", data=>{
		selectCliente = $('#selectCliente')
		$(data).each((i, cliente) => {
			option = $("<option>")
				.attr("value", cliente.idcliente)
				.text(`${cliente.idcliente} - ${cliente.nome}`)

			selectCliente.append(option )
		})
	});
})