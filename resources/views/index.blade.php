<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Hello Amaze UI</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="{!!asset('amazeui/assets/i/favicon.png')!!}">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="{!!asset('amazeui/assets/i/app-icon72x72@2x.png')!!}">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="{!!asset('amazeui/assets/i/app-icon72x72@2x.png')!!}">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="{!!asset('amazeui/assets/i/app-icon72x72@2x.png')!!}">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="{!!asset('amazeui/assets/css/amazeui.min.css')!!}">
  <link rel="stylesheet" href="{!!asset('amazeui/assets/css/app.css')!!}">
</head>
<body>

<!--在这里编写你的代码-->
<div class="am-header">
  
</div>

<div class="am-g am-g-fixed">
  <div class="am-u-sm-4">
    <div class="am-box">
       <h2 class="am-box-hd">About the Site</h2>
       <p class="am-box-bd">This is my blog where I talk about only the bestest things in the whole wide world.</p>
    </div>
  </div>
  <div class="am-u-sm-8">
    <dl>
      <dt>响应式网页设计</dt>
      <dd>自适应网页设计（英语：Responsive web design，通常缩写为RWD）是一种网页设计的技术做法，该设计可使网站在多种浏览设备（从桌面电脑显示器到移动电话或其他移动产品设备）上阅读和导航，同时减少缩放、平移和滚动。</dd>
      <dt>响应式网页设计（RWD）的元素</dt>
      <dd>采用 RWD 设计的网站 使用 CSS3 Media queries，即一种对 @media 规则的扩展，以及流式的基于比例的网格和自适应大小的图像以适应不同大小的设备。</dd>
    </dl>
  </div>
</div>

<div class="am-container">
  <ul class="am-avg-sm-4 am-thumbnails">
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-3.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-4.jpg" /></li>
  </ul>
  <div class="am-box">
     <h2 class="am-box-hd">About the Site</h2>
     <p class="am-box-bd">This is my blog where I talk about only the bestest things in the whole wide world.</p>
  </div>
  <blockquote>
    <p>无论走到哪里，都应该记住，过去都是假的，回忆是一条没有尽头的路，一切以往的春天都不复存在，就连那最坚韧而又狂乱的爱情归根结底也不过是一种转瞬即逝的现实。</p>
    <small>马尔克斯 ——《百年孤独》</small>
  </blockquote>
  <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 am-thumbnails">
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-3.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-4.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-1.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-2.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-3.jpg" /></li>
    <li><img class="am-thumbnail" src="http://s.amazeui.org/media/i/demos/bing-4.jpg" /></li>
  </ul>
  
  <a href="http://www.amazeui.org">Amaze UI</a>
  <abbr title="http://www.amazeui.org">Amaze UI</abbr>
  <div class="am-print-hide"><button type="button" class="am-btn am-btn-primary am-btn-block">浏览器可见，打印机不可见</button></div>
  <div class="am-print-block"><button type="button" class="am-btn am-btn-primary am-btn-block">打印机可见，浏览器不可见</button></div>
</div>

<div class="am-footer">
  
</div>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{!!asset('amazeui/assets/js/jquery.min.js')!!}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="{!!asset('amazeui/assets/js/amazeui.min.js')!!}"></script>
</body>
</html>