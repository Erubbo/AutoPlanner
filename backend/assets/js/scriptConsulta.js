$(document).ready(function(){
    listUser()
});

const listUser = () =>{
    const result = fetch('backend/listUser.php', {
        method: 'POST',
        body: ''
    })
    // então faça ... verificar a resposta
    .then((response)=>response.json())
    // a resposta foi em formato json, se foi, pega o resultado(result) e vai fazer alguma função com ele, trata o retorno ao frontend
    .then((result)=>{
        // aqui é tratado o retorno ao front

        $('#tabela').dataTable().fnDestroy()

        $('#tabela-dados').html('')

        result.map((user)=>{
            $('#tabela-dados').append(`

                <tr>
                    <td>${user.id}</td>
                    <td>${user.nome}</td>
                    <td>${user.email}</td>
                    <td>${user.data_cadastro}</td>
                    

                    <td> 
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="ativo" ${user.ativo==1 ? 'checked' : ''} onchange="updateUserActive(${user.id})">
                        </div>
   
                    </td>

                    <td>
                        <button type="button" class="btn btn-sm btn-primary" onclick="listUserID(${user.id},'Entrada')" >Entrada</i></button>

                        <button type="button" class="btn btn-sm btn-warning" onclick="listUseroID(${user.id})",'Saida' >Saida</i></button>

                        <button  type="button" class="btn btn-sm btn-danger"><i class="bi bi-trash" onclick="deleteProduto(${user.id})"></i></button>
                    </td>
                    
                </tr>

                

            `)
        })

    })

}