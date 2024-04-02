<?php
  $profileLists = [
    [
      'imgBg' => 'public/assets/app/img/people/02.png',
      'name' => 'นางสาวนัทรียา ทวีวงศ์',
      'position' => 'หัวหน้าศูนย์ปฏิบัติการต่อต้านการทุจริต'
    ],[
      'imgBg' => 'public/assets/app/img/people/03.png',
      'name' => 'นางสาวมาลินี แซ่เอา',
      'position' => 'ผู้อำนวยการสำนักงานเลขาธิการ'
    ],[
      'imgBg' => 'public/assets/app/img/people/04.png',
      'name' => 'นางสาวดุสิตา ศรีชู',
      'position' => 'ผู้อำนวยการกองการต่างประเทศ'
    ],[
      'imgBg' => 'public/assets/app/img/people/05.png',
      'name' => 'นายจงเจริญ สุวรรณรัตน์',
      'position' => 'ผู้อำนวยการกองประสานงานการเมือง'
    ],[
      'imgBg' => 'public/assets/app/img/people/07.png',
      'name' => 'นางรัตนา สามารถ',
      'position' => 'ผู้อำนวยการกองประสานนฌยบายและยุทธศาสตร์'
    ],[
      'imgBg' => 'public/assets/app/img/people/08.png',
      'name' => 'นางเบญจภา ศรีสุรัตน์',
      'position' => 'ผู้อำนวยการกองพิธีการ'
    ],[
      'imgBg' => 'public/assets/app/img/people/09.png',
      'name' => 'นายตรี อัญชลีสังกาศ',
      'position' => 'ผู้อำนวยการกองสถานที่ ยานพาหนะ และรักษาความปลอดภัย'
    ],[
      'imgBg' => 'public/assets/app/img/people/10.png',
      'name' => 'นายชิโนรส ใยฤทธิ์',
      'position' => 'ผู้อำนวยการศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร'
    ],[
      'imgBg' => 'public/assets/app/img/people/11.png',
      'name' => 'นายวโรทัย ไตรพิทักษ์',
      'position' => 'ผู้อำนวยการสำนักโฆษก'
    ],[
      'imgBg' => 'public/assets/app/img/people/12.png',
      'name' => 'นางชนกสุดา สุบรรณรัตน์',
      'position' => 'ผู้อำนวยการกลุ่มพัฒนาระบบบริหาร'
    ],[
      'imgBg' => 'public/assets/app/img/people/13.png',
      'name' => 'นางสาวชัชพร สนิทวงศ์ ณ อยุธยา',
      'position' => 'นางสาวชัชพร สนิทวงศ์ ณ อยุธยา'
    ],  
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