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
<body class="bg-success">
  <div class="bg-success">
    
    <?php
    $iduser = $_SESSION['id_user'];
    $senha = $_SESSION['senhaLogin'];

    if(isset($_POST['editsenha'])){
        $senhaAT = $_POST['senha'];
        $senhaNOVA = $_POST['novasenha'];
        $senhaCONFIRMA = $_POST['confirmasenha'];
        if($senhaAT == $senha and $senhaNOVA == $senhaCONFIRMA){
        $edtsenha = "UPDATE usuario SET senha = '$senhaNOVA' WHERE id = $iduser";
        $banco->query($edtsenha);
        if($banco->affected_rows > 0){
            ?>
            <div class="alert alert-success text-center" role="alert">
              Senha editada com sucesso  <a class="btn btn-outline-success" href="meuinventario.php"> Voltar </a>
            </div>  
        
            <?php
        }else{
          ?>
            <div class="alert alert-danger" role="alert"> 
                Erro ao editar senha. <?php echo $iduser ?>
            </div>
         <?php
    }}else{
        ?>
        <div class="alert alert-danger" role="alert"> 
            Erro ao editar senha. As senhas digitadas não conferem.
        </div>
     <?php
    }
}
    ?>

    <div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
    <div class="card border-dark mb-3" style="max-width: 55rem;">
<div class="card text-success bg-white ; text-center;" style="max-width: 55rem;">
  <div class="card-header">Alterar senha</div>
  <div class="card-body">
    <h5 class="card-title">Cadatrar nova senha</h5>
    <p class="card-text">
    <form id="form-editsenha" action="#" method="post"> 

            <div class="mb-3 align-items-center p-1 text-center;"> 

            <p></p>
            <label for="sobrenome" class="form-label">Senha atual:</label>
            <input type="password" class="form-control" name="senha" placeholder="Digite sua senha atual..." required>

            <p></p>
            <label for="sobrenome" class="form-label">Nova senha:</label>
            <input type="password" class="form-control" name="novasenha" placeholder="Essa será a sua nova de acesso ao seu perfil..." required>

            <p></p>
            <label for="sobrenome" class="form-label">Confirme a senha:</label>
            <input type="password" class="form-control" name="confirmasenha" placeholder="Confirme a nova senha..." required>

            <br> </div>
             <div class="text-center" style="justify-content: space-between;">
            <input class="m-2 btn btn-success w-50 text-center" name="editsenha" form="form-editsenha" type="submit" value="Alterar">
            </div>
        </form>
    </p>
  </div>
  </div>
</div>
</div>
<?php include './includes/footer.php'; ?>
</body>
</html>