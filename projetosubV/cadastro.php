<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <?php include './includes/import-css.php' ?>
    <?php include './includes/header.php' ?>
</head>
<body class="bg-success">
  <div class="bg-success">
    <div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
    <div class="card border-dark mb-3" style="max-width: 55rem;">
<div class="card text-success bg-white ; text-center;" style="max-width: 55rem;">
  <div class="card-header">Dados do cadastro </div>
  <div class="card-body">
    <h5 class="card-title">Cadastro de usuário</h5>
    <p class="card-text">
    <form id="form-cadastrouser" action="cadastrar.php" method="post"> 
            <div class="mb-3 align-items-center p-1 text-center;"> 
            <br>
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" aria-describedby="basic-addon3" placeholder="Digite o seu primeiro nome..." required>
            <br>
            
            <p></p>
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" placeholder="Digite o seu sobrenome..." required>

            <br> 
           
            <p></p>
            <label for="descricaob">Telefone:</label>
            <input type="tel" class="form-control" name="telefone" placeholder="00 99999 9999" required>
            <br> 
           
            <p></p>
            <label for="linkb">E-mail:</label>
            <span class="input-group-text" id="basic-addon3">email@email.com</span>
            <input type="text" class="form-control" name="email" aria-describedby="basic-addon3">
            
            <p></p>
            <label for="sobrenome" class="form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" placeholder="Essa será a sua senha para acesso ao seu perfil..." required>
            
            <p></p>
            <br>
            <label for="datap">Data de nascimento:</label>
            <input type="date" name="datanasc" required>
            <br> </div>
             <div class="text-center" style="justify-content: space-between;">
            <input class="m-2 btn btn-success w-50 text-center" name="cadastrouser" form="form-cadastrouser" type="submit" value="Cadastrar">
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