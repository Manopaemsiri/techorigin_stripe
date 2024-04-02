<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-01 curve-01">
    <?php if(!empty($breadcrumbBg)){?>
      <div class="img-bg" style="background-image:url('<?= $breadcrumbBg ?>');"></div>
    <?php }?>
    <div class="wrapper">
      <h6 class="title h2 text-center color-black-theme fw-600" data-aos="fade-in" data-aos-delay="150">
        <?= $breadcrumbTitle ?>
      </h6>
      <div class="links-container" data-aos="fade-in" data-aos-delay="150">
        <div class="link-wrapper">
          <?php foreach($breadcrumb as $b){?>
            <div class="link">
              <a class="menu p sm fw-400" href="<?= $b['url'] ?>">
                <?= $b['display'] ?> 
              </a>
              <div class="line"></div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
<?php }?>
