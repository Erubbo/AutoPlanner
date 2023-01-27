<?php

$dia_hoje_semana = date('w');
     
   
     $semana = array(
        '1' => 'monday',
        '2' => 'tuesday ',
        '3' => 'wednesday ',
        '4' => 'thursday ',
        '5' => 'friday ',
        '6' => 'saturday '
    );
    // variavel para escrever o dia por extenso
    $oi = $semana[$dia_hoje_semana];

    
    
     $dia_hoje_mes = new DateTime();
        

  x
     $proximo_dia_agendamento = $dia_hoje_mes->modify('next '.$oi);
     
     echo $proximo_dia_agendamento->format('Y-m-d');
     
    
?>