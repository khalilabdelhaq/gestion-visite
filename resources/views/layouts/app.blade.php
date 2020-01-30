<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <link rel="shortcut icon" type="image/x-icon" href="img/icons/logo_interieur.ico" />
  <title>Province Fquih ben Saleh</title>
  
  
  <link type="text/css" href="{{ asset('/css/style.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('/font-awesome/css/font-awesome.min.css')}}" />

  <!--[if lte IE 6]>
    <link type="text/css" href="./css/style_ie6.css" rel="stylesheet" />
  <![endif]-->
  <script type="text/javascript" src="{{ asset('/js/jquery-1.11.1.min.js')}}"></script> 
  <script type="text/javascript" src="{{ asset('/js/script.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.canvasjs.min.js')}}"></script>
</head>

<body>
<div id="page">

  <!-- header -->
  <div id="header">
      <div id="logo"><h1><a href="#" title="Your site name"><img style="height:100px" src="img/logo_interieur.png" alt="logo"/></a></h1></div>
      <div id="div_header" style="z-index:-1">عمالة إقليم الفقيه بن صالح <br />النظام المعلوماتي لتذبير المرتفقين</div>
      <div id="quicklink"> | 
      <a href="{{ route('login') }}">{{ Auth::user()->username }}</a> | <a href="{{ url('/logout') }}"
    onclick="event.preventDefault();
             document.getElementById('logout-form').submit();" title="logout"><i class="fa fa-power-off fa-lg" aria-hidden="true"></i>
</a>
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
      </div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">

      <ul>
          <li class="item"><a href="{{url('/visitors')}}"><span class="item-icon"><i class="fa fa-user fa-2x"></i></span><span class="item-text">المرتفقون</span></a></li>
          <li class="item"><a href="{{ url('/addVisitor') }}"><span class="item-icon"><i class="fa fa-folder-open fa-2x"></i></span><span class="item-text">إضافة</span></a></li>
          <li class="item"><a href="{{ url('/search') }}"><span class="item-icon"><i class="fa fa-search fa-2x"></i></span><span class="item-text">بحث</span></a></li>
    
      </ul>

  </div>
  <!-- end mainmenu -->
<!--
    <div id="submenu">
        <ul>
            <li><a href="#" title="">Manager</a></li>
            <li><a href="#" title="" class="active">Advanced search</a></li>
            <li><a href="#" title="">Options</a></li>
            <li><a href="#" title="">Daily Reports</a></li>
        </ul>
        <div class="clear"></div>
    </div>
-->
  <!-- content -->
      <div id="content">
          @yield('content')              
      </div>
      <!-- end div content -->

  <!-- Footer -->
  <div id="footer">
      <ul>
          
          <li>&copy;2020 <a href="#" title="">تدبير الزيارات</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li>Powered by <a href="#" title="">مصلحة المعلوميات</a></li>
      </ul>
  </div>

</div>
<!-- end div page -->
</body>

</html>