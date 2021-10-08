<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, maximum-scale=1">
      <title>قالب سایت شرکتی</title>
      <link href="../front_end/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="../front_end/css/font-awesome.css" rel="stylesheet" type="text/css">
      <link href='https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
      <link href="../front_end/css/style.css" rel="stylesheet" type="text/css">
      <!--[if IE]>
      <style type="text/css">.pie {behavior:url(PIE.htc);}</style>
      <![endif]-->
      <!--[if lt IE 9]>
      <script src="js/respond-1.1.0.min.js"></script>
      <script src="js/html5shiv.js"></script>
      <script src="js/html5element.js"></script>
      <![endif]-->
   </head>
   <body>
    <?php
    $url = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "weblog";
    
    $conne = mysqli_connect($url,$user,$pass,$dbname);
    
    if($conne){
      session_start();
      $id = $_SESSION["id"];

    $posts = mysqli_fetch_all(mysqli_query($conne,"SELECT * FROM posts WHERE user_id = '$id'"));
    
    }
    
    ?>

<div class="main-menu">
         <div class="container">
            <ul>
               <li><a href="store_post.php">لیست مطالب شما</a></li>
               <li><a href="add_post.php">افزودن مطلب</a></li>
            </ul>
         </div>
      </div> 
      <div class="top-section">
         <div class="container">
            <div class="row">
               <div class="col-md-2">
                  <img src="../front_end/img/logo.png" alt="" class="logo">
               </div>
               <div class="col-md-5">
                  <form method="" action="" class="search-form">
                     <input type="text" name="" placeholder="جستجو کنید ...">
                     <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
               <div class="col-md-5">
                  <div class="index-h1">
                     <h1>بهترین و متفاوت ترین مقالات آموزشی</h1>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <center>
         <p style="font-size: 16px;color: #444;">داشبورد</p>
      </center>

      <hr>
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <div class="sidebar">
                  <div class="sidebar-text">
                     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. </p>
                  </div>
                  <div class="sidebar-social">
                     <ul>
                        <li>
                           <a href="#" class="telegram"><i class="fa fa-send"></i>دنبال کردن در تلگرام</a>
                        </li>
                        <li>
                           <a href="#" class="twitter"><i class="fa fa-twitter"></i>صفحه توئیتر ما</a>
                        </li>
                        <li>
                           <a href="#" class="aparat"><i class="fa fa-video-camera"></i>دنبال کردن در آپارات</a>
                        </li>
                        <li>
                           <a href="#" class="youtube"><i class="fa fa-youtube"></i>کانال یوتیوب</a>
                        </li>
                        <li>
                           <a href="#" class="instagram"><i class="fa fa-instagram"></i>پیج اینستاگرام </a>
                        </li>
                     </ul>
                  </div>
                  <div class="category-sidebar">
                     <span><i class="fa fa-bookmark"></i>دسته بندی مطالب</span>
                     <ul>
                        <li><a href="#">دنبال کردن در تلگرام</a></li>
                        <li><a href="#">صفحه توئیتر ما</a></li>
                        <li><a href="#">دنبال کردن در آپارات</a></li>
                        <li><a href="#">کانال یوتیوب</a></li>
                        <li><a href="#">پیج اینستاگرام</a></li>
                     </ul>
                  </div>
                  <div class="category-sidebar ads-sidebar">
                     <span><i class="fa fa-slack"></i>تبلیغات</span>
                     <ul>
                        <li>
                           <a href="#">
                              <figure>
                                 <img src="img/ads/ads1.jpg" alt="">                             
                                 <figcaption></figcaption>
                              </figure>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-9">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <!-- Indicators -->
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                     </ol>
                     <!-- Wrapper for slides -->
                     <div class="carousel-inner">
                        <div class="item active">
                           <figure>
                              <img src="img/slide/Slide1.jpg" alt="">                             
                              <figcaption></figcaption>
                           </figure>
                           <div class="carousel-caption">
                              <h3>طراحی وب</h3>
                              <p>طراحی وب رو از همین امروز شروع کن</p>
                           </div>
                        </div>
                        <div class="item">
                           <figure>
                              <img src="img/slide/Slide1.jpg" alt="">                             
                              <figcaption></figcaption>
                           </figure>
                           <div class="carousel-caption">
                              <a href="">
                                 <h3>چرا شاد نباشیم</h3>
                                 <p>مجموعه مقالات روانشناسی سارتر</p>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              <?php
              
              foreach ($posts as $post){

              
              ?>
               <div class="col-md-4">
                  <a href="../front_end/asingle.php?id=<?=$post[0]?>">
                     <div class="post-content">
                        <figure>
                           <img src="<?=$post[2]?>">
                           <figcaption class="hover-fig">
                              <i class="fa fa-plus"></i>
                           </figcaption>
                           <figcaption class="date-fig">
                              <span><?=$post[1]?></span>
                              <i class="fa fa-date"></i>
                           </figcaption>
                        </figure>
                        <p><?= mb_strimwidth($post[3],0,50,"...") ?></p>
                     </div>
                  </a>
               </div>
              <?php
              
               }
              ?>
            </div>
         </div>
      </div>
        
      
      <script type="text/javascript" src="../front_end/js/jquery.1.8.3.min.js"></script>
      <script type="text/javascript" src="../front_end/js/bootstrap.js"></script>
      <script type="text/javascript" src="../front_endjs/wow.js"></script>
      <script type="text/javascript" src="../front_end/js/jquery.particleground.js"></script>
      <script>
         jQuery("[data-toggle='tooltip']").tooltip();
         jQuery('.footer').particleground({
         dotColor: '#515151',
         lineColor: '#515151'
         });   
      </script>
   </body>
</html>