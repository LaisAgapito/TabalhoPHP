<?php 
include './includes/conecta.php';
include './includes/import-css.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-success">

<header>   
<div class="card-header text-center" style="max-width: 100%"  >
    <div class="card bg-success text-success">
    <img src="https://i.pinimg.com/564x/2d/a8/da/2da8da18f26ac9fd7d28f2204912daa6.jpg" class="card-img p-1" alt="Plano de fundo plantas" style="height: 8rem; mx-auto">
    
    <div class="card-img-overlay "> 
            <div class="d-flex align-items-center text-start" style="justify-content: space-between;">
            <span class="text-start">((FOTO LOGO))</span>
            
            <div class="text-end">
            <a class="btn btn-outline-success" href="index.php">INVENTÁRIO PRINCIPAL</a>
            
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sobreNosModal">
                Quem Somos
            </button>
            </div>
            </div>
            
            <div class="d-flex" style="justify-content: space-between;">
            <div class="text-start"> 
            <a class="btn btn-success" href="logoff.php">SAIR</a>
            </div>
            <div class="text-center" >
            <h3 class="card-title align-items-center text-center " >MEU INVENTARIO DE HERBALISMO</h3>
            </div>
            <div> <p>(Não deixe de consultar o seu médico)</p></div> 
            </div>
    </div>
    </div>  
    </div>
</div>   
</header> 
<?php
include './includes/conecta.php';
 if (isset($_POST['delete'])){     
    $idDELLpubli = $_POST['iddell'];

    $sql = "DELETE FROM `blog` WHERE id='$idDELLpubli'"; 
    $banco->query($sql);
    if($banco->affected_rows > 0){
        ?>
          <div class="alert alert-success text-center" role="alert">
            Publicação excluida com sucesso! 
          </div>    
          
          <?php
      }else{
        ?>
          <div class="alert alert-danger" role="alert"> 
              Erro ao excluir publicação.
          </div>
       <?php
        }
    } 
    
 if(isset($_POST['editar'])){
    $fotob = $_POST['fotob'];
    $titulob = $_POST['titulob'];
    $descricaob = $_POST['descricaob'];
    $linkb = $_POST['linkb'];
    $datapubli = $_POST['datap'];
    $idedit = $_POST['idedit'];
       if($fotob != "" and $titulob != "" and $descricaob != "" and $datapubli != ""){
        
        $sql = "UPDATE blog SET foto_blog = '$fotob', titulo_blog = '$titulob', descricao_blog = '$descricaob', link_blog = '$linkb', data_public = '$datapubli' WHERE id = $idedit";
        $banco->query($sql);
        if($banco->affected_rows > 0){
          ?>
          <div class="alert alert-success text-center" role="alert">
            Publicação editada com sucesso! 
          </div>  
      
          <?php
      }else{
        ?>
          <div class="alert alert-danger" role="alert"> 
              Erro ao editar publicação.
          </div>
       <?php
        }
    } }
     ?> 

<div class="bg-success text-success">
<div class="container p-2">   

    <?php 
       
    session_start();
    $idlogin = $_SESSION['id_user'];

    ?>
    <div class="text-center align-items-center p-2">
        <a class="btn btn-light text-success m-1" href="novapublicacao.php">
            Adicionar Publicação
        </a>
        <button type="button" class="btn btn-light text-success" name="perfil" data-bs-toggle="modal" data-bs-target="#verperfil">
        <i class="bi bi-person-circle text-success"></i>
          Ver Perfil
        </button>
        </div>
    <?php 
    $select = "SELECT * FROM blog WHERE autor_fk = $idlogin";
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
   <p class="card-text"><small class="text-muted"><?php echo "$datap_result"; ?></small></p>
    <i class="bi bi-heart"></i> Curtidas <?php echo "$curtida"?>
   
   <?php if($linkb_result){ ?>  
    Referência: <?php echo"$linkb_result" ?>
   <?php } ?>
   <p></p>
   
   <!-- Button modal excluir -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#excluirpubli<?php echo $id_result ?>">
<i class="bi bi-trash3-fill"></i>
  Excluir
</button>
   <!-- Button modal EDITAR public -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarpubli<?php echo $id_result ?>">
<i class="bi bi-pencil-fill"></i>
  Edidar
</button>
</div>
    </div>
  </div>
</div>
   </div>

 <!-- Modal para excluir publicação -->
 <div class="modal fade" id="excluirpubli<?php echo $id_result ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content  text-bg-success">
                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id=""> DESEJA EXCLUIR ESSA PUBLICAÇÃO? <br> (Após a confirmação a publicação será excluida permanentemente)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="modal-body">
                                                <h6 class="h5 m-5"> Confirme para EXCLUIR esta publicação</h6>
                                                <!-- MANDAR O ID  -->
                                                <input style="display: none;" type="text"  value="<?php echo $id_result ?>" name="iddell">
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-danger" name="delete" value="Excluir"></input>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>    

 <!-- Modal para EDITAR publicação -->
 <div class="modal fade" id="editarpubli<?php echo $id_result ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content  text-bg-success">
                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id=""> EDITAR PUBLICAÇÃO </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="modal-body">
                                            <div class="mb-3"> 
            <br>
            <label for="fotob">URL da imagem:</label>
           
            <input type="text" class="form-control" name="fotob" value="<?php echo $fotob_result ?>" aria-describedby="basic-addon3" required>
            <br>
            
            <p></p>
            <label for="titulob" class="form-label">Título:</label>
            <input type="text" class="form-control" name="titulob" value="<?php echo $titulob_result ?>" required>

            <br> 
           
            <p></p>
            <label for="descricaob">Legenda:</label>
            <input type="text" class="form-control" value="<?php echo $descricaob_result ?>" name="descricaob" required>
            <br> 
           
            <p></p>
            <label for="linkb">Insira o link de redirecionamento:</label>
            <input type="text" class="form-control" name="linkb" value="<?php echo $linkb_result ?>" aria-describedby="basic-addon3">
            
            <p></p>
            <br>
            <label for="datap">Data da publicação:</label>
            <input type="date" name="datap" value="<?php echo $datap_result ?>" required>
            <br> 
            </div>
                                                <!-- MANDAR O ID  -->
                                                <input style="display: none;" type="text"  value="<?php echo $id_result ?>" name="idedit">
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" name="editar" value="Salvar"></input>
                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>    

       <?php }} ?>
       
</div> <!-- container -->
</div> <!-- bg -->
<div class="modal fade" id="verperfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content  text-success bg-light">
                            <div class="modal-header ">
                                            <h1 class="modal-title fs-5" id="">DADOS DO PERFIL</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body text-center">
                                            <?php
                                            $selectperfil = "SELECT * FROM usuario WHERE id = $idlogin";
                                            $resultperfil = mysqli_query($banco, $selectperfil);

                                             if($resultperfil){ 
                                                while($linhaperfil = mysqli_fetch_assoc($resultperfil)){
                                                $nomelogin = $linhaperfil['nome'];
                                                $sobrenomelogin = $linhaperfil['sobrenome'];
                                                $emaillogin = $linhaperfil['email'];
                                                $tellogin = $linhaperfil['telefone'];
                                            }
                                            }
                                            ?>
                                            <h1><i class="bi bi-person-circle text-success"></i></h1>
                                                <h6 class="h5 m-5"> NOME:       <?php echo $nomelogin ?> 
                                                                <br> SOBRENOME: <?php echo $sobrenomelogin ?>
                                                                <br> E-MAIL:    <?php echo $emaillogin ?>
                                                                <br> TELEFONE:  <?php echo $tellogin ?>

                                                </h6>
                                            </div>
                                            <div class="modal-footer">
                                                <a class="btn btn-success" href="altersenha.php" name="altersenha"> Aterar senha </a>
                                                <a class="btn btn-success" href="editarperfil.php" name="editperfil"> Editar Perfil </a>
                                                <button type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>    
    <?php 
    
    include './includes/footer.php'; ?>
</body>
</html>