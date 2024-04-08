<?php
require_once __DIR__.'/../area-admin/processLoginAdm.php';
 
?>
<header class="p-3 border-bottom bg-dark text-white shadow" style="height: 10vh">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="../index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="./../../img/site/logoBranco.png" width="60" height="60" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ms-3 fw-bold">
        FutShow
      </div>

      <div class="dropdown text-end">
        <a href="#" class="text-white d-block link-body-emphasis text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          
          <img src="./../../img/admin/<?php echo $_SESSION['foto']!=""?$_SESSION['foto'] : 'padrao.png';?>" alt="mdo" width="60" height="60" class="border border-2  border-dark rounded-circle">
        </a>
        <ul class="dropdown-menu text-small">
          <li ><strong class="text-center"><?php echo $_SESSION['nome']?> <?php echo $_SESSION['sobrenome']?></strong> </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="./../logoutAdm.php">
                      <div class="d-flex flex-row justify-content-between align-items-center w-50"><i class="fas fa-sign-out-alt"></i><strong class="text-center"> Sair</strong></div>
                    </a></li>
        </ul>
      </div>
    </div>
  </div>
</header>