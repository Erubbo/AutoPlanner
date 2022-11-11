// cadastra 

const addaluno = () => {
    let dados = new FormData($('#form-aluno')[0]);

    const result = fetch('../backend/addaluno.php', {
        method: 'POST',
        body: dados
    })
        .then((response) => response.json())
        .then((result) => {
            // Aqui é tratado o retorno ao front

            Swal.fire({
                title: 'Atenção',
                text: result.mensagem,
                icon: result.retorno == 'ok' ? 'success' : 'error'
            })
            result.retorno == 'ok' ? $('#form-aluno')[0].reset() : ''
        })
};