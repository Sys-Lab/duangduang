<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Welcome to Sys-Lab!</title>
  
  <script src="/syslab-kh/web/Public/Js/jquery-1.11.2.min.js"></script>
  <script src="/syslab-kh/web/Public/Js/bootstrap.min.js"></script>
  <link href="/syslab-kh/web/Public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/index_index.css">
</head>

<body>
  <!-- 顶部循环播放图片-->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-pause="hover" data-interval=3000>
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div  class="carousel-inner" role="listbox">
     <div class="item active">
      <img src="/syslab-kh/web/Public/img/05.jpg" alt="...">
      <div class="carousel-caption">
        <p class="p2">Are you ready to join in Sys-Lab?</p>
      </div>
    </div>
    <div class="item">
      <img src="/syslab-kh/web/Public/img/02.jpg" alt="...">
      <div class="carousel-caption">
        <p class="p3">If you say YES</p>
      </div>
    </div>
    <div class="item">
      <img src="/syslab-kh/web/Public/img/03.jpg" alt="...">
      <div class="carousel-caption">
      <p class="p4">You will face many challenges</p>
      </div>
    </div>
    <div class="item">
      <img src="/syslab-kh/web/Public/img/04.jpg" alt="...">
      <div class="carousel-caption">
        <p class="p5">Many troubles</p>
      </div>
    </div>
    <div class="item">
      <img src="/syslab-kh/web/Public/img/01.jpg" alt="...">
      <div class="carousel-caption">
        <p class="p6">But you can figure all these out</br>Just trust yourself</p>

      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--播放图片部分结束-->



<!--导航栏-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Sys-Lab</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul id="mytab" class="nav navbar-nav">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>           Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>            Message</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>         More <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form id="form1" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">

        </div>
        <button id="btn1" type="submit" class="btn btn-default">Submit</button>
         <button class="btn btn-primary"><a href="<?php echo U('Admin/Login/login');?>" >Login/Register</a></button>
      </form>
     
      

      <ul id="mytab2"class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Others <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--
  <div class="container">
    <ul id="mytab" class="nav nav-pills">
      <li role="presentation" class="active"><a href="">Home</a></li>
      <li role="presentation"  ><a href="">Profile</a></li>
      <li role="presentation" ><a href="">Messages</a></li>
      <li role="presentation"  ><a href="">bbbbbb</a></li>
      <li role="presentation" ><a href="">cccccc</a></li>

      <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
          Dropdown <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
         <li role="presentation"  ><a href="">message</a></li>
       </ul>
     </li>

   </ul>
 </div>
-->
<!--导航栏结束-->


<!--巨幕部分-->
<div id="ju" class="jumbotron">
  <div class="container">
    <h1 class="h1">This ! is ! Sys-Lab! _(：3 」∠ )_<small>还在开发中...</small></h1>
    <p class="p1">This our duang~'s show project</p>
    <p><button type="button" id="myButton" class="btn btn-primary btn-lg"  autocomplete="off" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      Learn More
    </button></p>
  </div>
</div>

<div class="collapsing" id="collapseExample">
  <div class="well">

    <h2>This is Sys-Lab!</h2>
  </div>
</div>
<!--巨幕结束-->
<embed id="em" src="/syslab-kh/web/Public/sound/天门.MP3" ></embed>


</div>
<script>
  $("#mytab a").click(function(e){
    e.preventDefault();
    $(this).tab("show");
  })
</script>


<script>
  $("#mytab2 a").click(function(e){
    e.preventDefault();
    $(this).tab("show");
  })
</script>


</body>
</html>