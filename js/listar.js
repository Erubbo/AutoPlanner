// função que lista os produtos cadastrados
const listar = () => {

    const result = fetch('backend/listaraluno.php', {
        method: 'POST',
        body: '',
        //     headers: {
        //   'Content-type': 'application/x-www-form-urlencoded'
        // }
    })
        .then((response => response.json()))
        .then((result) => {
            // aqui é tratado o retorno ao front

            // let datahora = moment().format('DD/MM/YY HH:mm')

            // $('#horario-atualizado').html(datahora)

            // destroi a tabela que foi iniciada
            $("#tabela").dataTable().fnDestroy()

            // limpa os dados da tabela
            $('#listar-aluno').html('')

            // função que irá montar as linhas da tabela, o map é um tipo de laço
            result.map(prod => {
                $('#listar-aluno').append(`
                <tr>
                    
                    <td>${prod.id}</td>
                    <td>${prod.nome}</td>
                    <td>${prod.email}</td>
                    <td>${prod.telefone}</td>
                    <td>${prod.data_Cadastro}</td>
                    <td>${prod.ativo}</td> 
                    <td>${prod.alterar}</td>            
                  
                    <td>
                    <button type="button" class="btn btn-sm- btn-${usuario.ativo == 1 ? 'success':'danger'}">${usuario.ativo == 1 ? 'sim':'não'}</button>
                    </td>
                  
            `)
            })

            //  css dinamico para botão 
                   
            $('#tabela').DataTable({
                "language": {

                    url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
                }
            });
        });

}