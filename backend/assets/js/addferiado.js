
const addferiado = () => {
    // captura todo o formulario e fria uma FormData
  
    let form = new FormData($("#form-feriado")[0]);
  
    const result = fetch("../includes/addferiado.php", {
      method: "POST",
      body: form,
    })
      .then((response) => response.json())
  
      .then((result) => {
        Swal.fire({
          title: "Atenção!",
          text: result.mensagem,
          icon: result.retorno == "ok" ? "success" : "error",
        });
  
        // limpa os campos caso o retorno tenha sucesso
        // usa o if ternario para redução de escrita
  
        result.retorno == "ok" ? $("#form-feriado")[0].reset() : "";
      });
  };
  