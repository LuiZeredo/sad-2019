<?php
/*
    $pesoElefante=2000;
    $pesoCoelho=2000;

    if($pesoCoelho>$pesoElefante){
        echo"O coelho é mais pesado";
    }elseif ($pesoElefante>$pesoCoelho){
        echo"O elefante é mais pesado";
    }else{
        echo"Os dois pesam a mesma coisa"
    }



    for($i=0; $i<10; $i++){
        echo $i."<br>";
    }

    $j=0;
    while($j<10){
        echo $j."<br>";
        $j++;
    }

    $nomesUsuarios= array("Luiz", "Flávia", "Jaqueline");

    print_r($nomesUsuarios);


    $dadosUsuarios=array(
        array(
            "Nome" => "Luiz",
            "Idade"=> 19,
            "Altura"=> 175
        ),
        array(
            "Nome" => "Jaqueline",
            "Idade"=> 23,
            "Altura"=> 168
        ),
        array(
            "Nome" => "Flavia",
            "Idade"=> 19,
            "Altura"=> 195
        )
        );
    foreach($dadosUsuarios as $linha){
        $nome=$linha['Nome'];
        $idade=$linha['Idade'];
        $altura=$linha['Altura'];

        echo"Nome: ".$nome. " - Idade: ".$idade." - Altura: ".$altura;
        echo"<br>";
    }
*/

    echo calcular(8);

    function calcular($valor){
        $temp=0;
        while($valor>0){
             $temp=$valor*($valor--)       ;
        }
        return $valor;
    }
?>