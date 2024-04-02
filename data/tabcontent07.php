<?php
  $breadcrumb = [
    [ 'url' => '#', 'display' => 'รายการถามตอบ (Q&A)' ],
    [ 'url' => '#', 'display' => 'การส่งคืนเครื่องราชอิสริยาภรณ์ ให้นำมาส่งคืนที่สำนักเลขาธิการนายกรัฐมนตรี (สลน.) ใช่ไหมคะ' ],
    [ 'url' => '#', 'display' => 'แก้ไข' ],
  ];
  include('components/breadcrumb-03.php');
?>

<div class="btns mt-3">
  <a href="#" class="btn-action btn btn-01 btn-black-theme">
    <span class="p">กลับ</span>
  </a>
</div>

<div class="card-content mt-4">
  <form class="form">
    <div class="grids">
      <div class="grid sm-100 mt-0">
        <div class="form-group mt-0">
          <label class="h6 fw-400">หัวข้อคำถาม <span class="text-danger">*</span></label>
          <input type="text" id="fname" name="fname" value="สลน. คือใคร" required="">
        </div>
      </div>
      <div class="grid sm-100 mt-2">
        <div class="form-group">
          <label class="h6 fw-400">รายละเอียด <span class="text-danger">*</span></label>
          <textarea name="message" rows="6" required="" title="General Textarea" placeholder="กรอกรายละเอียด"></textarea>
        </div>
      </div>
      <div class="grid lg-50 sm-100 mt-2">
        <label class="h6 fw-400">หมวดหมู่</label>
        <div class="form-group mt-1">
          <select class="ui dropdown">
            <option value="0">หมวดหมู่ 1</option>
            <option value="1">หมวดหมู่ 2</option>
            <option value="2">หมวดหมู่ 3</option>
            <option value="3">หมวดหมู่ 4</option>
          </select>
          <div class="dropdown-icon">
            <em class="fa-solid fa-chevron-down"></em>
          </div>
        </div>
      </div>
      <div class="grid lg-50 sm-100 mt-2">
      <label class="h6 fw-400">แนบไฟล์</label>
        <div class="form-group mt-1">
          <div class="custom-file-input">
            <input type="file">
            <input type="text" placeholder="เลือกไฟล์">
            <div class="btns">
              <div class="btn-action btn upload-file btn-01">
                <span class="color-white-theme">อัปโหลดไฟล์</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="grid lg-50 sm-100 mt-3"></div>
      <div class="grid lg-50 sm-100 mt-3">
        <div class="file-lists">
          <div class="noti-header">
            <div class="wrapper">
              <div class="icon">
                <svg class="svg-path-white-theme" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_3599_161319)">
                    <g clip-path="url(#clip1_3599_161319)">
                      <path d="M8.5 7.33398C8.5 7.05785 8.27613 6.83398 8 6.83398C7.72387 6.83398 7.5 7.05785 7.5 7.33398V11.334C7.5 11.6101 7.72387 11.834 8 11.834C8.27613 11.834 8.5 11.6101 8.5 11.334V7.33398Z" fill="black"/>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00065 0.833984C4.04261 0.833984 0.833984 4.04261 0.833984 8.00065C0.833984 11.9587 4.04261 15.1673 8.00065 15.1673C11.9587 15.1673 15.1673 11.9587 15.1673 8.00065C15.1673 4.04261 11.9587 0.833984 8.00065 0.833984ZM1.83398 8.00065C1.83398 4.5949 4.5949 1.83398 8.00065 1.83398C11.4064 1.83398 14.1673 4.5949 14.1673 8.00065C14.1673 11.4064 11.4064 14.1673 8.00065 14.1673C4.5949 14.1673 1.83398 11.4064 1.83398 8.00065Z" fill="black"/>
                      <path d="M8.66732 5.33464C8.66732 5.70282 8.36885 6.0013 8.00065 6.0013C7.63245 6.0013 7.33398 5.70282 7.33398 5.33464C7.33398 4.96645 7.63245 4.66797 8.00065 4.66797C8.36885 4.66797 8.66732 4.96645 8.66732 5.33464Z" fill="black"/>
                    </g>
                  </g>
                  <defs>
                    <clipPath id="clip0_3599_161319">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                    <clipPath id="clip1_3599_161319">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                  </defs>
                </svg>
              </div>
              <p class="sm fw-400 ml-1">อัปโหลดสูงสุด 5 ไฟล์ ขนาดไม่เกิน 64 MB</p>
            </div>
          </div>
          <?php
            $fileLists = [
              ['icon' => 'public/assets/app/img/file/pdf.svg', 'title' => 'pdf-file-01.pdf'], 
              ['icon' => 'public/assets/app/img/file/zip.svg', 'title' => 'pdf-file-01.zip'], 
              ['icon' => 'public/assets/app/img/file/pdf.svg', 'title' => 'pdf-file-01.xls'],
            ];
          ?>
          <?php foreach($fileLists as $d) {?>
            <div class="file-item mt-3">
              <div class="wrapper">
                <div class="text-container">
                  <div class="file-icon">
                    <img src="<?= $d['icon'] ?>" alt="Image File" />
                  </div>
                  <div class="title color-black-theme"><?= $d['title'] ?></div>
                </div>
                <div class="tools">
                  <div class="tool-icon c-pointer">
                    <svg class="svg-path-black-theme" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M3.84797 15.8394C3.88599 16.2601 4.08042 16.6513 4.39287 16.9356C4.70531 17.2199 5.11303 17.3767 5.53547 17.375H12.4711C12.8935 17.3767 13.3013 17.2199 13.6137 16.9356C13.9261 16.6513 14.1206 16.2601 14.1586 15.8394L15.0361 6.125H2.96484L3.84797 15.8394ZM11.1605 8.33C11.172 8.18169 11.2418 8.04397 11.3546 7.94698C11.4674 7.85 11.614 7.80164 11.7623 7.8125C11.8363 7.81818 11.9084 7.83843 11.9745 7.87208C12.0406 7.90573 12.0994 7.95212 12.1475 8.00859C12.1956 8.06505 12.232 8.13047 12.2548 8.20107C12.2775 8.27168 12.286 8.34608 12.2798 8.42L11.813 14.045C11.8016 14.1863 11.7374 14.318 11.6331 14.414C11.5288 14.5099 11.3922 14.563 11.2505 14.5625H11.2055C11.1315 14.5568 11.0594 14.5366 10.9933 14.5029C10.9272 14.4693 10.8684 14.4229 10.8203 14.3664C10.7722 14.31 10.7358 14.2445 10.7131 14.1739C10.6903 14.1033 10.6818 14.0289 10.688 13.955L11.1605 8.33ZM8.43797 8.375C8.43797 8.22582 8.49723 8.08274 8.60272 7.97725C8.70821 7.87176 8.85128 7.8125 9.00047 7.8125C9.14965 7.8125 9.29273 7.87176 9.39822 7.97725C9.50371 8.08274 9.56297 8.22582 9.56297 8.375V14C9.56297 14.1492 9.50371 14.2923 9.39822 14.3977C9.29273 14.5032 9.14965 14.5625 9.00047 14.5625C8.85128 14.5625 8.70821 14.5032 8.60272 14.3977C8.49723 14.2923 8.43797 14.1492 8.43797 14V8.375ZM6.23859 7.8125C6.31251 7.80635 6.38691 7.81488 6.45752 7.83759C6.52813 7.86031 6.59354 7.89676 6.65001 7.94486C6.70647 7.99296 6.75286 8.05175 6.78651 8.11785C6.82017 8.18395 6.84042 8.25605 6.84609 8.33L7.31297 13.955C7.31912 14.0289 7.31059 14.1033 7.28788 14.1739C7.26516 14.2445 7.2287 14.31 7.18061 14.3664C7.13251 14.4229 7.07372 14.4693 7.00762 14.5029C6.94152 14.5366 6.86942 14.5568 6.79547 14.5625H6.75047C6.60876 14.563 6.47211 14.5099 6.36782 14.414C6.26354 14.318 6.1993 14.1863 6.18797 14.045L5.72109 8.42C5.71494 8.34608 5.72347 8.27168 5.74619 8.20107C5.7689 8.13047 5.80536 8.06505 5.85346 8.00859C5.90155 7.95212 5.96034 7.90573 6.02644 7.87208C6.09254 7.83843 6.16464 7.81818 6.23859 7.8125Z" fill="#FF2B2B"/>
                      <path d="M15.75 3.875H12.375V3.3125C12.375 2.86495 12.1972 2.43572 11.8807 2.11926C11.5643 1.80279 11.1351 1.625 10.6875 1.625H7.3125C6.86495 1.625 6.43572 1.80279 6.11926 2.11926C5.80279 2.43572 5.625 2.86495 5.625 3.3125V3.875H2.25C2.10082 3.875 1.95774 3.93426 1.85225 4.03975C1.74676 4.14524 1.6875 4.28832 1.6875 4.4375C1.6875 4.58668 1.74676 4.72976 1.85225 4.83525C1.95774 4.94074 2.10082 5 2.25 5H15.75C15.8992 5 16.0423 4.94074 16.1477 4.83525C16.2532 4.72976 16.3125 4.58668 16.3125 4.4375C16.3125 4.28832 16.2532 4.14524 16.1477 4.03975C16.0423 3.93426 15.8992 3.875 15.75 3.875ZM11.25 3.875H6.75V3.3125C6.75 3.16332 6.80926 3.02024 6.91475 2.91475C7.02024 2.80926 7.16332 2.75 7.3125 2.75H10.6875C10.8367 2.75 10.9798 2.80926 11.0852 2.91475C11.1907 3.02024 11.25 3.16332 11.25 3.3125V3.875Z" fill="#FF2B2B"/>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="grid sm-100">
        <div class="btns jc-end sm-jc-center">
          <button class="btn-action btn btn-01" type="submit">
            <div class="icon-wrapper">
              <div class="icon">
                <svg class="svg-path-black-theme" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2619 1.92419C13.3039 1.64769 13.1861 1.37061 12.958 1.20786C12.7299 1.04569 12.4295 1.02528 12.1816 1.15536C10.1976 2.19719 3.25772 5.84069 1.12622 6.95953C0.863133 7.09719 0.707966 7.37836 0.730716 7.67411C0.753466 7.96986 0.949466 8.22419 1.23063 8.32044C2.06072 8.60453 3.07513 8.95278 4.66588 9.49819L11.0826 3.50094L5.88972 9.91761C7.58605 10.4992 10.2385 11.4086 10.9041 11.6367C11.1123 11.7084 11.3421 11.6834 11.5306 11.5696C11.719 11.4553 11.8467 11.2634 11.88 11.0452L13.2619 1.92419Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.15039 10.2812V12.1888C5.15039 12.4816 5.32247 12.747 5.58906 12.8666C5.85622 12.9868 6.16831 12.9389 6.38706 12.7441L8.04256 11.2729L5.15039 10.2812Z" fill="white"/>
                </svg>
              </div>
              <span class="p">บันทึก</span>
            </div>
          </button>
        </div>
      </div>
    </div>
  </form>
</div>