<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="bg-success">>

<?php 
 session_start();
$_SESSION['autor'] = $_POST['emailLG'];
$_SESSION['senhaLogin'] = $_POST['senhaLG'];

$email = $_SESSION['autor'];
include './includes/conecta.php';
include './includes/import-css.php';



$selectL = "SELECT * FROM usuario WHERE email = '$email'";
$resultado = mysqli_query($banco, $selectL);
if($resultado){
    while($linha = mysqli_fetch_assoc($resultado)){
       $id_result = $linha['id'];
       $nome_result = $linha['nome'];
       $sobrenome_result = $linha['sobrenome'];
       $email_result = $linha['email'];
       $tel_result = $linha['telefone'];
       $senha_result = $linha['senha'];
       $dtnasc_result = $linha['datanasc'];
    }}
    if($_SESSION['autor'] == $email_result and $_SESSION['senhaLogin'] == $senha_result){
     $_SESSION['id_user'] = $id_result;
     $_SESSION['nome_user'] = $nome_result;
     $_SESSION['sobrenome_user'] = $sobrenome_result;
     $_SESSION['tel_user'] = $tel_result;
     $_SESSION['dtnasc_user'] = $dtnasc_result;

     
      header('Location:index.php');
    }else{ ?><div class="alert alert-danger" role="alert"> 
      ERRO AO FAZER LOGIN. E-mail e/ou senha incorretos.
  </div> <a class="btn btn-success" href="login.php">TENTAR NOVAMENTE</a>
    <?php }
     

?>
</body>
</html>