<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body class="bg-success">
<?php 
include './includes/header.php';
include './includes/conecta.php';
?>
<!-- Modal Adcionar Publicação (Blog) -->

<div class="bg-success">
<?php
 if(isset($_POST['publicar'])){
    $fotob = $_POST['fotob'];
    $titulob = $_POST['titulob'];
    $descricaob = $_POST['descricaob'];
    $linkb = $_POST['linkb'];
    $datapubli = $_POST['datap'];
    $autor = $_SESSION['id_user'];
       if($fotob != "" and $titulob != "" and $descricaob != "" and $datapubli != ""){
        
        $sql = "INSERT INTO blog (foto_blog ,titulo_blog, descricao_blog, link_blog, data_public, autor_fk) VALUES ('$fotob', '$titulob', '$descricaob', '$linkb', '$datapubli', $autor)";
        $banco->query($sql);
        if($banco->affected_rows > 0){
          ?>
          <div class="alert alert-success text-center" role="alert">
            Publicação enviada com sucesso! 
          </div>  
      
          <?php
      }else{
        ?>
          <div class="alert alert-danger" role="alert"> 
              Erro ao enviar publicação.
          </div>
       <?php
        }
    } }
     ?> 
    <div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
    <div class="card border-dark mb-3" style="max-width: 55rem;">
<div class="card text-success bg-white ; text-center;" style="max-width: 55rem;">
  <div class="card-header">Nova publicação </div>
  <div class="card-body">
    <h5 class="card-title">Adcionar Publicação</h5>
    <p class="card-text">
 <form id="form-adcpublicacao" action="#" method="post"> 
            <div class="mb-3"> 
            <br>
            <label for="fotob">Inserir url da imagem:</label>
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" name="fotob" aria-describedby="basic-addon3" required>
            <br>
            
            <p></p>
            <label for="titulob" class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulob" placeholder="Digite o título..." required>

            <br> 
           
            <p></p>
            <label for="descricaob">Legenda:</label>
           <textarea class="form-control" placeholder="Digite o texto..." name="descricaob" required></textarea>
            <br> 
           
            <p></p>
            <label for="linkb">Insira o link de redirecionamento:</label>
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" name="linkb" aria-describedby="basic-addon3">
            
            <p></p>
            <br>
            <label for="datap">Data da publicação:</label>
            <input type="date" name="datap" required>
            <br> 
            </div>
            
            <div class="ms-auto w-50">
                <div class="d-flex">
                    <input class="m-2 btn btn-primary w-75" name="publicar" form="form-adcpublicacao" type="submit" value="Publicar">
                    </form>
                    <a class="m-2 btn btn-success w-75" href="meuinventario.php">Voltar </a>
                </div>
                </div>
  </div>
</div>
</div>

<?php include './includes/footer.php'; ?>
            </div>
            </body>
</html>      

 