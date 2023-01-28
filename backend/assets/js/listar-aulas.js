// inicia a datatable
$(document).ready(function(){
    // executa a funçao de listar aulas
    listaraulas();
    ("");

});

// função que lista as aulas cadastradas
const listaraulas = () => {
    const result = fetch('../listaraulas.php',{
        method: 'POST',
        body:''
    })

    .then((response => response.json()))
        .then((result) => {
            // aqui é tratado o retorno ao front
            // limpa os dados da tabela
            $('#listar-aulas').html('')

            // função que irá montar as linhas da tabela, o map é um tipo de laço
            result.map(prod => {
                $('#listar-aulas').append(`
                <tr>
                    
                    <td>${prod.id}</td>

               
                   
            `)
            })

            
        });

}