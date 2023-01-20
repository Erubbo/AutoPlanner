const cadastrar =()=>{
    let dados = new FormData($('#cadastro')[0])

    const result = fetch('horas.php',{
        method: 'POST',
        body: dados
    })



    
}