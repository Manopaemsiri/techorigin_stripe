<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-03">
    <div class="container">
      <div class="wrapper">
        <div class="links-container">
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
  </section>
<?php }?>
