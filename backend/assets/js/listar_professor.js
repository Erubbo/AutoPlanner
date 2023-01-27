// inicia a datatable 
$(document).ready(function () {

    // executa a função delistar alunos 
    listarprofessor();
    $("")
});

// função que lista os professores cadastrados
const listarprofessor = () => {

    const result = fetch('../listarprofessor.php', {
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
            // $("#tabela").dataTable().fnDestroy()

            // limpa os dados da tabela
            $('#listar-professor').html('')

            // função que irá montar as linhas da tabela, o map é um tipo de laço
            result.map(prod => {
                $('#listar-professor').append(`
                <tr>
                    
                    <td>${prod.id}</td>
                    <td>${prod.nome}</td>
                    <td>${prod.email}</td>
                    <td>${prod.telefone}</td>
                    <td>${prod.data_cadastro}</td>
                    
                    <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" ${prod.ativo==1?'checked':''} onchange="updateProfessorAtivo(${prod.id})"> 
                        </div>
                    </td>

                    
                    <td>
                        <button class="btn btn-primary" type="button" onclick="listaProfessorID(${prod.id}, 'Entrada')">Editar</button>
                    </td>
                  
            `)
            })

            // mudar o onclick="listaProfessorID dia 24/01/23
            // ---------------------------------------

            //  css dinamico para botão 

            // $('#tabela').DataTable({
            //     "language": {

            //         url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
            //     }
            // });
        });

}

const updateProfessorAtivo = (id) => {

    const result = fetch(`../update_ativo_professor.php`, {
      method: "POST",
      body: `id=${id}`,
      headers: {
        'Content-type': 'application/x-www-form-urlencoded'
      }
    })
    .then((response) => response.json()) // retorna uma promise
    .then((result) => {
        Swal.fire({
          icon: result.retorno == 'ok' ? 'success' : 'error',
          title: result.mensagem,
          showConfirmButton: false,
          timer: 2000
        })  
        
           
    });
  
  
  }




// inclusão de informações edita 25/01/23 - Renata
  const listaProfessorID = (id) =>{
    // lista os dados do usuário por ID, para alteração de dados
    // aqui teria que ser implementado toda a requisicao para o backend PHP
    // o modal terá que ser exibido dentro do result
    // .then((result) => {o codigo abaixo ficara aqui}
    const result = fetch(`../listaprofessorid.php`, {
      method: "POST",
      body: `id=${id}`,
      headers: {
        'Content-type': 'application/x-www-form-urlencoded'
      }
    })
    .then((response) => response.json()) // retorna uma promise
    .then((result) => {
  
      // preenche os dados dentro do form de editar usuarios
      $('#edita_id_professor').val(result[0].id_professor)
      $('#edita_id_endereco').val(result[0].id)
      $('#edita-nome').val(result[0].nome)
      $('#edita-email').val(result[0].email)
      $('#edita-telefone').val(result[0].telefone)
      $('#edita-telefone2').val(result[0].telefone2)
      $('#edita-cpf').val(result[0].cpf)
      $('#edita-rg').val(result[0].rg)
      $('#edita-orgao_emissor').val(result[0].orgao_emissor)
      $('#edita-uf').val(result[0].uf)
      $('#edita-senha').val(result[0].senha)
      $('#edita-confirmar').val(result[0].confirmar)
      $('#edita-data_nascimento').val(result[0].data_nascimento)
      $('#edita-genero').val(result[0].genero)
      $('#edita-cep').val(result[0].cep)
      $('#edita-logradouro').val(result[0].logradouro)
      $('#edita-numero').val(result[0].numero)
      $('#edita-complemento').val(result[0].complemento)
      $('#edita-bairro').val(result[0].bairro)
      $('#edita-municipio').val(result[0].municipio)
      $('#edita-estado').val(result[0].estado)
      
  
      $('#edita-telefone').inputmask('(99) 99999-9999')
      $('#edita-telefone2').inputmask('(99) 99999-9999')
      $('#edita-cpf').inputmask('999.999.999-99')
      $('#edita-rg').inputmask('99.999.999-99')
  
      // exibe o modal apos preencher os dados para edicao
      const modalEditar = new bootstrap.Modal('#modal-editar-usuario')
      modalEditar.show()      
  
    }); 
  
  }