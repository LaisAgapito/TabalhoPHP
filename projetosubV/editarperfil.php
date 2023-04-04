<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include './includes/import-css.php';
          include './includes/header.php';
          include './includes/conecta.php'; ?>
</head>
<body class="bg-success" >
  <div class="bg-success">
    <?php
    
    $iduser = $_SESSION['id_user'];
    $nome = $_SESSION['nome_user'];
    $sobrenome = $_SESSION['sobrenome_user'];
    $telefone = $_SESSION['tel_user'];
    $email = $_SESSION['autor'];

    if(isset($_POST['salvar'])){
        $nomeEDIT = $_POST['nome'];
        $sobrenomeEDIT = $_POST['sobrenome']; 
        $emailEDIT = $_POST['email'];
        $telefoneEDIT = $_POST['telefone'];

        $editar = "UPDATE usuario SET nome = '$nomeEDIT', sobrenome = '$sobrenomeEDIT', email = '$emailEDIT', telefone = '$telefoneEDIT' WHERE id = $iduser ";
        $banco->query($editar);
        if($banco->affected_rows > 0){
          ?>
          <div class="alert alert-success text-center" role="alert">
            Perfil editado com sucesso  <a class="btn btn-outline-success" href="meuinventario.php"> Voltar </a>
          </div>  
      
          <?php
      }else{
        ?>
          <div class="alert alert-danger" role="alert"> 
              Erro ao editar perfil.
          </div>
       <?php
        }
    } 
    

    ?>
    <div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
    <div class="card border-dark mb-3" style="max-width: 55rem;">
<div class="card text-success bg-white ; text-center;" style="max-width: 55rem;">
  <div class="card-header">Dados do cadastro </div>
  <div class="card-body">
    <h5 class="card-title">Editar dados do perfil</h5>
    <p class="card-text">
    <form id="form-editperfil" action="#" method="post"> 
            <div class="mb-3 align-items-center p-1 text-center;"> 
            <br>
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" aria-describedby="basic-addon3" value="<?php echo $nome ?>">
            <br>
            
            <p></p>
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" value="<?php echo $sobrenome ?>"  >

            <br> 
           
            <p></p>
            <label for="descricaob">Telefone:</label>
            <input type="tel" class="form-control" name="telefone" value="<?php echo $telefone ?>">
            <br> 
           
            <p></p>
            <label for="linkb">E-mail:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $email ?>" aria-describedby="basic-addon3">

            <p></p>
            <br> </div>
             <div class="text-center" style="justify-content: space-between;">
            <input class="m-2 btn btn-success w-50 text-center" name="salvar" form="form-editperfil" type="submit" value="Salvar">
            </div>
        </form>
    </p>
  </div>
  </div>
</div>
</div>
<?php include './includes/footer.php'; ?>