<?php
  $profileLists = [
    [
      'imgBg' => 'public/assets/app/img/people/01.png',
      'name' => 'นายพรหมินทร์ เลิศสุริย์เดช',
      'position' => 'เลขาธิการนายกรัฐมนตรี'
    ] 
  ];
?>
<div class="grids">
  <?php foreach($profileLists as $d) { ?>
    <div class="grid lg-1-3">
      <a href="#" class="ss-card ss-card-12">
        <div class="ss-img vertical">
          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
        </div>
        <div class="text-container">
          <p class="h6 title color-white fw-500"><?= $d['name'] ?></p>
          <p class="sm desc color-white"><?= $d['position'] ?></p>
          <div class="ss-sep-02 bg-s mt-1"></div>
        </div>
        <div class="filter-07"></div>
      </a>
    </div>
  <?php } ?>
</div>