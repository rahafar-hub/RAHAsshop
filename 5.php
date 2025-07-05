<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <title>ارتباط با من</title>
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
           <li class='hideOnMobile'><a href="6.php">درباره</a></li>
           <li class='hideOnMobile'><a href="5.php">ارتباط با ما</a></li>
           <li class='hideOnMobile'><a href="4.php">نوشیدنی</a></li>
           <li class='hideOnMobile'><a href="3.php">غذا</a></li>
           <li class='hideOnMobile'><a href="2.php">ورود</a></li>
           <li class='hideOnMobile'><a href="2.php">ساخت حساب  کاربری</a></li>
           <li  class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="black"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
       </ul>
</header>
    <section id="last" style="top: 200px;">
        <!-- heading -->
        <div class="full">
            <h3>با ما در ارتباط باشید</h3>

            <div class="lt">

                <!-- form starting  -->
                <form class="form-horizontal" method="post" 
                      action="#">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- name  -->
                            <input type="text" class="form-control" 
                                   id="name" placeholder="نام!" 
                                   name="name" value="" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <!-- email  -->
                            <input type="email" class="form-control" 
                                   id="email" placeholder="ایمیل" 
                                   name="email"
                                value="" />
                        </div>
                    </div>
                           <textarea class="form-control" rows="10" 
                              placeholder="MESSAGE" name="نظرات خود را وارد کنید">
            </textarea>

                    <button class="btn btn-primary send-button" 
                            id="submit" type="submit" value="SEND">
                        <i class="fa fa-paper-plane"></i>
                        <span class="send-text">ارسال</span>
                    </button>
                </form>
                <!-- end of form -->
            </div>

            <!-- Contact information -->
            <div class="rt">
                <ul class="contact-list">
                    <li class="list-item">
                        <i class="fa fa-map-marker fa-1x">
                            <span class="contact-text place">
                                تهران ،شهرستان ملارد،شانزده متری بهاره غربی 
                            </span>
                        </i>
                    </li>

                    <li class="list-item">
                        <i class="fa fa-envelope fa-1x">
                            <span class="contact-text gmail">
                                <a href="mailto:yourmail@gmail.com" 
                                   title="Send me an email">
                                    rahaaabg@gmail.com</a>
                            </span>
                        </i>
                    </li>

                    <li class="list-item">
                        <i class="fa fa-phone fa-1x">
                            <span class="contact-text phone">
                                09024329341
                            </span>
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
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




   
    <script src="js scripts/custom.js"></script>
</body>
</html>