<?php

require_once __DIR__.'/../../dao/UserDao.php';

$users = UserDao::selectById($_SESSION['idUsuario'] ?? null);


?>


<style>
    .modalAvaliacao {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        outline: none;
        border: none;
        border-radius: 10px;
        height: 35vh;
    }

    .modalAvaliacao::backdrop {
        backdrop-filter: blur(3px);
        /* background-color: white;
        opacity: 50%; */
    }

    input[type="radio"] {
    display: none;
  }

  /* Estilo para o ícone de estrela quando o radio button está marcado */
  input[type="radio"]:checked + i {
    color: #4400c2; /* Cor da estrela quando marcada */
  }

    @media (max-width: 1000px){
        .modalAvaliacao {
            width: 80vw !important;
            height: 50vh !important;
            background-color: while !important;
        }
    }
    .btn-close{
        border: none !important;
        box-shadow: none;
    }
    .btn-close:focus{
        box-shadow: none;
    }

    textarea{
        border: 1px solid #000 !important;
        border-radius: 10px !important;
        resize: none;
    }
    textarea:focus{
        
        box-shadow: none !important;
    }
</style>


<div class="gap-3 my-5">
    <?php if(isset($_SESSION['idUsuario'])) {?>
  <button id="btAvaliacao" class="btn btn-outline-dark">Avalie</button>
  <?php }?>
</div>
<dialog class="modalAvaliacao w-25">
<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $data_atual = new DateTime();

?>
        <form action="../area-cliente/avaliacao/processoAvaliacao.php" method="post" class="flex-column d-flex gap-3">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-end">
            <button id="btCloseAvaliacao" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="w-100 gap-2" style="height: 90%;">
            <div class="d-flex flex-row justify-content-around">
            <input type="hidden" name="nome" id="nome" placeholder="nome" value="<?= $users['nome']?> <?= $users['sobrenome']?>">
            <input type="hidden" name="idUsuario" id="idUsuario" placeholder="idUsuario" value="<?= $users['idUsuario']?>">
            <p class="card-title fw-bold"><?= $users['nome'] ?> <?= $users['sobrenome'] ?></p>
                <p class="fw-bold"><?php echo $data_atual->format('d-m-Y'); ?></p>
            </div>
            <div class="group-button flex-row d-flex justify-content-evenly">
                <input value="1" name="crudEstrela" type="radio" id="star1" class="bg-transparent border border-0 bg-white"><label for="star1"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></input>
                <input class="border border-0 bg-white" value="2" id="star2" name="crudEstrela" type="radio"><label for="star2"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></label></input>
                <input class=" border border-0 bg-white" value="3" id="star3" name="crudEstrela" type="radio"><label for="star3"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></label></input>
                <input class=" border border-0 bg-white" value="4" id="star4" name="crudEstrela" type="radio"><label for="star4"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></label></input>
                <input class=" border border-0 bg-white" value="5" id="star5" name="crudEstrela" type="radio"><label for="star5"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></label></input>
                
                
            </div>
            <div class=" w-100 h-75 align-items-center d-flex justify-content-center">
                <textarea name="comentario" id="" cols="30" rows="5" placeholder="Avalie.." class="form-control" maxlength="200"></textarea>
            </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <input type="submit" class=" btn btn-success" value="SALVAR" name="acao">
                        </div>
                </form>
            </div>
    </div>
</dialog>

<script>
const botaoAvaliacao = document.querySelector("#btAvaliacao");
const modalAvaliacao = document.querySelector(".modalAvaliacao");
const closeAvaliacao = document.querySelector("#btCloseAvaliacao");

botaoAvaliacao.onclick = function() {
    modalAvaliacao.showModal();
    
}
closeAvaliacao.onclick = function() {
    modalAvaliacao.close();
    
}
</script>
