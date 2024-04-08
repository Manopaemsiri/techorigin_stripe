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
                <span class="p sm fw-600">Start now</span>
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
  <section class="section-padding client-01 pos-relative bg-white">
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
                <span class="p sm fw-600">Start with Payments</span>
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
                <span class="p sm fw-600">Start with Billing</span>
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
                <span class="p sm fw-600">Start with Billing</span>
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
                <span class="p sm fw-600">Start with Billing</span>
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

  <section class="section-padding section-02 pos-relative bg-white">
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
        <a href="#" class="color-s h-color-p fw-500">professional<br>services team</a>
        and certified partners so you can see value with Stripe faster.
      </p>
      <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
        <div class="btn btn-action sm btn-03 mw-auto">
          <div class="icon-wrapper chevron-slide">
            <span class="p sm fw-600">Contact sales</span>
            <div class="icon">
              <em class="fa-solid fa-chevron-right"></em>
            </div>
          </div>
        </div>
      </div>
      <div class="grids mt-adaptive">
        <div class="grid lg-20 md-1-3 sm-100">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php 
                $contents02 = [
                  [
                    'logo' => './public/assets/app/img/brands/bmw-white.svg',
                    'title' => 'Learn why BMW chose Stripe to power e-commerce and payments',
                    'imgBg' => './public/assets/app/img/content/04.jpg',
                    'bgColor' => 'theme-01' 
                  ],[
                    'logo' => './public/assets/app/img/brands/amazon-white.svg',
                    'title' => 'See how Amazon simplified cross-border payments with Stripe',
                    'imgBg' => './public/assets/app/img/content/02.jpg',
                    'bgColor' => 'theme-02' 
                  ],[
                    'logo' => "./public/assets/app/img/brands/maersk-white.svg",
                    'title' => 'See how Maersk tapped into new technology to make it easier to ship around the world',
                    'imgBg' => './public/assets/app/img/content/03.jpg',
                    'bgColor' => 'theme-03' 
                  ],[
                    'logo' => "./public/assets/app/img/brands/twilio-white.svg",
                    'title' => 'See how Twilio increased authorization rates by 10% with Stripe',
                    'imgBg' => './public/assets/app/img/content/05.jpg',
                    'bgColor' => 'theme-04' 
                  ]
                ]
              ?>
              <!-- Content 01 -->
              <?php foreach($contents02 as $d) {?>
                <div class="swiper-slide" 
                  data-title="<?= $d['title'] ?>" data-image="<?= $d['imgBg'] ?>" 
                  data-logo="<?= $d['logo'] ?>" data-filter="<?= $d['bgColor'] ?>"
                >
                  <div class="swiper-content">
                    <div class="wrapper">
                      <div class="swiper-content-list">
                        <p class="h4 title fw-600">5+</p>
                        <p class="md color-02 fw-400">
                          Amazon businesses on<br>
                          Stripe including Prime,<br>
                          Audible, and Amazon Pay.
                        </p>
                      </div>
                      
                      <div class="swiper-content-list">
                        <p class="h4 title fw-600">50+</p>
                        <p class="md color-02 fw-400">
                          Payment methods<br>available on Stripe
                        </p>
                      </div>

                      <div class="swiper-content-list">
                        <p class="title size-02 fw-600">Products used</p>
                        <div class="ss-title mt-5" data-aos="fade-up" data-aos-delay="0">
                          <div class="icon">
                            <img src="./public/assets/app/img/icon/payments.svg" alt="Payments Icon">
                          </div>
                          <span class="p fw-400 color-04 ml-1">Payments</span>
                        </div>
                        <div class="ss-title mt-2" data-aos="fade-up" data-aos-delay="0">
                          <div class="icon">
                            <img src="./public/assets/app/img/icon/connect.svg" alt="Payments Icon">
                          </div>
                          <span class="p fw-400 color-04 ml-1">Connect</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>  
        <div class="grid lg-80 md-2-3 sm-100">
          <div class="ss-card ss-card-01 ovf-hidden bradius-round ">
            <div class="ss-img horizontal swiper-image"></div>
            <div class="filter-01 swiper-filter"></div>
            <div class="content-inner">
              <div class="logo-container">
                <div class="logo swiper-logo"></div>
              </div>
              <div class="text-container">
                <div class="pos-relative">
                  <h5 class="title color-white fw-500 card-title swiper-title"></h5>
                  <div class="btns">
                    <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                      <div class="icon-wrapper chevron-slide color-white">
                        <span>Read story</span>
                        <div class="icon">
                          <em class="fa-solid fa-chevron-right"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="client-02 mt-4">
        <div class="grids jc-center">
          <?php 
            $brandsLogo = [
              [
                "logo" => '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" fill="none" viewBox="0 0 200 40">
                  <path fill="#0166B1" d="M111.852 20c0 6.55-5.302 11.852-11.852 11.852V20h11.852zM100 8.148V20H88.148c0-6.55 5.302-11.852 11.852-11.852z"></path>
                  <path class="fill-white" fill="#ffffff" d="M100 8.149c6.55 0 11.852 5.302 11.852 11.85H100V8.15zm-11.852 11.85H100v11.853c-6.55 0-11.852-5.302-11.852-11.852z"></path>
                  <path fill="#6F6F6F" d="M100 8.148v.65c6.176 0 11.202 5.025 11.202 11.202h.649c0-6.545-5.305-11.852-11.851-11.852zm0 23.054c-6.176 0-11.202-5.025-11.202-11.202h-.65c0 6.545 5.306 11.852 11.852 11.852M100 0C88.955 0 80 8.955 80 20s8.955 20 20 20 20-8.955 20-20-8.955-20-20-20zm18.7 20c0 10.327-8.372 18.7-18.7 18.7S81.3 30.327 81.3 20 89.673 1.3 100 1.3s18.7 8.373 18.7 18.7z"></path>
                  <path fill="#6F6F6F" d="M91.453 10.351c.64-.668 1.001-1.44.363-2.178-.348-.4-.933-.487-1.416-.29l-.049.018.016-.042c.071-.19.117-.797-.404-1.215a1.206 1.206 0 00-.894-.248c-.6.06-1.062.468-2.318 1.86-.438.49-.86.994-1.264 1.511l3.453 3.253c1.144-1.258 1.61-1.725 2.513-2.67v.001zm-4.505-.795c.696-.846 1.434-1.612 1.769-1.915.105-.096.22-.19.36-.229.227-.062.46.098.514.33.053.232-.094.452-.257.634-.368.412-1.717 1.813-1.717 1.813l-.67-.634zM88.3 10.83s1.313-1.38 1.742-1.82c.17-.175.28-.281.397-.339.152-.073.317-.088.466.01a.406.406 0 01.175.43c-.043.196-.205.384-.34.528L89 11.489l-.7-.66zm12.095-4.358l1.105-2.46.071-.218-.02.228.116 3.286c.396.038.791.09 1.183.156l-.18-4.868a26.011 26.011 0 00-1.651-.127L99.93 5.153l-.038.2-.04-.2-1.088-2.684c-.55.023-1.1.066-1.652.127l-.18 4.868c.393-.065.788-.117 1.184-.156l.116-3.286-.02-.228.07.22 1.106 2.458h1.007zm9.181 5.088c.272.29.663.756.883 1.04l4.045-2.551a27 27 0 00-.765-.942l-2.562 1.682-.174.15.13-.19 1.132-2.242-.8-.795-2.26 1.124-.19.129.151-.174 1.696-2.543a24.621 24.621 0 00-.951-.762L107.343 9.5c.325.248.754.614 1.028.862l2.417-1.246.156-.113-.114.153-1.254 2.404z"></path>
                </svg>'
              ],[
                "logo" => '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" viewBox="0 0 200 40">
                  <title>Amazon logo</title>
                  <g fill="none" fill-rule="evenodd">
                    <path fill="#EFA82E" d="M111.58 33.91C106.18 37.9 98.37 40 91.64 40a36.13 36.13 0 01-24.37-9.28c-.5-.45-.05-1.08.56-.72a49.08 49.08 0 0024.37 6.46c5.98 0 12.55-1.24 18.6-3.8.9-.39 1.67.6.78 1.25"></path>
                    <path fill="#EFA82E" d="M113.82 31.36c-.69-.88-4.56-.42-6.3-.21-.52.06-.6-.4-.13-.73 3.09-2.17 8.15-1.54 8.73-.82.6.74-.15 5.8-3.04 8.21-.45.38-.87.18-.67-.31.65-1.63 2.1-5.26 1.41-6.14"></path>
                    <path fill="#1B1A19" d="M107.65 15.13v-2.1c0-.33.24-.54.53-.54h9.45c.3 0 .54.22.54.53v1.8c0 .3-.26.7-.71 1.33l-4.9 6.97c1.82-.04 3.74.23 5.4 1.16.36.2.47.51.5.82v2.24c0 .31-.34.67-.7.48a10.89 10.89 0 00-9.98.02c-.33.17-.67-.18-.67-.49v-2.13c0-.34 0-.93.35-1.45l5.67-8.11h-4.94a.53.53 0 01-.54-.53M73.2 28.26h-2.88a.54.54 0 01-.5-.48V13.06c0-.3.24-.53.55-.53h2.67c.28.01.5.23.52.5v1.92h.06c.7-1.86 2-2.73 3.78-2.73 1.8 0 2.92.87 3.73 2.73a4.08 4.08 0 013.96-2.73c1.2 0 2.52.5 3.33 1.61.9 1.24.72 3.04.72 4.62v9.28c0 .3-.25.53-.55.53h-2.87a.54.54 0 01-.52-.52v-7.8c0-.63.06-2.18-.08-2.76-.22-1-.86-1.27-1.69-1.27-.7 0-1.42.46-1.72 1.2-.29.75-.26 1.99-.26 2.82v7.8c0 .3-.25.53-.56.53h-2.87a.54.54 0 01-.51-.52v-7.8c0-1.65.26-4.06-1.77-4.06-2.07 0-1.99 2.35-1.99 4.05v7.8c0 .3-.25.53-.55.53m53.11-13.03c-2.11 0-2.25 2.88-2.25 4.67 0 1.8-.02 5.64 2.23 5.64 2.22 0 2.33-3.1 2.33-4.99 0-1.24-.05-2.72-.43-3.9-.32-1.02-.96-1.42-1.88-1.42m-.02-3.01c4.26 0 6.57 3.66 6.57 8.3 0 4.5-2.55 8.05-6.57 8.05-4.19 0-6.46-3.65-6.46-8.2 0-4.59 2.3-8.15 6.46-8.15m12.1 16.04h-2.87a.54.54 0 01-.51-.52V13a.55.55 0 01.55-.48h2.66c.25.01.46.18.51.41v2.25h.05c.81-2.01 1.94-2.97 3.92-2.97 1.29 0 2.55.47 3.35 1.74.75 1.17.75 3.16.75 4.58v9.26a.55.55 0 01-.55.46h-2.88a.54.54 0 01-.5-.46v-8c0-1.6.18-3.95-1.8-3.95-.7 0-1.35.46-1.67 1.17-.4.9-.46 1.8-.46 2.79v7.92c0 .3-.25.53-.55.53m-35.38-.03a.6.6 0 01-.68.06c-.96-.79-1.13-1.15-1.65-1.9-1.57 1.6-2.7 2.08-4.73 2.08-2.42 0-4.3-1.5-4.3-4.47a4.87 4.87 0 013.06-4.69c1.56-.68 3.74-.8 5.4-1v-.36c0-.69.06-1.5-.35-2.08-.35-.53-1.02-.75-1.61-.75-1.1 0-2.07.56-2.31 1.72-.05.26-.24.52-.5.53l-2.78-.3c-.24-.05-.5-.24-.43-.6.64-3.37 3.69-4.4 6.42-4.4 1.4 0 3.23.38 4.33 1.44 1.4 1.3 1.26 3.04 1.26 4.93v4.47c0 1.34.56 1.93 1.09 2.66.18.26.22.57-.01.76-.59.49-1.63 1.4-2.2 1.9h-.01zm-2.9-7c0 1.12.03 2.05-.54 3.05-.45.8-1.18 1.3-1.98 1.3-1.1 0-1.75-.84-1.75-2.08 0-2.44 2.2-2.88 4.27-2.88v.61zm-34.76 7a.6.6 0 01-.68.06c-.95-.79-1.12-1.15-1.65-1.9-1.57 1.6-2.69 2.08-4.73 2.08-2.42 0-4.3-1.5-4.3-4.47a4.87 4.87 0 013.06-4.69c1.56-.68 3.74-.8 5.4-1v-.36c0-.69.06-1.5-.35-2.08-.34-.53-1.02-.75-1.6-.75-1.1 0-2.08.56-2.32 1.72-.05.26-.24.52-.5.53l-2.78-.3c-.23-.05-.5-.24-.43-.6.64-3.37 3.7-4.4 6.43-4.4 1.4 0 3.22.38 4.32 1.44 1.4 1.3 1.27 3.04 1.27 4.93v4.47c0 1.34.55 1.93 1.08 2.66.18.26.22.57-.01.76-.59.49-1.63 1.4-2.2 1.9zm-2.9-7c0 1.12.03 2.05-.53 3.05-.46.8-1.18 1.3-2 1.3-1.1 0-1.74-.84-1.74-2.08 0-2.44 2.2-2.88 4.28-2.88v.61z"></path>
                  </g>
                </svg>'
              ],[
                "logo" => '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" fill="none"  viewBox="0 0 200 40">
                  <title>Maersk logo</title>
                  <path fill="#000000" fill-rule="evenodd" d="M71.56 26.746V12.891h3.716l4.707 10.354L84.62 12.89h3.559v13.855h-3.064v-8.06l-3.534 8.06h-3.265l-3.58-8.016v8.016H71.56zm28.947-5.364l-2.563-5.874-2.505 5.873h5.068zm-7.359 5.364h-3.603l6.193-13.855h4.435l6.237 13.855h-3.556l-1.227-2.76h-7.29l-1.189 2.76zm14.699 0V12.891h13.329v2.77h-10.11v2.752h8.669v2.704h-8.669v2.858h10.135v2.771h-13.354zm19.211-7.493h7.004V15.66h-7.004v3.592zm-3.265 7.493V12.891h11.155c1.49 0 2.355.855 2.355 2.323v4.655c0 1.071-.955 2.039-2.808 2.039-.105.005-.212 0-.322 0l3.247 4.838h-3.583l-3.079-4.737h-3.7v4.737h-3.265zm19.384.008h-1.105c-1.443 0-2.138-.827-2.138-2.032v-1.81h3.243v1.072h6.89v-2.836h-7.903c-1.262 0-2.171-.842-2.171-2.01v-4.114c0-1.245.989-2.125 2.193-2.125h9.035c1.221 0 2.065.905 2.065 2.213v1.653h-3.219V15.67h-6.89v2.729h7.88c1.164 0 2.229.764 2.229 2.234v3.955c0 1.347-.752 2.166-2.16 2.166h-7.949zm13.221 0V12.897h3.31v5.542l6.304-5.542h4.481l-7.52 6.437 7.791 7.42h-4.64l-6.416-6.302v6.302h-3.31z" clip-rule="evenodd"></path>
                  <path fill="#42B0D5" fill-rule="evenodd" d="M54.397 4H31.608c-.959 0-1.878.38-2.555 1.055A3.578 3.578 0 0028 7.6v24.307c0 1.981 1.615 3.588 3.608 3.588h22.79c1.995 0 3.613-1.61 3.613-3.594V7.594C58.011 5.609 56.393 4 54.397 4zm-.686 7.507l-5.924 7.357 8.56 4.079-.006.029h-9.503l2.118 9.166-.029.017-5.924-7.357-5.924 7.357-.024-.012 2.113-9.172H29.67l-.011-.028 8.56-4.08-5.924-7.356.017-.023 8.56 4.079 2.113-9.167h.035l2.113 9.167 8.56-4.08.018.024z" clip-rule="evenodd"></path>
                </svg>'
              ],[
                "logo" => '<svg xmlns="http://www.w3.org/2000/svg" width="200" height="40" fill="none"  viewBox="0 0 200 40">
                  <title>Twilio logo</title>
                  <path fill="#F22F46" d="M64.4 16.3c0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-1.7 1.4-3.1 3.1-3.1 1.7 0 3.1 1.4 3.1 3.1zm-3.1 4.3c-1.7 0-3.1 1.4-3.1 3.1 0 1.7 1.4 3.1 3.1 3.1 1.7 0 3.1-1.4 3.1-3.1 0-1.7-1.4-3.1-3.1-3.1zM80 20c0 8.3-6.7 15-15 15s-15-6.7-15-15S56.7 5 65 5s15 6.7 15 15zm-4 0c0-6.1-4.9-11-11-11s-11 4.9-11 11 4.9 11 11 11 11-4.9 11-11zm-7.3.6c-1.7 0-3.1 1.4-3.1 3.1 0 1.7 1.4 3.1 3.1 3.1 1.7 0 3.1-1.4 3.1-3.1 0-1.7-1.4-3.1-3.1-3.1zm0-7.4c-1.7 0-3.1 1.4-3.1 3.1 0 1.7 1.4 3.1 3.1 3.1 1.7 0 3.1-1.4 3.1-3.1 0-1.7-1.4-3.1-3.1-3.1zm51.6-2.3c.1 0 .2.1.3.2v3.2c0 .2-.2.3-.3.3H115c-.2 0-.3-.2-.3-.3v-3.1c0-.2.2-.3.3-.3h5.3zm-.1 4.5H110c-.1 0-.3.1-.3.3l-1.3 5-.1.3-1.6-5.3c0-.1-.2-.3-.3-.3h-4c-.1 0-.3.1-.3.3l-1.5 5-.1.3-.1-.3-.6-2.5-.6-2.5c0-.1-.2-.3-.3-.3h-8v-4.3c0-.1-.2-.3-.4-.2l-5 1.6c-.2 0-.3.1-.3.3v2.7h-1.3c-.1 0-.3.1-.3.3v3.8c0 .1.1.3.3.3h1.3v4.7c0 3.3 1.8 4.8 5.1 4.8 1.4 0 2.7-.3 3.6-.8v-4c0-.2-.2-.3-.3-.2-.5.2-1 .3-1.4.3-.9 0-1.4-.4-1.4-1.4v-3.4h2.9c.1 0 .3-.1.3-.3v-3.2L97.8 29c0 .1.2.3.3.3h4.2c.1 0 .3-.1.3-.3l1.8-5.6.9 2.9.8 2.7c0 .1.2.3.3.3h4.2c.1 0 .3-.1.3-.3l3.8-12.6V29c0 .1.1.3.3.3h5.1c.1 0 .3-.1.3-.3V15.7c0-.1-.1-.3-.2-.3zm6.7-4.5h-5.1c-.1 0-.3.1-.3.3v17.7c0 .1.1.3.3.3h5.1c.1 0 .3-.1.3-.3V11.1c0-.1-.1-.2-.3-.2zm6.8 0h-5.3c-.1 0-.3.1-.3.3v3.1c0 .1.1.3.3.3h5.3c.1 0 .3-.1.3-.3v-3.2c0-.1-.1-.2-.3-.2zm-.1 4.5h-5.1c-.1 0-.3.1-.3.3v13.1c0 .1.1.3.3.3h5.1c.1 0 .3-.1.3-.3V15.7c0-.1-.1-.3-.3-.3zm16.1 6.8c0 3.8-3.2 7.1-7.7 7.1-4.4 0-7.6-3.3-7.6-7.1s3.2-7.1 7.7-7.1c4.4 0 7.6 3.3 7.6 7.1zm-5.4.1c0-1.4-1-2.5-2.2-2.4-1.3 0-2.2 1.1-2.2 2.4 0 1.3 1 2.4 2.2 2.4 1.3 0 2.2-1.1 2.2-2.4z"></path>
                </svg>'
              ],
            ]
          ?>
          <?php foreach($brandsLogo as $d) {?>
            <div class="grid lg-25 md-25 xs-50">
              <div class="logo">
                <?= $d['logo'] ?>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>   
    <div class="pattern-lines theme-02">
      <div class="line"></div><div class="line"></div>
      <div class="line"></div><div class="line"></div>
    </div>   
  </section>
  
  <section class="section-padding pos-relative section-03 bg-03">
    <div class="container">
      <p class="h6 color-s fw-600" data-aos="fade-up" data-aos-delay="0">
        Built for growth
      </p>
      <h2 class="lg fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
        Take your startup farther, faster
      </h2>
      <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
        Startups build on Stripe to launch faster, adapt as they grow, 
        and automate<br>workflows to do more with less. Build your own API-based 
        integration or use our<br>low- to no-code solutions, which are simple enough 
        for easy implementation and<br>powerful enough to scale as fast and as far as you need.
      </p>
      <div class="grids" data-aos="fade-up" data-aos-delay="450">
        <?php 
          $contents = [
            [
              "imgBg" => './public/assets/app/img/content/atlas_home_rocketrides_Thai.svg',
              "icon" => './public/assets/app/img/brands/atlas.svg',
              "tagTitle" => 'Atlas',
              "title" => 'Incorporate your company',
              "desc" => 'Form a legal entity, issue stock, and start<br>accepting payments.',
              "primaryColor" => "bg-08",
              "secondaryColor" => "bg-09"
            ],[
              "imgBg" => './public/assets/app/img/content/atlas_home_rocketrides_Thai.svg',
              "icon" => './public/assets/app/img/icon/payment-link.svg',
              "tagTitle" => 'Payment Link',
              "title" => 'Validate your idea',
              "desc" => 'Test your product idea by launching payments<br>with little to no code.',
              "primaryColor" => "bg-10",
              "secondaryColor" => "bg-11"
            ],[
              "imgBg" => './public/assets/app/img/content/atlas_home_rocketrides_Thai.svg',
              "icon" => './public/assets/app/img/icon/checkout.svg',
              "tagTitle" => 'Checkout',
              "title" => 'Sell to consumers',
              "desc" => 'Launch a B2C business with a prebuilt payment<br>page that’s optimized for conversion.',
              "primaryColor" => "bg-10",
              "secondaryColor" => "bg-11"
            ],[
              "imgBg" => './public/assets/app/img/content/atlas_home_rocketrides_Thai.svg',
              "icon" => './public/assets/app/img/icon/invoicing.svg',
              "tagTitle" => 'Invoicing',
              "title" => 'Sell to businesses',
              "desc" => 'Launch a B2B business and collect one-time or recurring payments from customers.',
              "primaryColor" => "bg-08",
              "secondaryColor" => "bg-12"
            ],
          ]
        ?>   
        <?php foreach($contents as $d){?>
          <div class="grid lg-50 md-50 sm-100">
            <a href="#" class="ss-card ss-card-02">
              <div class="img-container">
                <div class="img-wrapper position-01">
                  <img src="<?= $d['imgBg'] ?>" alt="Image">
                </div>
                <div class="pattern-gradiant position-01 <?= $d['primaryColor'] ?>"></div>
                <div class="pattern-gradiant position-02 <?= $d['secondaryColor'] ?>"></div>
              </div>
              <div class="text-container">
                <div class="ss-tags style-01">
                  <div class="tag bg-07">
                    <div class="icon">
                      <img src="<?= $d['icon'] ?>"  alt="Atlas">
                    </div>
                    <span class="p sm fw-500 ml-3 color-04"><?= $d['tagTitle'] ?></span>
                  </div>
                </div>
                <h5 class="lg fw-700">
                  <?= $d['title'] ?>
                </h5>
                <p class="h6 color-02 fw-500 mt-2 lg-no-br"> 
                  <?= $d['desc'] ?>
                </p>
                <div class="btns">
                  <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                    <div class="icon-wrapper chevron-slide style-04 color-s">
                      <span class="p fw-500">Learn About Atlas</span>
                      <div class="icon">
                        <em class="fa-solid fa-chevron-right"></em>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>        
  </section>

  <section class="section-01 pos-relative section-padding">
    <div class="patterns-top">
      <div class="pattern style-01"></div>
      <div class="pattern style-02"></div>        
    </div>
    <div class="patterns-bottom">
      <div class="pattern style-01"></div>
      <div class="pattern style-02"></div>        
    </div>
    <div class="bg-p clip-path-01">
      <div class="container">
        <div class="grids">
          <div class="grid lg-50">
            <p class="h6 color-05 fw-600" data-aos="fade-up" data-aos-delay="0">
              Designed for developers
            </p> 
            <h2 class="fw-700 color-white mt-6" data-aos="fade-up" data-aos-delay="150">
              Ship more quickly with<br>
              powerful and easy-to-use<br>APIs
            </h2>
            <p class="h6 color-06 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
              Save engineering time with unified payments<br>functionality. 
              We obsess over the maze of gateways,<br>payments rails, and financial 
              institutions that make up<br>the global economic landscape so that your 
              teams can<br>build what you need on one platform.
            </p>
            <div class="btns mt-4" data-aos="fade-up" data-aos-delay="450">
              <div class="btn btn-action sm btn-04 mw-auto">
                <div class="icon-wrapper chevron-slide style-02">
                  <span class="p sm fw-600">Contact sales</span>
                  <div class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50">
          <video class="video-wrapper size-02" muted autoPlay loop>
              <source src="./public/assets/app/videos/06.mp4" />
            </video>
          </div>
        </div>
      
        <div class="grids mt-adaptive" data-aos="fade-up" data-aos-delay="450">
          <div class="grid md-25 sm-50">
            <div class="icon">
              <img src="./public/assets/app/img/icon/no-code.svg" alt="">
            </div>
            <p class="title style-02 fw-700 color-white">Use Stripe with your stack</p>
            <p class="md color-06 fw-400 mt-2">
              We offer client and server libraries in 
              everything from React and PHP to .NET and iOS.
            </p>
            <div class="btns">
              <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                <div class="icon-wrapper chevron-slide color-05 style-03">
                  <span class="p fw-500">See libraries</span>
                  <div class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid md-25 sm-50">
            <div class="icon">
              <img src="./public/assets/app/img/icon/no-code.svg" alt="">
            </div>
            <p class="title style-02 fw-700 color-white">Try no-code options</p>
            <p class="md color-06 fw-400 mt-2">
              Customize and deploy<br>payments interfaces 
              directly from<br>the Stripe Dashboard.
            </p>
            <div class="btns">
              <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                <div class="icon-wrapper chevron-slide color-05 style-03">
                  <span class="p fw-500">See libraries</span>
                  <div class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid md-25 sm-50">
            <div class="icon">
              <img src="./public/assets/app/img/icon/no-code.svg" alt="">
            </div>
            <p class="title style-02 pos-02 fw-700 color-white">Explore pre-built integrations</p>
            <p class="md color-06 fw-400 mt-2">
              Connect Stripe to over a hundred<br>tools including Adobe, Salesforce,<br>and Xero.
            </p>
            <div class="btns">
              <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                <div class="icon-wrapper chevron-slide color-05 style-03">
                  <span class="p fw-500">See libraries</span>
                  <div class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid md-25 sm-50">
            <div class="icon">
              <img src="./public/assets/app/img/icon/no-code.svg" alt="">
            </div>
            <p class="title style-02 pos-03 fw-700 color-white">Build on Stripe Apps</p>
            <p class="md color-06 fw-400 mt-2">
              Create an app just for your team<br>
              or for the millions of businesses<br>on Stripe.
            </p>
            <div class="btns">
              <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                <div class="icon-wrapper chevron-slide color-05 style-03">
                  <span class="p fw-500">See libraries</span>
                  <div class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>    
      <div class="pattern-lines theme-03">
        <div class="line"></div><div class="line"></div>
        <div class="line"></div><div class="line"></div>
      </div> 
    </div>      
  </section>

  <?php 
    $contents02 = [
      [
        "imgBg" => './public/assets/app/img/content/svg/01.svg',
        "icon" => './public/assets/app/img/brands/atlas.svg',
        "tagTitle" => 'Atlas',
        "title" => 'Use a pre-integrated platform',
        "desc" => '
          Explore our directory to find out-of-the-box 
          solutions that connect with Stripe, such as 
          <span class="color-s h-color-p">Squarespace</span> and 
          <span class="color-s h-color-p">Lightspeed.</span>
        ',
        "style" => 'position-01',
        "btnTitle" => "See directory"
      ],[
        "imgBg" => './public/assets/app/img/content/svg/02.svg',
        "icon" => './public/assets/app/img/icon/payment-link.svg',
        "tagTitle" => 'Payment Link',
        "title" => 'Build with Stripe-certified experts',
        "desc" => '
          Work with a Stripe consulting partner that can integrate 
          and deploy Stripe solutions for you.
        ',
        "style" => 'position-02',
        "btnTitle" => "View partners"
      ],[
        "imgBg" => './public/assets/app/img/content/07.jpg',
        "icon" => './public/assets/app/img/icon/checkout.svg',
        "tagTitle" => 'Checkout',
        "title" => 'Try our no-code<br>products',
        "desc" => '
          Create an <span class="color-s h-color-p">invoice</span>, 
          accept an <span class="color-s h-color-p">in-person payment</span> 
          with your phone, or share a <span class="color-s h-color-p">payment link</span> 
          directly from your Dashboard to start generating revenue in minutes – no code required.
        ',
        "style" => 'position-02',
        "btnTitle" => "Explore no-code"
      ]
    ]
  ?>
  <div class="section-padding pos-relative bg-03">
    <div class="container">
      <p class="h6 color-s fw-600" data-aos="fade-up" data-aos-delay="0">
        Launch with ease
      </p>
      <h2 class="lg fw-700 color-p mt-6" data-aos="fade-up" data-aos-delay="150">
        Low- and no-code options for<br>getting started
      </h2>
      <p class="h6 color-02 fw-400 mt-6 xs-no-br" data-aos="fade-up" data-aos-delay="300">
        If you’d like to use Stripe for your business but don’t have developers on staff, no<br>
        problem. We have a few options depending on your needs.
      </p>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="450">   
        <?php foreach($contents02 as $d){?>
          <div class="grid lg-1-3 md-50 sm-100">
            <a href="#" class="ss-card ss-card-02 size-02">
              <div class="img-container">
                <div class="img-wrapper <?= $d['style'] ?>">
                  <img src="<?= $d['imgBg'] ?>" alt="Image">
                </div>
              </div>
              <div class="text-container">
                <div class="ss-tags style-01">
                  <div class="tag bg-07">
                    <div class="icon">
                      <img src="<?= $d['icon'] ?>"  alt="Atlas">
                    </div>
                    <span class="p sm fw-500 ml-3 color-04"><?= $d['tagTitle'] ?></span>
                  </div>
                </div>
                <h5 class="lg title fw-700">
                  <?= $d['title'] ?>
                </h5>
                <p class="h6 desc color-02 fw-500 mt-2 lg-no-br"> 
                  <?= $d['desc'] ?>
                </p>
                <div class="btns">
                  <div class="btn btn-action sm btn-02 mw-auto pl-0 ml-0">
                    <div class="icon-wrapper chevron-slide style-04 color-s">
                      <span class="p fw-500"><?= $d['btnTitle'] ?></span>
                      <div class="icon">
                        <em class="fa-solid fa-chevron-right"></em>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
    </div>        
  </div>

  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <div class="grid" data-aos="fade-up" data-aos-delay="150">
          <h5 class="fw-700">Ready to get started?</h5>
          <p class="h6 color-02 fw-400 mt-5">
            Explore <a href="#" class="color-s h-color-p fw-500">Stripe Payments</a>
            , or create an account instantly and start accepting payments. 
            You can also contact us to design a custom package for your business.
          </p>
        </div>
      </div>   
    </div>
  </section>
  
  <?php //include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>