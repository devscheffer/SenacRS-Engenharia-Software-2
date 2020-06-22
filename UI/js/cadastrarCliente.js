$('#form-cadastro-cliente').submit((e) => {
    e.preventDefault();
    form = e.target;

    nome = form.nome.value;
    telefone = form.telefone.value;
    
    usuarioData = {
        "nome": nome,
        "telefone": telefone
    }    

    $.post(wsendpoint + "/api/cliente", usuarioData, data => {
        form.submit();
    })

    .fail((xhr, status, error) =>{
        console.log(xhr)
        console.log(status)
        console.log(error)
    });
    
})