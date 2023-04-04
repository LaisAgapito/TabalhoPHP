<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './includes/import-css.php'; ?>
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
            
            
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sobreNosModal">
                Quem Somos
            </button>
            </div>
            </div>
            
            <div class="d-flex" style="justify-content: space-between;">
            <div class="text-start"> 
            
            </div>
            <div class="text-center" >
            <h3 class="card-title align-items-center text-center " >INVENTARIO DE HERBALISMO</h3>
            </div>
            <div> <p>(Não deixe de consultar o seu médico)</p></div>
               
            
            </div>
    </div>
    </div>
    </div>


</div>
   
</header> 
<div class="bg-success text-success p-3">
<div class="container align-items-center p-1 text-center; " style="max-width: 50rem;" >
<div class="card border-success mb-3 text-center" style="max-width: 50rem;">
<div class="card bg-withe text-bg-withe text-center" style="max-width: 50rem;">
    <form action="logar.php" method="post">
        <div class="card-header"><h5>Certeza que deseja sair da conta?</h5></div>
        <div class="card-body">
        <input class="btn btn-success w-50" type="submit" value="Sair da conta" name="sair">
    </form>
</div>
</div>
</div>
</div>

</body>
</html>
<?php 

//session_destroy();
//header('Location:index.php');
 include './includes/footer.php';
?>