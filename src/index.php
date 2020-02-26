<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css" type="text/css">
    <title>ANRI Official Website</title>
  </head>
  <body>
    <!--TOP-->
    <div class="Title">
    <h1 id="Title">ANRI Official Website</h1>
      <div class="menu">
      <li><a href="#About">About</a></li>
      <li><a href="#Work">Work</a></li>
      <li><a href="#Product">Product</a></li>
      <li><a href="#SNS">SNS</a></li>
      </div>
    </div>
    <!--About-->
    <div class="About">
      <div id="About"><h2>About</h2></div>
    </div>
    <!--Work-->
    <div class="Work">
      <div id="Work"><h2>Work</h2></div>
    </div>
    <!--Product-->
    <div class="Product">
      <div id="Product"><h2>Product</h2></div>
    </div>
    <!--SNS-->
    <div class="SNS">
      <div id="SNS"><h2>SNS</h2></div>
    </div>
    <!--PAGE TOP button-->
    <p class="title">
      <a href="#Title">PAGE TOP</a>
    </p>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script>
      $(function(){
        $('a[href^="#"]').click(function(){
          var speed = 400;
          var href = $(this).attr("href");
          var target = $(href == '#' || href == '' ? 'html' : href);
          var position =target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
    </script>
  </body>
</html>
