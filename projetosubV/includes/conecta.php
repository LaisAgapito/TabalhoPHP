<?php
$banco = new mysqli("localhost","root","","projetosub",3306);
if($banco->connect_errno){
    echo "Erro ao conectar no banco de dados";
}
//else{
 //   echo "Conectado no banco de dados";
//}
?>