<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>ورود</title>
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
    <div class="wrapper">
        <div class="form-wrapper sign-in">
         <form action="" method="post">
            <h2>
                ورود
            </h2>
            <div class="input-group">
                <input type="text" required>
                <label for="">نام کاربری:</label>
            </div>
            <div class="input-group">
                <input type="password" required>
                <label for="">رمز عبور</label>
            </div>
            <div class="remember">
                <label><input type="checkbox">مرا به خاطر بسپار</label>
            </div>
            <button type="submit" class="btn-login">ورود؟</button>
            <div class="signUp-link">
                <p>اکانتی ندارید؟  <a href="#" class="signUpBtn-link"> اکانتی جدید</a></p>
            </div>
         </form>
        </div>
        <div class="form-wrapper sign-up">
            <form action="" method="post">
               <h2>
                  ساخت اکانت جدید
               </h2>
               <div class="input-group">
                   <input type="text" required>
                   <label for="">نام کاربری:</label>
               </div>
               <div class="input-group">
                <input type="email" required>
                <label for="">ایمیل:</label>
            </div>
               <div class="input-group">
                   <input type="password" required>
                   <label for="">رمز عبور</label>
               </div>
               <div class="remember">
                   <label><input type="checkbox"> با شرایط موافقم</label>
               </div>
               <button type="submit" class="btn-login">تکمیل</button>
               <div class="signUp-link">
                   <p>اکانت دارید؟  <a href="#" class="signInBtn-link"> ادامه با اکانت خود</a></p>
               </div>
            </form>
           </div>
    </div>





    <script src="js scripts/login.js"></script>
    <script src="js scripts/custom.js"></script>
</body>
</html>