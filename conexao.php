<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="aulao";

if($conexao = mysqli_connect($servidor,$usuario,$senha,$banco)){
    //echo"Deu certo mano";
}
else{
    //echo"Não deu certo";
}
?>