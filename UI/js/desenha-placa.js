$('#cadastro-placa').on('input', e=>{
	frase = $('#frase').val()
	idCorTexto = $("#cor-frase").val()
	idCorPlaca = $("#cor").val()

	previa = $('#previa')

	previa.text(frase)

	previa.removeClass()
	previa.addClass('mt-5')
	if(idCorTexto != ""){
		previa.addClass(classesCorFrase[idCorTexto])
	}

	if(idCorPlaca != ""){
		previa.addClass(classesCorPlaca[idCorPlaca])
	}


})