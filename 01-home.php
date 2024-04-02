<!DOCTYPE html>
<html lang="th" xml:lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('components/page-loader.php'); ?>
  <?php //include_once('include/topnav.php'); ?>

  <section class="section-padding banner-01">
    <div class="img-bg" style="background-image:url('./public/assets/app/img/banner/03.jpg');"></div>
    <div class="container">
      <div class="grids">
        <div class="grid md-50">
          <h1 class="fw-700 lh-sm color-01" data-aos="fade-up" data-aos-delay="0">
            Payments Infrastructure<br>
            for the Internet
          </h1>
          <p class="h6 color-02 fw-400 mt-3" data-aos="fade-up" data-aos-delay="150">
            Millions of companies of all sizes use Stripe 
            online and in<br>person to accept payments, send 
            payouts, automate<br>financial processes, and 
            ultimately grow revenue.
          </p>
          <div class="btns mt-4" data-aos="fade-up" data-aos-delay="300">
            <div class="btn btn-action sm btn-01 mw-auto">
              <div class="icon-wrapper chevron-slide">
                <span>Start now</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
            <div class="btn btn-action sm btn-02 mw-auto">
              <div class="icon-wrapper chevron-slide style-02">
                <span>Contact sales</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid md-50">
          <div class="img-container">
            <!-- <img src="./public/assets/app/img/content/01.jpg" alt="Hero Image"> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    $brands = [
      ['logo' => './public/assets/app/img/brands/amazon.svg'],
      ['logo' => './public/assets/app/img/brands/salesforce.svg'],
      ['logo' => './public/assets/app/img/brands/google.svg'],
      ['logo' => './public/assets/app/img/brands/zara.svg'],
      ['logo' => './public/assets/app/img/brands/shopify.svg'],
      ['logo' => './public/assets/app/img/brands/whatapp.svg'],
      ['logo' => './public/assets/app/img/brands/bmw.svg'],
      ['logo' => './public/assets/app/img/brands/marriott.svg'],
    ]
  ?>
  <section class="section-padding client-01 pos-relative">
    <div class="container">
      <div class="grids" data-aos="fade-up" data-aos-delay="450">
        <?php foreach($brands as $d) {?>
          <div class="grid lg-25">
            <div class="brand">
              <img src="<?= $d['logo'] ?>" alt="Logo Brand">
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>
  </section>

  <section class="section-padding pos-relative bg-03">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100">
          <p class="h6 color-s fw-600" data-aos="fade-up" data-aos-delay="0">
            Modular solutions
          </p>
          <h2 class="lg fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
            A fully integrated<br>suite of financial<br>and payments<br>products
          </h2>
          <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
            Reduce costs, grow revenue, and run your business<br> 
            more efficiently on a fully integrated platform. Use<br>
            Stripe to handle all of your payments-related needs,<br>
            manage revenue operations, and launch (or invent) new<br> 
            business models.
          </p>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
          <video class="video-wrapper" muted autoPlay loop>
            <source src="./public/assets/app/videos/01.mp4" />
          </video>
        </div>
      </div>
    </div>   
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>   
  </section>

  <section class="section-padding pos-relative bg-03">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100">
          <div class="ss-title" data-aos="fade-up" data-aos-delay="0">
            <div class="icon">
              <img src="./public/assets/app/img/icon/payments.svg" alt="Payments Icon">
            </div>
            <span class="h6 fw-600 color-04">Payments</span>
          </div>
          <h2 class="fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
            Accept and optimise<br>
            payments, globally
          </h2>
          <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
            Increase authorisation rates, optimise your checkout<br>
            conversion, and offer local payment methods in every<br>market.
          </p>
          <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action sm btn-03 mw-auto">
              <div class="icon-wrapper chevron-slide">
                <span>Start with Payments</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-adaptive" data-aos="fade-up" data-aos-delay="600">
            <p class="fw-500">See also</p>
            <p class="sm mt-3">
              <a href="#" class="color-s h-color-p fw-500">Tax</a>
              <span class="color-p fw-400">for invoice creation, collection, and tracking</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Radar</a>
              <span class="color-p fw-400">for streamlined accrual accounting</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Terminal</a>
              <span class="color-p fw-400">for custom revenue reports</span>
            </p>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
          <video class="video-wrapper" muted autoPlay loop>
            <source src="./public/assets/app/videos/02.mp4" />
          </video>
        </div>
      </div>
    </div>   
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>    
  </section>

  <section class="section-padding pos-relative bg-03">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100">
          <div class="ss-title" data-aos="fade-up" data-aos-delay="0">
            <div class="icon">
              <img src="./public/assets/app/img/icon/billing.svg" alt="Payments Icon">
            </div>
            <span class="h6 fw-600 color-04">Billing</span>
          </div>
          <h2 class="fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
            Capture recurring revenue
          </h2>
          <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
            Support recurring business models, minimise churn,<br> 
            and automate finance operations.
          </p>
          <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action sm btn-03 mw-auto">
              <div class="icon-wrapper chevron-slide">
                <span>Start with Billing</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-adaptive" data-aos="fade-up" data-aos-delay="600">
            <p class="fw-500">See also</p>
            <p class="sm mt-3">
              <a href="#" class="color-s h-color-p fw-500">Invoicing</a>
              <span class="color-p fw-400">for invoice creation, collection, and tracking</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Revenue Recognition</a>
              <span class="color-p fw-400">for streamlined accrual accounting</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Sigma</a>
              <span class="color-p fw-400">for custom revenue reports</span>
            </p>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
          <video class="video-wrapper" muted autoPlay loop>
            <source src="./public/assets/app/videos/03.mp4" />
          </video>
        </div>
      </div>
    </div>   
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>    
  </section>

  <section class="section-padding pos-relative bg-03">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100">
          <div class="ss-title" data-aos="fade-up" data-aos-delay="0">
            <div class="icon">
              <img src="./public/assets/app/img/icon/connect.svg" alt="Payments Icon">
            </div>
            <span class="h6 fw-600 color-04">Connect</span>
          </div>
          <h2 class="fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
            Set up multi-party<br>payments and payouts
          </h2>
          <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
            Integrate payments into your platform or marketplace<br>
            for end-to-end payments experiences.
          </p>
          <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action sm btn-03 mw-auto">
              <div class="icon-wrapper chevron-slide">
                <span>Start with Billing</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-adaptive" data-aos="fade-up" data-aos-delay="600">
            <p class="fw-500">See also</p>
            <p class="sm mt-3">
              <a href="#" class="color-s h-color-p fw-500">Terminal</a>
              <span class="color-p fw-400">for invoice creation, collection, and tracking</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Instant Payouts</a>
              <span class="color-p fw-400">for streamlined accrual accounting</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Payment Elements</a>
              <span class="color-p fw-400">for custom revenue reports</span>
            </p>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
          <video class="video-wrapper" muted autoPlay loop>
            <source src="./public/assets/app/videos/05.mp4" />
          </video>
        </div>
      </div>
    </div>  
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>     
  </section>

  <section class="section-padding pos-relative bg-03">
    <div class="container">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100">
          <div class="ss-title" data-aos="fade-up" data-aos-delay="0">
            <div class="icon">
              <img src="./public/assets/app/img/icon/issuing.svg" alt="Payments Icon">
            </div>
            <span class="h6 fw-600 color-04">Issuing</span>
          </div>
          <h2 class="fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
            Build a fintech offering with<br>banking-as-a-service
          </h2>
          <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
            Launch, manage, and scale a commercial card<br>
            programme without any setup fees.
          </p>
          <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action sm btn-03 mw-auto">
              <div class="icon-wrapper chevron-slide">
                <span>Start with Billing</span>
                <div class="icon">
                  <em class="fa-solid fa-chevron-right"></em>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-adaptive" data-aos="fade-up" data-aos-delay="600">
            <p class="fw-500">See also</p>
            <p class="sm mt-3">
              <a href="#" class="color-s h-color-p fw-500">Terminal</a>
              <span class="color-p fw-400">for invoice creation, collection, and tracking</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Instant Payouts</a>
              <span class="color-p fw-400">for streamlined accrual accounting</span>
            </p>
            <p class="sm mt-1">
              <a href="#" class="color-s h-color-p fw-500">Payment Elements</a>
              <span class="color-p fw-400">for custom revenue reports</span>
            </p>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
          <video class="video-wrapper" muted autoPlay loop>
            <source src="./public/assets/app/videos/04.mp4" />
          </video>
        </div>
      </div>
    </div>    
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>   
  </section>

  <section class="section-padding section-01 pos-relative bg-p">
    <div class="container">
      <p class="h6 color-05 fw-600" data-aos="fade-up" data-aos-delay="0">
        Global scale
      </p> 
      <h2 class="fw-700 color-white mt-6" data-aos="fade-up" data-aos-delay="150">
        The backbone for<br/>global commerce
      </h2>
      <p class="h6 color-06 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
        Stripe makes moving money as easy and<br>
        programmable as moving data. Our teams are<br>
        based in offices around the world and we process<br>
        hundreds of billions of dollars each year for<br>
        ambitious businesses of all sizes.
      </p>
      <div class="grids mt-adaptive" data-aos="fade-up" data-aos-delay="450">
        <div class="grid md-25 sm-50">
          <p class="h4 title fw-700 color-white">250M +</p>
          <p class="md color-06 fw-400 mt-2">
            API requests per day, peaking 
            at 13,000 requests a second.
          </p>
        </div>
        <div class="grid md-25 sm-50">
          <p class="h4 title fw-700 color-white">99.99%</p>
          <p class="md color-06 fw-400 mt-2">
            historical uptime for 
            <a class="color-05 fw-500 h-color-white" href="#">
              Stripe services.
            </a>
          </p>
        </div>
        <div class="grid md-25 sm-50">
          <p class="h4 title pos-02 fw-700 color-white">47+</p>
          <p class="md color-06 fw-400 mt-2">
           countries with local acquiring.
          </p>
        </div>
        <div class="grid md-25 sm-50">
          <p class="h4 title pos-03 fw-700 color-white">135+</p>
          <p class="md color-06 fw-400 mt-2">
            currencies and payment methods supported.
          </p>
        </div>
      </div> 
    </div>    
    <div class="pattern-lines theme-03">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div> 
  </section>

  <section class="section-padding pos-relative">
    <div class="container">
      <p class="h6 color-s fw-600" data-aos="fade-up" data-aos-delay="0">
        Enterprise reinvention
      </p>
      <h2 class="lg fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
        Bring agility to your enterprise
      </h2>
      <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
        You can use Stripe not only to accept payments but also to quickly 
        support new markets,<br>upgrade existing systems and tools, go 
        direct-to-consumer, and engage customers with<br>subscriptions 
        and marketplaces. Get expert integration guidance from our 
        professional<br>services team and certified partners so you 
        can see value with Stripe faster.
      </p>
    </div>   
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>   
  </section>
  
  <?php //include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>