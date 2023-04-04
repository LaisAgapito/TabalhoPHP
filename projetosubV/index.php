<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './includes/import-css.php' ?>
    <?php include './includes/header.php' ?>
    <?php include './includes/conecta.php' ?>
</head>
<body class="bg-success">
<div class="bg-success text-success">
  <div class="container p-2">
    <p></p>
<div>
        <?php
       

$select = "SELECT * FROM blog";
$resultado = mysqli_query($banco, $select);
 
        if($resultado){
            while($linha = mysqli_fetch_assoc($resultado)){
                $id_result = $linha['id'];
                $fotob_result = $linha['foto_blog'];
                $titulob_result = $linha['titulo_blog'];
                $descricaob_result = $linha['descricao_blog'];
                $linkb_result = $linha['link_blog'];
                $datap_result = $linha['data_public'];
                $curtida = $linha['curtidas'];
                $id_autor = $linha['autor_fk'];
                $nome_autor = "";

                $selectAutor = "SELECT nome FROM usuario WHERE id=$id_autor";
                $resultadoAutor = mysqli_query($banco, $selectAutor);
                if($resultadoAutor){
                    while($linhaAutor = mysqli_fetch_assoc($resultadoAutor)){
                        $nome_autor = $linhaAutor['nome'];
                    }
                  }
                
        ?>

    <div class="card border-success mb-3 text-center" style="max-width: 85rem;">

     <div class="card bg-withe text-bg-withe" style="max-width: 85rem;">
  <div class="row g-0">
    <div class="col-md-4 p-2">
      <img src="<?php echo $fotob_result?>" class="img-fluid rounded-start p-3" alt="Foto de publicação">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $titulob_result?></h5>
        <p class="card-text"> <?php echo $descricaob_result?></p>
        <p class="card-text"><small class="text-muted"><?php echo "Publicado por: $nome_autor - em $datap_result"; ?></small></p>
        <div class="d-grid gap-2 d-md-block">
        <form action="#" method="post">
          <input style="display: none;" type="text" value="<?php echo $id_result ?>" name="idlike">
          <button type="submit" value="curtir" class="btn btn-outline-primary" name="curtir" > <i class="bi bi-heart"></i> Curtir <?php echo "$curtida"?> </button>
          <?php if($linkb_result){ ?>  
          <a class="btn btn-outline-success" href="<?php echo"$linkb_result" ?>">Ver referência</a>
        <?php } ?>
        </form>
        
      </div>
    </div>
  </div>
</div>
        </div>
            </div>
     
    <?php 
    }
}

if(isset($_POST['curtir'])){
$like = $_POST['idlike'];
$contlike = "UPDATE blog SET curtidas = curtidas+1 WHERE id=$like";
$banco->query($contlike); 
} 
?>
    </div>
   
    </div>
    </div>
    <?php include './includes/footer.php'; ?>
</body>
</html>