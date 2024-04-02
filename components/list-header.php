<?php if(!empty($listHeader)){?>
  <div class="list-header <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
    <?php if(in_array('search', $listHeader) || in_array('category', $listHeader) || in_array('order', $listHeader)){?>
      <div class="options">
        <?php if(in_array('search', $listHeader)){?>
          <div class="option search">
            <form class="w-full">
              <input type="text" name="search" placeholder="ค้นหา">
              <button type="submit" class="dropdown-icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58974 1.26316C4.07778 1.26316 1.23077 4.1851 1.23077 7.78949C1.23077 11.3939 4.07778 14.3158 7.58974 14.3158C11.1017 14.3158 13.9487 11.3939 13.9487 7.78949C13.9487 4.1851 11.1017 1.26316 7.58974 1.26316ZM0 7.78949C0 3.48747 3.39804 0 7.58974 0C11.7814 0 15.1795 3.48747 15.1795 7.78949C15.1795 9.6056 14.5739 11.2766 13.5587 12.6012L15.8198 14.9218C16.0601 15.1685 16.0601 15.5684 15.8198 15.815C15.5794 16.0617 15.1898 16.0617 14.9495 15.815L12.7216 13.5285C11.3705 14.8018 9.56857 15.579 7.58974 15.579C3.39804 15.579 0 12.0915 0 7.78949Z" fill="white"/>
                </svg>
              </button>
            </form>
          </div>
        <?php }?>
        <?php if(in_array('date-02', $listHeader)){?>
          <div class="option date">
            <div class="date-wrapper w-full">
              <input type="text" id="#datepicker" class="date-picker form-control datepicker-input" placeholder="เริ่ม - สิ้นสุดวันที่">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
                <span class="count"></span>
              </span>
              <div class="dropdown-icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4332_60564)">
                    <path d="M14.1666 16H1.83337C0.822021 16 0 15.178 0 14.1666V3.16663C0 2.15527 0.822021 1.33337 1.83337 1.33337H14.1666C15.178 1.33337 16 2.15527 16 3.16663V14.1666C16 15.178 15.178 16 14.1666 16ZM1.83337 2.33337C1.37402 2.33337 1 2.70728 1 3.16663V14.1666C1 14.626 1.37402 15 1.83337 15H14.1666C14.626 15 15 14.626 15 14.1666V3.16663C15 2.70728 14.626 2.33337 14.1666 2.33337H1.83337Z" fill="white"></path>
                    <path d="M15.5 6.33337H0.5C0.223999 6.33337 0 6.10938 0 5.83337C0 5.55737 0.223999 5.33337 0.5 5.33337H15.5C15.776 5.33337 16 5.55737 16 5.83337C16 6.10938 15.776 6.33337 15.5 6.33337Z" fill="white"></path>
                    <path d="M3.83398 4C3.55798 4 3.33398 3.776 3.33398 3.5V0.5C3.33398 0.223999 3.55798 0 3.83398 0C4.10999 0 4.33398 0.223999 4.33398 0.5V3.5C4.33398 3.776 4.10999 4 3.83398 4Z" fill="white"></path>
                    <path d="M12.166 4C11.89 4 11.666 3.776 11.666 3.5V0.5C11.666 0.223999 11.89 0 12.166 0C12.442 0 12.666 0.223999 12.666 0.5V3.5C12.666 3.776 12.442 4 12.166 4Z" fill="white"></path>
                    <path d="M3.625 7.1875H2.375V8.4375H3.625V7.1875Z" fill="white"></path>
                    <path d="M6.125 7.1875H4.875V8.4375H6.125V7.1875Z" fill="white"></path>
                    <path d="M8.625 7.1875H7.375V8.4375H8.625V7.1875Z" fill="white"></path>
                    <path d="M11.125 7.1875H9.875V8.4375H11.125V7.1875Z" fill="white"></path>
                    <path d="M13.625 7.1875H12.375V8.4375H13.625V7.1875Z" fill="white"></path>
                    <path d="M3.625 9.6875H2.375V10.9375H3.625V9.6875Z" fill="white"></path>
                    <path d="M6.125 9.6875H4.875V10.9375H6.125V9.6875Z" fill="white"></path>
                    <path d="M8.625 9.6875H7.375V10.9375H8.625V9.6875Z" fill="white"></path>
                    <path d="M11.125 9.6875H9.875V10.9375H11.125V9.6875Z" fill="white"></path>
                    <path d="M3.625 12.1875H2.375V13.4375H3.625V12.1875Z" fill="white"></path>
                    <path d="M6.125 12.1875H4.875V13.4375H6.125V12.1875Z" fill="white"></path>
                    <path d="M8.625 12.1875H7.375V13.4375H8.625V12.1875Z" fill="white"></path>
                    <path d="M11.125 12.1875H9.875V13.4375H11.125V12.1875Z" fill="white"></path>
                    <path d="M13.625 9.6875H12.375V10.9375H13.625V9.6875Z" fill="white"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_4332_60564">
                      <rect width="16" height="16" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('category', $listHeader)){?>
          <div class="option cate">
            <select class="ui dropdown">
              <option value="0">เลือกหมวดหมู่</option>
              <option value="1">ข่าวประชาสัมพันธ์ 1</option>
              <option value="2">ข่าวประชาสัมพันธ์ 2</option>
              <option value="3">ข่าวประชาสัมพันธ์ 3</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('sub-category', $listHeader)){?>
          <div class="option sub-cate">
            <select class="ui dropdown">
              <option value="0">เลือกหมวดหมู่</option>
              <option value="1">ข่าวประชาสัมพันธ์ 1</option>
              <option value="2">ข่าวประชาสัมพันธ์ 2</option>
              <option value="3">ข่าวประชาสัมพันธ์ 3</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('order', $listHeader)){?>
          <div class="option order">
            <select class="ui dropdown">
              <option value="1">ทั้งหมด</option>
              <option value="2">ใหม่ล่าสุด</option>
              <option value="3">เก่าที่สุด</option>
              <option value="4">จำนวนเข้าชม</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view-grid', $listHeader)){?>
          <div class="option view">
            <div class="wrapper">
              <a class="icon-view active" href="#">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12.5002 6.07413C13.0457 6.07413 13.4878 5.63193 13.4878 5.08647C13.4878 4.54101 13.0457 4.09882 12.5002 4.09882C11.9547 4.09882 11.5125 4.54101 11.5125 5.08647C11.5125 5.63193 11.9547 6.07413 12.5002 6.07413Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9199 5.08647C10.9199 4.21374 11.6274 3.50623 12.5002 3.50623C13.3729 3.50623 14.0804 4.21374 14.0804 5.08647C14.0804 5.95921 13.3729 6.66672 12.5002 6.66672C11.6274 6.66672 10.9199 5.95921 10.9199 5.08647ZM12.5002 4.69141C12.282 4.69141 12.1051 4.86828 12.1051 5.08647C12.1051 5.30466 12.282 5.48153 12.5002 5.48153C12.7184 5.48153 12.8952 5.30466 12.8952 5.08647C12.8952 4.86828 12.7184 4.69141 12.5002 4.69141Z" fill="white"/>
                  <path d="M12.5002 12.9877C13.0457 12.9877 13.4878 12.5455 13.4878 12.0001C13.4878 11.4546 13.0457 11.0124 12.5002 11.0124C11.9547 11.0124 11.5125 11.4546 11.5125 12.0001C11.5125 12.5455 11.9547 12.9877 12.5002 12.9877Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9199 12.0001C10.9199 11.1273 11.6274 10.4198 12.5002 10.4198C13.3729 10.4198 14.0804 11.1273 14.0804 12.0001C14.0804 12.8728 13.3729 13.5803 12.5002 13.5803C11.6274 13.5803 10.9199 12.8728 10.9199 12.0001ZM12.5002 11.605C12.282 11.605 12.1051 11.7819 12.1051 12.0001C12.1051 12.2183 12.282 12.3951 12.5002 12.3951C12.7184 12.3951 12.8952 12.2183 12.8952 12.0001C12.8952 11.7819 12.7184 11.605 12.5002 11.605Z" fill="white"/>
                  <path d="M12.5002 19.9013C13.0457 19.9013 13.4878 19.4591 13.4878 18.9136C13.4878 18.3681 13.0457 17.926 12.5002 17.926C11.9547 17.926 11.5125 18.3681 11.5125 18.9136C11.5125 19.4591 11.9547 19.9013 12.5002 19.9013Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9199 18.9136C10.9199 18.0409 11.6274 17.3334 12.5002 17.3334C13.3729 17.3334 14.0804 18.0409 14.0804 18.9136C14.0804 19.7864 13.3729 20.4939 12.5002 20.4939C11.6274 20.4939 10.9199 19.7864 10.9199 18.9136ZM12.5002 18.5186C12.282 18.5186 12.1051 18.6954 12.1051 18.9136C12.1051 19.1318 12.282 19.3087 12.5002 19.3087C12.7184 19.3087 12.8952 19.1318 12.8952 18.9136C12.8952 18.6954 12.7184 18.5186 12.5002 18.5186Z" fill="white"/>
                  <path d="M19.4138 6.07413C19.9592 6.07413 20.4014 5.63193 20.4014 5.08647C20.4014 4.54101 19.9592 4.09882 19.4138 4.09882C18.8683 4.09882 18.4261 4.54101 18.4261 5.08647C18.4261 5.63193 18.8683 6.07413 19.4138 6.07413Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8335 5.08647C17.8335 4.21374 18.541 3.50623 19.4138 3.50623C20.2865 3.50623 20.994 4.21374 20.994 5.08647C20.994 5.95921 20.2865 6.66672 19.4138 6.66672C18.541 6.66672 17.8335 5.95921 17.8335 5.08647ZM19.4138 4.69141C19.1956 4.69141 19.0187 4.86828 19.0187 5.08647C19.0187 5.30466 19.1956 5.48153 19.4138 5.48153C19.6319 5.48153 19.8088 5.30466 19.8088 5.08647C19.8088 4.86828 19.6319 4.69141 19.4138 4.69141Z" fill="white"/>
                  <path d="M19.4138 12.9877C19.9592 12.9877 20.4014 12.5455 20.4014 12.0001C20.4014 11.4546 19.9592 11.0124 19.4138 11.0124C18.8683 11.0124 18.4261 11.4546 18.4261 12.0001C18.4261 12.5455 18.8683 12.9877 19.4138 12.9877Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8335 12.0001C17.8335 11.1273 18.541 10.4198 19.4138 10.4198C20.2865 10.4198 20.994 11.1273 20.994 12.0001C20.994 12.8728 20.2865 13.5803 19.4138 13.5803C18.541 13.5803 17.8335 12.8728 17.8335 12.0001ZM19.4138 11.605C19.1956 11.605 19.0187 11.7819 19.0187 12.0001C19.0187 12.2183 19.1956 12.3951 19.4138 12.3951C19.632 12.3951 19.8088 12.2183 19.8088 12.0001C19.8088 11.7819 19.632 11.605 19.4138 11.605Z" fill="white"/>
                  <path d="M19.4138 19.9013C19.9592 19.9013 20.4014 19.4591 20.4014 18.9136C20.4014 18.3681 19.9592 17.926 19.4138 17.926C18.8683 17.926 18.4261 18.3681 18.4261 18.9136C18.4261 19.4591 18.8683 19.9013 19.4138 19.9013Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8335 18.9136C17.8335 18.0409 18.541 17.3334 19.4138 17.3334C20.2865 17.3334 20.994 18.0409 20.994 18.9136C20.994 19.7864 20.2865 20.4939 19.4138 20.4939C18.541 20.4939 17.8335 19.7864 17.8335 18.9136ZM19.4138 18.5186C19.1956 18.5186 19.0187 18.6954 19.0187 18.9136C19.0187 19.1318 19.1956 19.3087 19.4138 19.3087C19.632 19.3087 19.8088 19.1318 19.8088 18.9136C19.8088 18.6954 19.632 18.5186 19.4138 18.5186Z" fill="white"/>
                  <path d="M5.58659 6.07413C6.13206 6.07413 6.57425 5.63193 6.57425 5.08647C6.57425 4.54101 6.13206 4.09882 5.58659 4.09882C5.04113 4.09882 4.59894 4.54101 4.59894 5.08647C4.59894 5.63193 5.04113 6.07413 5.58659 6.07413Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00635 5.08647C4.00635 4.21373 4.71385 3.50623 5.58659 3.50623C6.45934 3.50623 7.16684 4.21373 7.16684 5.08647C7.16684 5.95921 6.45934 6.66672 5.58659 6.66672C4.71385 6.66672 4.00635 5.95921 4.00635 5.08647ZM5.58659 4.69141C5.36841 4.69141 5.19153 4.86829 5.19153 5.08647C5.19153 5.30465 5.36841 5.48153 5.58659 5.48153C5.80478 5.48153 5.98166 5.30465 5.98166 5.08647C5.98166 4.86829 5.80478 4.69141 5.58659 4.69141Z" fill="white"/>
                  <path d="M5.58659 12.9877C6.13206 12.9877 6.57425 12.5455 6.57425 12.0001C6.57425 11.4546 6.13206 11.0124 5.58659 11.0124C5.04113 11.0124 4.59894 11.4546 4.59894 12.0001C4.59894 12.5455 5.04113 12.9877 5.58659 12.9877Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00635 12.0001C4.00635 11.1273 4.71386 10.4198 5.58659 10.4198C6.45933 10.4198 7.16684 11.1273 7.16684 12.0001C7.16684 12.8728 6.45933 13.5803 5.58659 13.5803C4.71386 13.5803 4.00635 12.8728 4.00635 12.0001ZM5.58659 11.605C5.3684 11.605 5.19153 11.7819 5.19153 12.0001C5.19153 12.2182 5.3684 12.3951 5.58659 12.3951C5.80478 12.3951 5.98166 12.2182 5.98166 12.0001C5.98166 11.7819 5.80478 11.605 5.58659 11.605Z" fill="white"/>
                  <path d="M5.58659 19.9013C6.13206 19.9013 6.57425 19.4591 6.57425 18.9136C6.57425 18.3681 6.13206 17.926 5.58659 17.926C5.04113 17.926 4.59894 18.3681 4.59894 18.9136C4.59894 19.4591 5.04113 19.9013 5.58659 19.9013Z" fill="white"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.00635 18.9136C4.00635 18.0409 4.71386 17.3334 5.58659 17.3334C6.45933 17.3334 7.16684 18.0409 7.16684 18.9136C7.16684 19.7864 6.45933 20.4939 5.58659 20.4939C4.71386 20.4939 4.00635 19.7864 4.00635 18.9136ZM5.58659 18.5186C5.3684 18.5186 5.19153 18.6954 5.19153 18.9136C5.19153 19.1318 5.3684 19.3087 5.58659 19.3087C5.80478 19.3087 5.98166 19.1318 5.98166 18.9136C5.98166 18.6954 5.80478 18.5186 5.58659 18.5186Z" fill="white"/>
                </svg>
              </a>
              <a class="icon-view ml-1" href="#">
                <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4149_13671)">
                    <path d="M21.4028 18.9885H6.6915C6.08518 18.9885 5.59375 18.4971 5.59375 17.8908C5.59375 17.2844 6.08518 16.793 6.6915 16.793H21.4024C22.0088 16.793 22.5002 17.2844 22.5002 17.8908C22.5002 18.4971 22.0091 18.9885 21.4028 18.9885Z" fill="#0A112B"/>
                    <path d="M21.4028 12.0979H6.6915C6.08518 12.0979 5.59375 11.6065 5.59375 11.0002C5.59375 10.3939 6.08518 9.90244 6.6915 9.90244H21.4024C22.0088 9.90244 22.5002 10.3939 22.5002 11.0002C22.5006 11.6065 22.0091 12.0979 21.4028 12.0979Z" fill="#0A112B"/>
                    <path d="M21.4028 5.20736H6.6915C6.08518 5.20736 5.59375 4.71593 5.59375 4.10961C5.59375 3.50328 6.08518 3.01186 6.6915 3.01186H21.4024C22.0088 3.01186 22.5002 3.50328 22.5002 4.10961C22.5002 4.71593 22.0091 5.20736 21.4028 5.20736Z" fill="#0A112B"/>
                    <path d="M1.97428 5.66878C2.7885 5.66878 3.44856 5.00872 3.44856 4.1945C3.44856 3.38028 2.7885 2.72022 1.97428 2.72022C1.16006 2.72022 0.5 3.38028 0.5 4.1945C0.5 5.00872 1.16006 5.66878 1.97428 5.66878Z" fill="#0A112B"/>
                    <path d="M1.97428 12.4745C2.7885 12.4745 3.44856 11.8144 3.44856 11.0002C3.44856 10.186 2.7885 9.5259 1.97428 9.5259C1.16006 9.5259 0.5 10.186 0.5 11.0002C0.5 11.8144 1.16006 12.4745 1.97428 12.4745Z" fill="#0A112B"/>
                    <path d="M1.97428 19.2801C2.7885 19.2801 3.44856 18.6201 3.44856 17.8059C3.44856 16.9916 2.7885 16.3316 1.97428 16.3316C1.16006 16.3316 0.5 16.9916 0.5 17.8059C0.5 18.6201 1.16006 19.2801 1.97428 19.2801Z" fill="#0A112B"/>
                  </g>
                  <defs>
                    <clipPath id="clip0_4149_13671">
                      <rect width="22" height="22" fill="white" transform="translate(0.5)"/>
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view-list', $listHeader)){?>
          <div class="option view">
            <div class="wrapper">
              <a class="icon-view" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
              </a>
              <a class="icon-view ml-1" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
              </a>
              <?php if(in_array('rss', $listHeader)){?>
                <a class="icon-view ml-1" href="#">
                  <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                  <img class="icon-active" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                </a>
              <?php }?>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('date', $listHeader)){?>
          <div class="option date">
            <div class="date-wrapper w-full">
              <input type="text" id="#datepicker" class="date-picker form-control datepicker-input" placeholder="เริ่ม - สิ้นสุดวันที่">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-calendar"></i>
                <span class="count"></span>
              </span>
              <div class="dropdown-icon">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_4332_60564)">
                    <path d="M14.1666 16H1.83337C0.822021 16 0 15.178 0 14.1666V3.16663C0 2.15527 0.822021 1.33337 1.83337 1.33337H14.1666C15.178 1.33337 16 2.15527 16 3.16663V14.1666C16 15.178 15.178 16 14.1666 16ZM1.83337 2.33337C1.37402 2.33337 1 2.70728 1 3.16663V14.1666C1 14.626 1.37402 15 1.83337 15H14.1666C14.626 15 15 14.626 15 14.1666V3.16663C15 2.70728 14.626 2.33337 14.1666 2.33337H1.83337Z" fill="white"></path>
                    <path d="M15.5 6.33337H0.5C0.223999 6.33337 0 6.10938 0 5.83337C0 5.55737 0.223999 5.33337 0.5 5.33337H15.5C15.776 5.33337 16 5.55737 16 5.83337C16 6.10938 15.776 6.33337 15.5 6.33337Z" fill="white"></path>
                    <path d="M3.83398 4C3.55798 4 3.33398 3.776 3.33398 3.5V0.5C3.33398 0.223999 3.55798 0 3.83398 0C4.10999 0 4.33398 0.223999 4.33398 0.5V3.5C4.33398 3.776 4.10999 4 3.83398 4Z" fill="white"></path>
                    <path d="M12.166 4C11.89 4 11.666 3.776 11.666 3.5V0.5C11.666 0.223999 11.89 0 12.166 0C12.442 0 12.666 0.223999 12.666 0.5V3.5C12.666 3.776 12.442 4 12.166 4Z" fill="white"></path>
                    <path d="M3.625 7.1875H2.375V8.4375H3.625V7.1875Z" fill="white"></path>
                    <path d="M6.125 7.1875H4.875V8.4375H6.125V7.1875Z" fill="white"></path>
                    <path d="M8.625 7.1875H7.375V8.4375H8.625V7.1875Z" fill="white"></path>
                    <path d="M11.125 7.1875H9.875V8.4375H11.125V7.1875Z" fill="white"></path>
                    <path d="M13.625 7.1875H12.375V8.4375H13.625V7.1875Z" fill="white"></path>
                    <path d="M3.625 9.6875H2.375V10.9375H3.625V9.6875Z" fill="white"></path>
                    <path d="M6.125 9.6875H4.875V10.9375H6.125V9.6875Z" fill="white"></path>
                    <path d="M8.625 9.6875H7.375V10.9375H8.625V9.6875Z" fill="white"></path>
                    <path d="M11.125 9.6875H9.875V10.9375H11.125V9.6875Z" fill="white"></path>
                    <path d="M3.625 12.1875H2.375V13.4375H3.625V12.1875Z" fill="white"></path>
                    <path d="M6.125 12.1875H4.875V13.4375H6.125V12.1875Z" fill="white"></path>
                    <path d="M8.625 12.1875H7.375V13.4375H8.625V12.1875Z" fill="white"></path>
                    <path d="M11.125 12.1875H9.875V13.4375H11.125V12.1875Z" fill="white"></path>
                    <path d="M13.625 9.6875H12.375V10.9375H13.625V9.6875Z" fill="white"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0_4332_60564">
                      <rect width="16" height="16" fill="white"></rect>
                    </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('collapse', $listHeader)){?>
          <div class="option view">
            <div class="wrapper">
              <a class="icon-view collapse btn-collapse-all active" href="javascript:void(0)">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 12.5H6M12 22.5V16.5M12 16.5L15 19.5M12 16.5L9 19.5M12 2.5V8.5M12 8.5L15 5.5M12 8.5L9 5.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
              <a class="icon-view expand btn-expand-all ml-1" href="#">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M18 12.5H6M12 16.5V22.5M12 22.5L15 19.5M12 22.5L9 19.5M12 8.5V2.5M12 2.5L15 5.5M12 2.5L9 5.5" stroke="#white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view-calendar', $listHeader)){?>
          <div class="option calendar">
            <select class="ui dropdown">
              <option value="0">การแสดงผล</option>
              <option value="1">รายวัน</option>
              <option value="2">รายเดือน</option>
              <option value="3">รายปี</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
      </div>
    <?php }?>
  </div>
<?php }?>


