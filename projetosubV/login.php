<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './includes/import-css.php' ?>
    <?php include './includes/header.php' ?>
    <title>Document</title>
</head>
<body> 
<div class="bg-success text-success p-3">
<div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >

<div class="card border-success mb-3 text-center" style="max-width: 50rem;">
<div class="card bg-withe text-bg-withe" style="max-width: 50rem;">
  <div class="card-header">Acessar conta</div>
  <div class="card-body">
    <h3 class="card-title">LOGIN</h3>
    <p class="card-text">    
    <p></p>
             
            <form id="form-login" action="logar.php" method="post">   
            <div class="mb-3 align-items-center p-1 text-center;"> 
            <label for="linkb">E-mail:</label>
            <input type="text" class="form-control" name="emailLG" aria-describedby="basic-addon3" placeholder="Digite o seu e-mail">
            <p></p>
            <label for="senhaLG" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senhaLG" placeholder="Digite a sua senha" required>
            <p></p>
            <div class="text-center" style="justify-content: space-between;">
            <input class="m-2 btn btn-success w-50 text-center" name="login" form="form-login" type="submit" value="Entrar">
            </div>
            </div>
            </form>
      </p>
</div>
</div>
</div>
</div>
<div class="bg-success text-success p-3">
<div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
<div class="card border-success mb-3 text-center" style="max-width: 50rem;">
<div class="card bg-withe text-bg-withe text-center" style="max-width: 50rem;">
  <div class="card-header"><h5>Anda não possui cadastro?</h5></div>
  <div class="card-body">
  <a class="btn btn-success w-50" href="cadastro.php">Fazer cadastro</a>
</div>
</div>
</div>
</div>
</div>
</div>

</div>    
</div>
<?php include './includes/footer.php'; ?>
</body>
</html>