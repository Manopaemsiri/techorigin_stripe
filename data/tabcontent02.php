<?php include('data/content04.php'); ?>
<?php foreach($content04 as $d) {?>
<div class="grid xl-1-3 lg-1-3">
  <a href="#" class="ss-card ss-card-03 style-02">
    <div class="ss-img vertical">
      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
    </div>
    <div class="text-container">
      <div class="wrapper">
        <div class="date">
          <div class="day">9</div>
          <div class="month">ธ.ค.</div>
        </div>
        <div class="text-wrapper">
          <p class="title h-color-s">
            เลขาธิการนายกรัฐมนตรี ร่วมพิธีวาง พานพุ่มและถวายบังคมวันชาติ 
            และวันพ่อแห่งชาติ 5 ธันวาคม 2566
          </p>
          <div class="line"></div>
          <p class="desc sm">
            วันนี้ (5 ธันวาคม 2566) เวลา 08.30 น. นายพรหมินทร์ เลิศสุริย์เดช 
            เลขาธิการนายกรัฐมนตรี ร่วมพิธีวางพานพุ่ม และถวายบังคม เนื่องในโอกาสวันคล้ายวันพระบรมราช
          </p>  
        </div>
        <div class="card-footer">
          <div class="wrapper">
            <div class="item">
              <em class="fa-solid fa-eye mr-2"></em> 
              <span>999</span>
            </div>
            <div class="item">
              <em class="fa-solid fa-share-nodes mr-2"></em> 
              <span>999</span>
            </div>
            <div class="item">
              <em class="fa-solid fa-download mr-2"></em> 
              <span>999</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
<?php } ?>