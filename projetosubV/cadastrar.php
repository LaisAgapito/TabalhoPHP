<?php 
include './includes/conecta.php';
include './includes/import-css.php';

if(isset($_POST['cadastrouser'])){
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome']; 
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];
$datenasc = $_POST['datanasc'];

if(str_ends_with($email, ".com") or str_ends_with($email, ".com.br")){
  if(str_contains($email, "@")){
$save = "INSERT INTO usuario(nome, sobrenome, email, telefone, senha, datanasc) VALUES ('$nome', '$sobrenome', '$email', ' $telefone', '$senha', '$datenasc')";
$banco->query($save);
if($banco->affected_rows > 0){
  
    ?>
    <div class="alert alert-success text-center" role="alert">
      Cadastro realizado com sucesso! 
    </div>    
    <P></P> 
    <div class="text-center">
      <a class="btn btn-outline-success" href="login.php">FAZER LOGIN</a>
    </div>

    <?php

}else{ ?>
    <div class="alert alert-danger" role="alert"> 
        Erro ao enviar cadastro.
    </div>
 <?php
}
 }
 }else{
  ?>
    <div class="alert alert-danger" role="alert"> 
        Erro ao enviar cadastro. E-mail invalido.
    </div>
 <?php
}
}


include './includes/footer.php'; 
?>

