<?php

$categorias = ['infantil', 'adolescentes', 'adulto', 'idoso'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if(empty($nome)){


    echo"O nome não pode ser vazio. <br>";
    return;


}

if(strlen($nome) < 3){

    echo"O nome deve conter mais de 3 caracteres. <br>";
    return;

}

if(strlen($nome) > 40){

    echo"O nome é muito extenso. <br>";
    return;

}

if(!is_numeric($idade)){

    echo"Informe um número para idade.";
    return;

}

if($idade >= 6 && $idade <= 12){

    echo"O nadador ".$nome." compete na categoria ".$categorias[0];


} else if($idade >= 13 && $idade <= 17){

    echo"O nadador ".$nome." compete na categoria ".$categorias[1];

    
} else if($idade >= 18 && $idade <= 49){

    echo"O nadador ".$nome." compete na categoria ".$categorias[2];

    
}else if($idade >= 50){


    echo"O nadador ".$nome." compete na categoria ".$categorias[3];



    
}




?>