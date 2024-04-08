<style>
    .modalAvaliacao {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        outline: none;
        border: none;
        border-radius: 10px;
        height: 35vh;
    }

    .modalAvaliacao::backdrop {
        backdrop-filter: blur(2px)
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



<button id="btAvaliacao" class="btn btn-outline-dark">Avalie</button>
<dialog class="modalAvaliacao w-25">
<?php 
    date_default_timezone_set('America/Sao_Paulo');
    $data_atual = new DateTime();
?>
    <div class="h-100 w-100">
        <div class="d-flex justify-content-end">
            <button id="btCloseAvaliacao" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="w-100 gap-2" style="height: 90%;">
            <div class="d-flex flex-row justify-content-around">
                <p class="fw-bold">Luciano Macedo</p>
                <p class="fw-bold"><?php echo $data_atual->format('d-m-Y'); ?></p>
            </div>
            <div class="group-button flex-row d-flex justify-content-center">
                <button class=" border border-0"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></button>
                <button class=" border border-0"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></button>
                <button class=" border border-0"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></button>
                <button class=" border border-0"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></button>
                <button class=" border border-0"><i class="botao-icon far fa-star" style="color: #4400c2;"></i></button>
            </div>
            <div class=" w-100 h-75 align-items-center d-flex justify-content-center">
                <form action="" method="POST" class="flex-column d-flex gap-3">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Avalie.." class="form-control"></textarea>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-outline-dark">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</dialog>

<script>
    const botao = document.querySelector("#btAvaliacao")
    const modal = document.querySelector("dialog")
    const close = document.querySelector("#btCloseAvaliacao")

    botao.onclick = function() {
        modal.showModal()
    }
    close.onclick = function() {
        modal.close();
    }
</script>