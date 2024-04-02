<?php
  $breadcrumb = [
    [ 'url' => '#', 'display' => 'รายการถามตอบ (Q&A)' ],
    [ 'url' => '#', 'display' => 'สลน. คือใคร' ],
  ];
  include('components/breadcrumb-03.php');
?>

<div class="btns-group">
  <div class="btns mt-3">
    <a href="#" class="btn-action btn btn-01">
      <span class="p">กลับ</span>
    </a>
  </div>
  <div class="btns jc-end mt-3">
    <button class="btn-action btn btn-01" type="submit">
      <div class="icon-wrapper">
        <div class="icon">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_604_36914)">
              <path d="M8.4363 1.90193L8.94964 1.38859C9.5563 0.781927 10.6121 0.781927 11.2188 1.38859L11.633 1.80276C11.9363 2.10609 12.1055 2.50859 12.1055 2.93443C12.1055 3.36026 11.9363 3.76859 11.633 4.06609L11.1196 4.57943L8.4363 1.89609V1.90193ZM7.81797 2.52026L2.5038 7.83443C2.33464 8.00359 2.22964 8.22526 2.21214 8.46443L2.05464 10.1736C2.03714 10.3894 2.11297 10.5994 2.26464 10.7569C2.40464 10.8969 2.58547 10.9728 2.77797 10.9728H2.84214L4.5513 10.8153C4.79047 10.7919 5.01214 10.6869 5.1813 10.5178L10.4955 5.20359L7.81214 2.52026H7.81797ZM13.2721 12.8336C13.2721 12.5944 13.0738 12.3961 12.8346 12.3961H1.16797C0.928802 12.3961 0.730469 12.5944 0.730469 12.8336C0.730469 13.0728 0.928802 13.2711 1.16797 13.2711H12.8346C13.0738 13.2711 13.2721 13.0728 13.2721 12.8336Z" fill="white"/>
            </g>
            <defs>
              <clipPath id="clip0_604_36914">
              <rect width="14" height="14" fill="white"/>
              </clipPath>
            </defs>
          </svg>
        </div>
        <span class="p">แก้ไข</span>
      </div>
    </button>
    <button class="btn-action btn btn-01 style-03" type="submit">
      <div class="icon-wrapper">
        <div class="icon">
          <svg class="h-icon" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.99156 11.9306C3.02113 12.2579 3.17236 12.5621 3.41537 12.7832C3.65838 13.0044 3.9755 13.1263 4.30406 13.125H9.69844C10.027 13.1263 10.3441 13.0044 10.5871 12.7832C10.8301 12.5621 10.9814 12.2579 11.0109 11.9306L11.6934 4.375H2.30469L2.99156 11.9306ZM8.67906 6.09C8.68801 5.97464 8.74229 5.86753 8.83002 5.7921C8.91775 5.71666 9.03179 5.67905 9.14719 5.6875C9.20471 5.69192 9.26078 5.70766 9.31219 5.73384C9.3636 5.76001 9.40933 5.7961 9.44674 5.84001C9.48415 5.88393 9.5125 5.93481 9.53017 5.98972C9.54784 6.04464 9.55447 6.10251 9.54969 6.16L9.18656 10.535C9.17775 10.6449 9.12779 10.7473 9.04668 10.822C8.96557 10.8966 8.85928 10.9379 8.74906 10.9375H8.71406C8.65654 10.9331 8.60046 10.9173 8.54905 10.8912C8.49765 10.865 8.45192 10.8289 8.41451 10.785C8.3771 10.7411 8.34875 10.6902 8.33108 10.6353C8.31341 10.5804 8.30678 10.5225 8.31156 10.465L8.67906 6.09ZM6.56156 6.125C6.56156 6.00897 6.60766 5.89769 6.6897 5.81564C6.77175 5.73359 6.88303 5.6875 6.99906 5.6875C7.11509 5.6875 7.22637 5.73359 7.30842 5.81564C7.39047 5.89769 7.43656 6.00897 7.43656 6.125V10.5C7.43656 10.616 7.39047 10.7273 7.30842 10.8094C7.22637 10.8914 7.11509 10.9375 6.99906 10.9375C6.88303 10.9375 6.77175 10.8914 6.6897 10.8094C6.60766 10.7273 6.56156 10.616 6.56156 10.5V6.125ZM4.85094 5.6875C4.90843 5.68272 4.9663 5.68935 5.02121 5.70702C5.07613 5.72468 5.12701 5.75304 5.17093 5.79045C5.21484 5.82786 5.25092 5.87358 5.2771 5.92499C5.30327 5.9764 5.31902 6.03248 5.32344 6.09L5.68656 10.465C5.69135 10.5225 5.68471 10.5804 5.66705 10.6353C5.64938 10.6902 5.62102 10.7411 5.58361 10.785C5.5462 10.8289 5.50048 10.865 5.44907 10.8912C5.39766 10.9173 5.34158 10.9331 5.28406 10.9375H5.24906C5.13885 10.9379 5.03256 10.8966 4.95145 10.822C4.87034 10.7473 4.82038 10.6449 4.81156 10.535L4.44844 6.16C4.44365 6.10251 4.45029 6.04464 4.46795 5.98972C4.48562 5.93481 4.51398 5.88393 4.55139 5.84001C4.5888 5.7961 4.63452 5.76001 4.68593 5.73384C4.73734 5.70766 4.79342 5.69192 4.85094 5.6875Z" fill="#0A112B"/>
            <path d="M12.25 2.625H9.625V2.1875C9.625 1.8394 9.48672 1.50556 9.24058 1.25942C8.99444 1.01328 8.6606 0.875 8.3125 0.875H5.6875C5.3394 0.875 5.00556 1.01328 4.75942 1.25942C4.51328 1.50556 4.375 1.8394 4.375 2.1875V2.625H1.75C1.63397 2.625 1.52269 2.67109 1.44064 2.75314C1.35859 2.83519 1.3125 2.94647 1.3125 3.0625C1.3125 3.17853 1.35859 3.28981 1.44064 3.37186C1.52269 3.45391 1.63397 3.5 1.75 3.5H12.25C12.366 3.5 12.4773 3.45391 12.5594 3.37186C12.6414 3.28981 12.6875 3.17853 12.6875 3.0625C12.6875 2.94647 12.6414 2.83519 12.5594 2.75314C12.4773 2.67109 12.366 2.625 12.25 2.625ZM8.75 2.625H5.25V2.1875C5.25 2.07147 5.29609 1.96019 5.37814 1.87814C5.46019 1.79609 5.57147 1.75 5.6875 1.75H8.3125C8.42853 1.75 8.53981 1.79609 8.62186 1.87814C8.70391 1.96019 8.75 2.07147 8.75 2.1875V2.625Z" fill="#0A112B"/>
          </svg>
        </div>
        <span class="p">ลบ</span>
      </div>
    </button>
  </div>
</div>

<div class="card-content mt-4">
  <div class="grids">
    <div class="grid lg-80 sm-100 mt-0">
      <div class="grids">
        <div class="grid lg-25 sm-50 xs-50 mt-0">
          <p class="fw-600">หัวข้อคำถาม</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-0">
          <p>สลน. คือใคร</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3"></div>
        <div class="grid lg-25 sm-50 xs-50 mt-3"></div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p class="fw-600">วันที่</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p>10/02/2567</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p class="fw-600">สถานะ</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <div class="ss-tags status rejected">
            <div class="tag text-center">
              <span class="title">ปฏิเสธการตอบกลับ</span>
            </div>
          </div>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p class="fw-600">หมวดหมู่</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p>หมวดหมู่ 1</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p class="fw-600">หมวดหมู่ย่อย</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50 mt-3">
          <p>หมวดหมู่ 1</p>
        </div>
      </div>
    </div>
    <div class="grid lg-100 sm-100">
      <div class="grids">
        <div class="grid sm-100">
          <p class="fw-600">ไฟล์ที่เกี่ยวข้อง</p>
          <div class="scroll-x-wrapper">
            <table class="table table-download style-01">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'zip'
                  ] as $k){
                ?>
                  <tr class="border mb-2">
                    <td class="file-container">
                      <div class="icon">
                        <img src="public/assets/app/img/file/<?= $k ?>.svg" alt="Image File" />
                      </div>
                    </td>
                    <td class="text-container" style="min-width:500px;">
                      <div>
                        <a class="h6 title fw-600 color-p" href="#">
                          ประวัติ สลน.
                        </a>
                        <div class="options">
                          <div class="option">
                            <div class="icon">
                              <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3741_1934)">
                                  <path d="M9.73956 11.5001H1.26044C0.56514 11.5001 0 10.9349 0 10.2396V2.67711C0 1.9818 0.56514 1.41675 1.26044 1.41675H9.73956C10.4349 1.41675 11 1.9818 11 2.67711V10.2396C11 10.9349 10.4349 11.5001 9.73956 11.5001ZM1.26044 2.10425C0.944641 2.10425 0.6875 2.36131 0.6875 2.67711V10.2396C0.6875 10.5554 0.944641 10.8126 1.26044 10.8126H9.73956C10.0554 10.8126 10.3125 10.5554 10.3125 10.2396V2.67711C10.3125 2.36131 10.0554 2.10425 9.73956 2.10425H1.26044Z" fill="#A6A9CD"/>
                                  <path d="M10.6562 4.85425H0.34375C0.153999 4.85425 0 4.70025 0 4.5105C0 4.32075 0.153999 4.16675 0.34375 4.16675H10.6562C10.846 4.16675 11 4.32075 11 4.5105C11 4.70025 10.846 4.85425 10.6562 4.85425Z" fill="#A6A9CD"/>
                                  <path d="M2.63574 3.25C2.44599 3.25 2.29199 3.096 2.29199 2.90625V0.84375C2.29199 0.653999 2.44599 0.5 2.63574 0.5C2.82549 0.5 2.97949 0.653999 2.97949 0.84375V2.90625C2.97949 3.096 2.82549 3.25 2.63574 3.25Z" fill="#A6A9CD"/>
                                  <path d="M8.36426 3.25C8.17451 3.25 8.02051 3.096 8.02051 2.90625V0.84375C8.02051 0.653999 8.17451 0.5 8.36426 0.5C8.55401 0.5 8.70801 0.653999 8.70801 0.84375V2.90625C8.70801 3.096 8.55401 3.25 8.36426 3.25Z" fill="#A6A9CD"/>
                                  <path d="M2.49219 5.44141H1.63281V6.30078H2.49219V5.44141Z" fill="#A6A9CD"/>
                                  <path d="M4.21094 5.44141H3.35156V6.30078H4.21094V5.44141Z" fill="#A6A9CD"/>
                                  <path d="M5.92969 5.44141H5.07031V6.30078H5.92969V5.44141Z" fill="#A6A9CD"/>
                                  <path d="M7.64844 5.44141H6.78906V6.30078H7.64844V5.44141Z" fill="#A6A9CD"/>
                                  <path d="M9.36719 5.44141H8.50781V6.30078H9.36719V5.44141Z" fill="#A6A9CD"/>
                                  <path d="M2.49219 7.16016H1.63281V8.01953H2.49219V7.16016Z" fill="#A6A9CD"/>
                                  <path d="M4.21094 7.16016H3.35156V8.01953H4.21094V7.16016Z" fill="#A6A9CD"/>
                                  <path d="M5.92969 7.16016H5.07031V8.01953H5.92969V7.16016Z" fill="#A6A9CD"/>
                                  <path d="M7.64844 7.16016H6.78906V8.01953H7.64844V7.16016Z" fill="#A6A9CD"/>
                                  <path d="M2.49219 8.87891H1.63281V9.73828H2.49219V8.87891Z" fill="#A6A9CD"/>
                                  <path d="M4.21094 8.87891H3.35156V9.73828H4.21094V8.87891Z" fill="#A6A9CD"/>
                                  <path d="M5.92969 8.87891H5.07031V9.73828H5.92969V8.87891Z" fill="#A6A9CD"/>
                                  <path d="M7.64844 8.87891H6.78906V9.73828H7.64844V8.87891Z" fill="#A6A9CD"/>
                                  <path d="M9.36719 7.16016H8.50781V8.01953H9.36719V7.16016Z" fill="#A6A9CD"/>
                                </g>
                                <defs>
                                  <clipPath id="clip0_3741_1934">
                                    <rect width="11" height="11" fill="white" transform="translate(0 0.5)"/>
                                  </clipPath>
                                </defs>
                              </svg>
                            </div>
                            <span class="p xs color-02 ml-1">10 ธันวาคม 2566</span>
                          </div>
                          <div class="option ml-3">
                            <div class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9997 12.6667H1.99967C1.82286 12.6667 1.65329 12.737 1.52827 12.862C1.40325 12.987 1.33301 13.1566 1.33301 13.3334C1.33301 13.5102 1.40325 13.6798 1.52827 13.8048C1.65329 13.9298 1.82286 14.0001 1.99967 14.0001H13.9997C14.1765 14.0001 14.3461 13.9298 14.4711 13.8048C14.5961 13.6798 14.6663 13.5102 14.6663 13.3334C14.6663 13.1566 14.5961 12.987 14.4711 12.862C14.3461 12.737 14.1765 12.6667 13.9997 12.6667Z" fill="#A6A9CD"/>
                                <path d="M7.9998 1.33325C7.82299 1.33325 7.65342 1.40349 7.52839 1.52851C7.40337 1.65354 7.33313 1.82311 7.33313 1.99992V9.05992L5.1398 6.85992C5.01426 6.73438 4.844 6.66386 4.66646 6.66386C4.48893 6.66386 4.31867 6.73438 4.19313 6.85992C4.0676 6.98546 3.99707 7.15572 3.99707 7.33325C3.99707 7.51079 4.0676 7.68105 4.19313 7.80659L7.52646 11.1399C7.58844 11.2024 7.66217 11.252 7.74341 11.2858C7.82465 11.3197 7.91179 11.3371 7.9998 11.3371C8.08781 11.3371 8.17494 11.3197 8.25618 11.2858C8.33742 11.252 8.41116 11.2024 8.47313 11.1399L11.8065 7.80659C11.8686 7.74443 11.9179 7.67063 11.9516 7.58942C11.9852 7.5082 12.0025 7.42116 12.0025 7.33325C12.0025 7.24535 11.9852 7.1583 11.9516 7.07709C11.9179 6.99587 11.8686 6.92208 11.8065 6.85992C11.7443 6.79776 11.6705 6.74845 11.5893 6.71481C11.5081 6.68117 11.421 6.66386 11.3331 6.66386C11.2452 6.66386 11.1582 6.68117 11.077 6.71481C10.9958 6.74845 10.922 6.79776 10.8598 6.85992L8.66646 9.05992V1.99992C8.66646 1.82311 8.59623 1.65354 8.4712 1.52851C8.34618 1.40349 8.17661 1.33325 7.9998 1.33325Z" fill="#A6A9CD"/>
                              </svg>
                            </div>
                            <span class="p xs color-02 ml-1">999</span>
                          </div>
                          <div class="option ml-3">
                            <div class="icon">
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00033 1.33325V5.66658C8.00033 5.9318 8.10568 6.18616 8.29322 6.37369C8.48075 6.56123 8.73511 6.66658 9.00033 6.66658H13.3337V13.3333C13.3337 13.6869 13.1932 14.026 12.9431 14.2761C12.6931 14.5261 12.3539 14.6666 12.0003 14.6666H4.00033C3.6467 14.6666 3.30756 14.5261 3.05752 14.2761C2.80747 14.026 2.66699 13.6869 2.66699 13.3333V2.66659C2.66699 2.31296 2.80747 1.97382 3.05752 1.72378C3.30756 1.47373 3.6467 1.33325 4.00033 1.33325H8.00033ZM8.00033 11.3333C7.82351 11.3333 7.65394 11.4035 7.52892 11.5285C7.4039 11.6535 7.33366 11.8231 7.33366 11.9999C7.33366 12.1767 7.4039 12.3463 7.52892 12.4713C7.65394 12.5963 7.82351 12.6666 8.00033 12.6666C8.17714 12.6666 8.34671 12.5963 8.47173 12.4713C8.59675 12.3463 8.66699 12.1767 8.66699 11.9999C8.66699 11.8231 8.59675 11.6535 8.47173 11.5285C8.34671 11.4035 8.17714 11.3333 8.00033 11.3333ZM8.00033 7.99992C7.82351 7.99992 7.65394 8.07016 7.52892 8.19518C7.4039 8.3202 7.33366 8.48977 7.33366 8.66658V9.99992C7.33366 10.1767 7.4039 10.3463 7.52892 10.4713C7.65394 10.5963 7.82351 10.6666 8.00033 10.6666C8.17714 10.6666 8.34671 10.5963 8.47173 10.4713C8.59675 10.3463 8.66699 10.1767 8.66699 9.99992V8.66658C8.66699 8.48977 8.59675 8.3202 8.47173 8.19518C8.34671 8.07016 8.17714 7.99992 8.00033 7.99992ZM9.33366 1.36192C9.58624 1.41549 9.81784 1.54125 10.0003 1.72392L12.943 4.66658C13.1257 4.84907 13.2514 5.08067 13.305 5.33325H9.33366V1.36192Z" fill="#A6A9CD"/>
                              </svg>
                            </div>
                            <div class="text">
                              <a href="#" class="p xs color-02 h-color-s ml-1">แจ้งไฟล์เสีย</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="file-size">
                        <p class="xs color-02">12.99GB</p>
                      </div>
                    </td>
                    <td class="button-container">
                      <div class="icon">
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_3741_2007)">
                            <path d="M16.1184 6.32252C15.451 2.97391 12.1954 0.800455 8.84679 1.46786C6.39759 1.95601 4.48253 3.86986 3.99287 6.31875C1.61861 6.59238 -0.084491 8.73885 0.188982 11.1133C0.440745 13.2985 2.29159 14.9472 4.49128 14.9457H7.58239C7.92385 14.9457 8.20064 14.6689 8.20064 14.3274C8.20064 13.9859 7.92385 13.7091 7.58239 13.7091H4.49128C2.78396 13.699 1.4083 12.307 1.41825 10.5998C1.42835 8.89247 2.82044 7.51667 4.52776 7.52677C4.84284 7.52677 5.10757 7.28978 5.14224 6.97651C5.45612 4.26319 7.91029 2.31797 10.6238 2.63185C12.905 2.89567 14.7046 4.69526 14.9684 6.97651C15.0203 7.29536 15.2965 7.52888 15.6194 7.52677C17.3267 7.52677 18.7106 8.91071 18.7106 10.618C18.7106 12.3252 17.3267 13.7091 15.6194 13.7091H12.5283C12.1868 13.7091 11.91 13.9859 11.91 14.3274C11.91 14.6689 12.1868 14.9457 12.5283 14.9457H15.6195C18.0095 14.9307 19.9349 12.9811 19.9202 10.5912C19.9066 8.41472 18.2787 6.58695 16.1184 6.32252Z" fill="#A6A9CD"/>
                            <path d="M12.2405 16.2131L10.6732 17.7809V9.99985C10.6732 9.65838 10.3964 9.38159 10.0551 9.38159C9.71366 9.38159 9.43687 9.65838 9.43687 9.99985V17.7809L7.86961 16.2131C7.63247 15.9674 7.24095 15.9606 6.99537 16.1979C6.74979 16.435 6.743 16.8264 6.98014 17.072C6.98527 17.0773 6.99024 17.0822 6.99537 17.0872L9.61733 19.7098C9.67462 19.7669 9.74246 19.8123 9.81708 19.8434C9.9692 19.9077 10.1409 19.9077 10.2932 19.8434C10.3678 19.8123 10.4356 19.7669 10.4928 19.7098L13.1147 17.0872C13.3603 16.8501 13.3671 16.4587 13.13 16.2131C12.8927 15.9675 12.5013 15.9608 12.2557 16.1979C12.2506 16.2029 12.2455 16.2079 12.2405 16.2131Z" fill="#A6A9CD"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_3741_2007">
                            <rect width="19.76" height="19.76" fill="white" transform="translate(0.160156 0.72998)"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <a href="#" class="p title xxs color-02">ดาวน์โหลด</a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
          <div class="ss-sep-02 size-03 bg-08"></div>
        </div>
        <div class="grid lg-25 sm-50 xs-50">
          <p class="fw-600">การตอบกลับ</p>
        </div>
        <div class="grid lg-75 sm-50 xs-50">
          <p>ปฏิเสธการตอบกลับ</p>
        </div>
        <div class="grid lg-25 sm-50 xs-50">
          <p class="fw-600">เหตุผล</p>
        </div>
        <div class="grid lg-75 sm-50 xs-50">
          <p>
            เนื่องจากเป็นข้อมูลลับภายในหน่วยงาน เป็นข้อมูลที่ไม่อนุญาตให้นำมาเผยแพร่ 
            หรือบอกกล่าวให้บุคคลภายนอกรับทราบได้
          </p>
        </div>
      </div>
    </div>
  </div>
 
  <div class="card-content mt-4">
    <p class="fw-600">ประวัติการแก้ไข</p>
    <div class="scroll-x-wrapper mt-4">
      <table class="table table-01">
        <thead>
          <tr>
            <th style="min-width:12rem;">วันที่</th>
            <th style="min-width:6rem;">การแก้ไข</th>
            <th style="min-width:7rem;">หัวข้อ</th>
            <th style="min-width:10rem;">ผู้แก้ไข</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="op-0">10/02/2567 09:10 น.</td>
            <td class="op-0">หัวข้อคำถาม</td>
            <td class="op-0">การส่งคืนเครื่องราชอิสริยาภรณ์ ให้นำมาส่งคืนที่สำนักเลขาธิการนายกรัฐมนตรี (สลน.) ใช่ไหมคะ</td>
            <td class="op-0">มาลินี เอมศิริ</td>
          </tr>
        </tbody>
      </table>
      <p class="text-center color-07 pb-2">ไม่มีประวัติการแก้ไข</p>
    </div>
  </div>