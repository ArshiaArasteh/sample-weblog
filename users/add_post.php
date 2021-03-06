<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, maximum-scale=1">
      <title>قالب سایت شرکتی</title>
      <link href="../front_end/css/bootstrap.css" rel="stylesheet" type="text/css">
      <link href="../front_end/css/font-awesome.css" rel="stylesheet" type="text/css">
      <link href='../front_end/https://cdn.fontcdn.ir/Font/Persian/Vazir/Vazir.css' rel='stylesheet' type='text/css'>
      <link href="../front_end/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main-menu">
            <div class="container">
                <ul>
                    <li><a href="#">درباره</a></li>
                    <li><a href="../front_end/index.html">بازگشت</a></li>
                </ul>
               </div>
        </div>
        <div class="container">
            <div class="row">

                <form action="../users/store.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="add_post" value="add_post">
                    <label for="title">عنوان مطلب</label>
                    <input type="text" name="title" id="title" class="form-control" required><br>
                    <label for="textarea">متن اصلی</label>
                    <textarea type="text" id="profile" name="textarea" class="form-control" cols="30" rows="7"></textarea><br>
                    <label for="file">اپلود عکس</label>
                    <input type="file" name="file" id="file" class="form-control" required> <br>
                    <input type="submit" value="افزودن" class="btn btn-success col-lg-12">
                    <br><br><br><br>
                </form>

            </div>
        </div>
        <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="footer-contact">
                        <span class="footer-title">چگونه با ما در تماس باشید</span>
                        <ul>
                           <li><a href="#" title="041311111111" data-toggle="tooltip"><i class="fa fa-phone"></i></a></li>
                           <li><a href="#" title="تبریز " data-toggle="tooltip"><i class="fa fa-map-marker"></i></a></li>
                           <li><a href="#" title="info@seo90.ir" data-toggle="tooltip"><i class="fa fa-envelope-o"></i></a></li>
                           <li><a href="#" title="09352604271" data-toggle="tooltip"><i class="fa fa-mobile"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="footer-random-posts">
                        <span class="footer-title">شاید این مطالب را بپسندید</span>
                        <div class="col-md-6">
                           <a href="#">
                              <div class="footer-random-posts-body">
                                 <figure>
                                    <img src="../front_end/img/blog/blog4.jpg" alt="">
                                 </figure>
                                 <h4>دوچرخه سواری و استقامت</h4>
                                 <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-6">
                           <a href="#">
                              <div class="footer-random-posts-body">
                                 <figure>
                                    <img src="../front_end/img/blog/blog7.jpg" alt="">
                                 </figure>
                                 <h4>ورزش و سلامتی </h4>
                                 <span><i class="../front_end/fa fa-calendar-o"></i>98/8/7</span>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-6">
                           <a href="#">
                              <div class="footer-random-posts-body">
                                 <figure>
                                    <img src="../front_end/img/blog/blog7.jpg" alt="">
                                 </figure>
                                 <h4>آیا تنیس قدرت بدنی بالایی نیاز دارد؟</h4>
                                 <span><i class="fa fa-calendar-o"></i>98/8/7</span>
                              </div>
                           </a>
                        </div>
                        <div class="col-md-6">
                           <a href="#">
                              <div class="footer-random-posts-body">
                                 <figure>
                                    <img src="../front_end/img/blog/blog4.jpg" alt="">
                                 </figure>
                                 <h4>طبیعت گردی در روح انسان چه تاثیری دارد ؟</h4>
                                 <span><i class="../front_end/fa fa-calendar-o"></i>98/8/7</span>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <br><br><br>      
               <center>
                  <p>حقوق انتشار برای وب سایت محفوظ است - قالب seo90.ir</p>
               </center>
            </div>
        </div>
        <script type="text/javascript" src="../front_end/js/jquery.1.8.3.min.js"></script>
        <script type="text/javascript" src="../front_end/js/bootstrap.js"></script>
        <script type="text/javascript" src="../front_end/vjs/wow.js"></script>
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