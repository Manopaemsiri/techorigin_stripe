<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-02">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-100 sm-100">
        <div class="wrapper">
        <div class="links-container" data-aos="fade-in" data-aos-delay="0">
          <div class="link-wrapper">
            <?php foreach($breadcrumb as $b){?>
              <div class="link">
                <a class="menu p fw-400" href="<?= $b['url'] ?>">
                  <?= $b['display'] ?> 
                </a>
                <div class="line"></div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
        </div>
      </div>
    
    </div>
  </section>
<?php }?>
