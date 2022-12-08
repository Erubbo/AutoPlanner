<?php

try {

    //Declaramos a variável que vai receber o conteúdo da lista
    $horarios = null;
    
    //Verificamos se o índice existe
    if (isset($_POST['sabado']))
    
        //Atribuimos a variável todo conteúdo do índice
        $horarios = $_POST['sabado'];
    
    //Verificamos se a variável não é nula
    if ($horarios !== null)
    
        //Percorremos todos os conteúdos do array
        for ($i = 0; $i < count($horarios); $i++)
        
            //exibimos o valor atual na tela
            echo "<p>{$horarios[$i]}</p>";
    
    
    /**
     * Recebe um parâmetro e exibe o seu conteúdo
     *
     * @param  mixed $param
     * @return void
     */
    function dd($param)
    {
        echo '<pre>';
        print_r($param);
        echo '</pre>';
        die();
    }

} catch (PDOException $error) {
    $return = array('retorno'=>'erro','message'=>$error->getMessage());


    $json = json_encode($return, JSON_UNESCAPED_UNICODE);

    echo $json;
}