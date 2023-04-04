
    <?php include './includes/import-css.php'
     ?>
    

    <div class="card-header text-center" style="max-width: 100%"  >
    <div class="card bg-success text-success">
    <img src="https://i.pinimg.com/564x/2d/a8/da/2da8da18f26ac9fd7d28f2204912daa6.jpg" class="card-img p-1" alt="Plano de fundo plantas" style="height: 8rem; mx-auto">
    
    <div class="card-img-overlay "> 
            <div class="d-flex align-items-center text-start" style="justify-content: space-between;">
            <span class="text-start">((FOTO LOGO))</span>

            <h3 class="card-title text-center " >INVENTARIO DE HERBALISMO</h3>
            <div class="text-end">
        <?php session_start();
    $login = $_SESSION['autor'];
    $nomeuser = $_SESSION['nome_user'];
         if(isset($nomeuser)){ ?>
              
            <a class="btn btn-outline-success" href="meuinventario.php"> MEU INVENTÁRIO </a>
       
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sobreNosModal">
                Quem Somos
            </button>
            </div>
            </div>
            <div class="d-flex" style="justify-content: space-between;">
            <div class="text-start"> 
            <a class="btn btn-success" href="logoff.php" name="logoof">SAIR</a>
            </div>
            <?php }else{ ?>
            <a class="btn btn-outline-success" href="login.php">FAZER LOGIN</a>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#sobreNosModal">
                Quem Somos
            </button>
        <?php } ?>
            
            <div class="text-center" >
            <h5><p class="card-title card-text ">Aqui você poderá navegar pelo mundo do herbalismo</p></h5>  
            </div>
            <div> <p>(Não deixe de consultar o seu médico)</p></div>
               
            
            </div>
    </div>
    </div>
    </div>


</div>
   