// arquivo add dia 25/01/2023

const updateProfessor = () =>{
    // Valida se o nome foi preenchido - usando JQUERY

    // Valida se o nome foi preenchido usando JS Vanilla

    // captura todo o formulario e cria um formData
    let form = new FormData($('#form-usuarios-editar')[0])

    //COLOCAR NO BLOCO DE NOTAS, SEMPRE VAI USAR - envio e recebimento de dados - sempre padrão const result até o then result, sempre vai ser igual.
    const result = fetch('../update_professor.php',{
        method: 'POST',
        body: form
    })
    // então faça ... verificar a resposta
    .then((response)=>response.json())
    // a resposta foi em formato json, se foi, pega o resultado(result) e vai fazer alguma função com ele, trata o retorno ao frontend
    .then((result)=>{
        // alert(result.Mensagem), aqui é tratado o retorno ao front
        
            Swal.fire({
            title: 'Atenção!',
            text: result.mensagem,
            icon: result.retorno == 'ok' ? 'success' : 'error'
          })

        //   limpa os campos caso o retorno tenha sucesso
        // utilização do if ternario, para redução de escrita de código
        result.retorno == 'ok' ? $('#form-usuarios-editar')[0].reset() : ''

        // recarregar a tabela apos inserir o usuario
        result.retorno == 'ok' ? listar() : ''

    })

};