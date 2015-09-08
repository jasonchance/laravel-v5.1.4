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
  <ol class="am-breadcrumb am-breadcrumb-slash">
    <li><a href="#" class="am-icon-home">首页</a></li>
    <li><a href="#">分类</a></li>
    <li class="am-active">内容</li>
  </ol>
</div>

<div class="am-g am-g-fixed">
  <ul class="am-avg-sm-3 boxes">
    <li class="box box-1">1</li>
    <li class="box box-2">2</li>
    <li class="box box-3">3</li>
    <li class="box box-4">4</li>
    <li class="box box-5">5</li>
    <li class="box box-6">6</li>
    <li class="box box-7">7</li>
    <li class="box box-8">8</li>
    <li class="box box-9">9</li>
  </ul>
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



  <article class="am-comment">
    <a href="#link-to-user-home">
      <img src="" alt="" class="am-comment-avatar" width="48" height="48"/>
    </a>

    <div class="am-comment-main">
      <header class="am-comment-hd">
        <!--<h3 class="am-comment-title">评论标题</h3>-->
        <div class="am-comment-meta">
          <a href="#link-to-user" class="am-comment-author">某人</a>
          评论于 <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>
        </div>
      </header>

      <div class="am-comment-bd">
        那，那是一封写给南部母亲的信。我茫然站在骑楼下，我又看到永远的樱子走到街心。其实雨下得并不大，却是一生一世中最大的一场雨。而那封信是这样写的，年轻的樱子知不知道呢？
      </div>
      <blockquote>
        <p>无论走到哪里，都应该记住，过去都是假的。</p>
        <small>马尔克斯 ——《百年孤独》</small>
      </blockquote>
    </div>
  </article>


  <table class="am-table am-table-bordered am-table-radius am-table-striped am-table-compact am-table-hover">
      <thead>
          <tr>
              <th>网站名称</th>
              <th>网址</th>
              <th>创建时间</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>Amaze UI</td>
              <td>http://amazeui.org</td>
              <td>2012-10-01</td>
          </tr>
          <tr>
              <td>Amaze UI</td>
              <td>http://amazeui.org</td>
              <td>2012-10-01</td>
          </tr>
          <tr class="am-active">
              <td>Amaze UI(Active)</td>
              <td>http://amazeui.org</td>
              <td>2012-10-01</td>
          </tr>
          <tr>
              <td>Amaze UI</td>
              <td>http://amazeui.org</td>
              <td>2012-10-01</td>
          </tr>
          <tr>
              <td>Amaze UI</td>
              <td>http://amazeui.org</td>
              <td>2012-10-01</td>
          </tr>
      </tbody>
  </table>
  
  <!-- <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg" class="am-img-responsive" alt=""/> -->
  <p style="width: 600px;" class="am-center">
    <img class="am-img-thumbnail am-radius" alt="140*140" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/1000/h/1000/q/80" width="140" height="140" />

    <img class="am-img-thumbnail am-round" alt="140*140" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/1000/h/600/q/80" width="200" height="120"/>

    <img class="am-img-thumbnail am-circle" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/1000/h/1000/q/80" width="140" height="140"/>
  </p>

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

  <form class="am-form am-form-horizontal">
    <div class="am-form-group am-form-group-sm">
      <label for="doc-ipt-3" class="am-u-sm-2 am-form-label">电子邮件</label>
      <div class="am-u-sm-10">
        <input type="email" id="doc-ipt-3" placeholder="输入你的电子邮件">
      </div>
    </div>

    <div class="am-form-group am-form-group-sm">
      <label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">密码</label>
      <div class="am-u-sm-10">
        <input type="password" id="doc-ipt-pwd-2" placeholder="设置一个密码吧">
      </div>
    </div>

    <div class="am-form-group am-form-group-sm">
      <div class="am-u-sm-offset-2 am-u-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> 记住十万年
          </label>
        </div>
      </div>
    </div>

    <div class="am-form-group">
      <div class="am-u-sm-10 am-u-sm-offset-2">
        <button type="submit" class="am-btn am-btn-default">提交登入</button>
      </div>
    </div>
  </form>

  <form class="am-form am-form-horizontal">
    <fieldset disabled>
      <legend>表单标题</legend>

      <div class="am-form-group">
        <label for="doc-ipt-email-1">邮件</label>
        <input type="email" class="am-round" id="doc-ipt-email-1" placeholder="输入电子邮件">
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-pwd-1">密码</label>
        <input type="password" class="" id="doc-ipt-pwd-1" placeholder="设置个密码吧">
      </div>

      <div class="am-form-group">
        <label for="doc-ipt-file-1">原生文件上传域</label>
        <input type="file" id="doc-ipt-file-1">
        <p class="am-form-help">请选择要上传的文件...</p>
      </div>

      <div class="am-form-group am-form-file">
        <label for="doc-ipt-file-2">Amaze UI 文件上传域</label>
        <div>
          <button type="button" class="am-btn am-btn-default am-btn-sm">
            <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
        </div>
        <input type="file" id="doc-ipt-file-2">
        <div id="file-list"></div>
      </div>

      <div class="am-checkbox">
        <label>
          <input type="checkbox"> 复选框，选我选我选我
        </label>
      </div>

      <div class="am-radio">
        <label>
          <input type="radio" name="doc-radio-1" value="option1" checked>
          单选框 - 选项1
        </label>
      </div>

      <div class="am-radio">
        <label>
          <input type="radio" name="doc-radio-1" value="option2">
          单选框 - 选项2
        </label>
      </div>

      <div class="am-form-group">
        <label class="am-checkbox-inline">
          <input type="checkbox" value="option1"> 选我
        </label>
        <label class="am-checkbox-inline">
          <input type="checkbox" value="option2"> 同时可以选我
        </label>
        <label class="am-checkbox-inline">
          <input type="checkbox" value="option3"> 还可以选我
        </label>
      </div>

      <div class="am-form-group">
        <label class="am-radio-inline">
          <input type="radio"  value="" name="docInlineRadio"> 每一分
        </label>
        <label class="am-radio-inline">
          <input type="radio" name="docInlineRadio"> 每一秒
        </label>
        <label class="am-radio-inline">
          <input type="radio" name="docInlineRadio"> 多好
        </label>
      </div>

      <div class="am-form-group">
        <label for="doc-select-1">下拉多选框</label>
        <select id="doc-select-1">
          <option value="option1">选项一...</option>
          <option value="option2">选项二.....</option>
          <option value="option3">选项三........</option>
        </select>
        <span class="am-form-caret"></span>
      </div>

      <div class="am-form-group">
        <label for="doc-select-2">多选框</label>
        <select multiple class="" id="doc-select-2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>

      <div class="am-form-group">
        <label for="doc-ta-1">文本域</label>
        <textarea class="" rows="5" id="doc-ta-1"></textarea>
      </div>

      <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
    </fieldset>
  </form>

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
<script src="{!!asset('amazeui/assets/js/app.js')!!}"></script>
</body>
</html>