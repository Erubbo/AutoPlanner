// cadastro professores

const addprof = () =>{
    let dados = new FormData($('#form-prof')[0]);
    const result = fetch('../backend/addprof.php', {
        method: 'POST',
        body: dados
    })

    .then((response)=>response.json())
    .then((result)=>{
        
            Swal.fire({
                title:'Atençao',
                text:result.mensagem,
                icon:result.retorno == 'ok' ? 'success' : 'error'
            })
            
            result.retorno == 'ok' ? $('#form-prof')[0].reset() : ''             
            
        })
}