const listar =()=>{
    const result = fetch('backend/listar', {
        method: 'POST',
        body: ''
    })
        .then((Response) => Response.json())
        .then((result) => {

            result.map(alunos =>{
                $('#alunos').append(
                    `
                    <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>
                        <button type="button" onclick="nota()">nota</button>
                        <button type="button" onclick="atestado()">atestado</button>
                        <button type="button" onclick="contrato()">contrato</button>
                    </td>
                 
                </tr>`
                )
            })
})
}