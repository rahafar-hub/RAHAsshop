<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
    <title>غذا و خوراکی</title>
</head>
<body>
<header>
       
       <ul class="sidebar">
           <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="black"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
           <li><a href="6.php">درباره</a></li>
           <li><a href="5.php">ارتباط با ما</a></li>
           <li><a href="4.php">نوشیدنی</a></li>
           <li><a href="3.php">غذا</a></li>
           <li><a href="2.php">ورود</a></li>
           <li><a href="2.php">ساخت حساب  کاربری</a></li>
       </ul>
       <ul>
           <li> <a href="1.php" class="logo">فروشگاه  </a></li>
            <li>   <div id="cart-icon">
                   <i class="ri-shopping-bag-line"></i>
                    <span class="cart-item-count"></span>
               </div></li>                
           <li class='hideOnMobile'><a href="6.php">درباره</a></li>
           <li class='hideOnMobile'><a href="5.php">ارتباط با ما</a></li>
           <li class='hideOnMobile'><a href="4.php">نوشیدنی</a></li>
           <li class='hideOnMobile'><a href="3.php">غذا</a></li>
           <li class='hideOnMobile'><a href="2.php">ورود</a></li>
           <li class='hideOnMobile'><a href="2.php">ساخت حساب  کاربری</a></li>
           <li  class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
       </ul>
</header>
  <div class="cart">
      <h2 class="cart-title">
         سبد خرید شما
      </h2>
      <div class="cart-content">
          <!-- <div class="cart-box">
            
              
          </div> -->
      </div>
      <div class="total">
          <div class="total-title">مجموع</div>
          <div class="total-price">0$</div>
      </div>
      <button class="btn-buy">خرید کنید</button>
      <i class="ri-close-line" id="cart-close"></i>
      
    </div>
    <div class="searchbox" id="searchBar">
        <div class="search-box-input">
            <input type="text" placeholder=" "/><span></span>
          </div>
        <div class="imgquestion">
            <img src="pics/3.png" alt=""style="width:500px;height:400px;">
        </div>  
    </div>
  
      <div class="product-content"></div>
    <section class="footer">
        <div class="footer-row">
        <div class="footer-col">
            <h4>اطلاعات</h4>
            <ul class="links">
              <li><a href="5.php">با ما در ارتباط باشید</a></li>
              <li><a href="#">نظرات و انتقادات</a></li>
              <li><a href="#">مشتریان</a></li>
              <li><a href="#">سرویس ها</a></li>
              <li><a href="3.php">منو</a></li>
            </ul>
          </div>
  
           
          <div class="footer-col">
            <h4>نامه </h4>
            <p>
              برای ثبت سفارشات با ما در ارتباط باشید.
            </p>
            <form action="#" method="post">
              <input type="text" placeholder="ایمیل شما" required>
              <button type="submit">ثبت</button>
            </form>
          </div>
        </div>
      </section>

    
    <script src="js scripts/custom.js "></script>
    <script src="js scripts/searchengine.js"></script>
</body>
</html>