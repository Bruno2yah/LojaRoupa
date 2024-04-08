<?php
require_once __DIR__.'/../../dao/AvaliacaoDao.php';

$avaliacao = AvaliacaoDao::selectAll();
// var_dump($avaliacao);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<div class="container ">
  
  <div class="justify-content-evenly flex-row d-flex">
    <div class="swiper avaliacao container bg-light" style="height: 25vh;">
      <div class="swiper-wrapper">
    <?php foreach ($avaliacao as $avac) { ?>
      <div class="swiper-slide d-flex align-items-center justify-content-center">
        <div class="d-flex flex-row justify-content-evenly align-items-center">

          <div class="card shadow" style="width: 18rem; border: 1px solid #4400c2;">
            <div class="card-body">
              <div class="flex-row d-flex justify-content-around my-3">
                <p class="card-title fw-bold"><?= $avac['nome'] ?> <?= $avac['sobrenome'] ?></p>
                <div class="group-button flex-row d-flex">
                  <input type="hidden" class="estrela" value="<?= $avac['estrela'] ?>">
                  <button class="border border-0 bg-white"><i class="avaliacaoVisu far fa-star" style="color: #4400c2;"></i></button>
                  <button class="border border-0 bg-white"><i class="avaliacaoVisu far fa-star" style="color: #4400c2;"></i></button>
                  <button class="border border-0 bg-white"><i class="avaliacaoVisu far fa-star" style="color: #4400c2;"></i></button>
                  <button class="border border-0 bg-white"><i class="avaliacaoVisu far fa-star" style="color: #4400c2;"></i></button>
                  <button class="border border-0 bg-white"><i class="avaliacaoVisu far fa-star" style="color: #4400c2;"></i></button>
                </div>
              </div>
              <p class="card-text"><?= $avac['comentario'] ?></p>
              <p class="fw-bold"><?=$data = date('d/m/Y', strtotime($avac['data']));?></p>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    </div>
    </div>
</div>

<script src="/js/icons.js">
  </script>
<script src="../../js/carrousel.js"></script>