<body>
<div class="loader"></div>

<div id="app">
<div class="main-wrapper main-wrapper-1">
<?php if(isset($_SESSION['appuser']) && $_SESSION['appuser']!='')	{ ?>
<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
  <div class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> <i data-feather="menu"></i></a></li>
      <!--<li><?php //echo $sitedata['siteslogan'];?></li>-->
    </ul>
  </div>
  <div style="width:100%; text-align:center; color:#39F" id="errorMSG"></div>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/avatar2.png" class="user-img-radious-style"> <!--users/<?php //echo $_SESSION['uimg'];?>--><span class="d-sm-none d-lg-inline-block"></span></a>
      <div class="dropdown-menu dropdown-menu-right pullDown">
        <div class="dropdown-title"><small>Welcome,</small> <?php echo $_SESSION['appuser'];?></div>
        <div class="dropdown-divider"></div>
        <a href="logout" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i> Logout </a> </div>
    </li>
  </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">  </div>
    <ul class="sidebar-menu">
      <li class="dropdown active"> <a href="<?php echo $siteurl;?>" class="nav-link"><i
                  data-feather="airplay"></i><span>Dashboard</span></a>
      </li>
       <li class="menu-header">System Configurations</li>
      <li class="dropdown"> <a href="settings" class="nav-link"><i data-feather="box"></i><span>Print Reciept</span></a> </li>
      <li class="dropdown"> <a href="recieptdata" class="nav-link"><i data-feather="box"></i><span>Saved Reciepts</span></a> </li>
    </ul>
  </aside>
</div>
<!-- Main Content -->
<div class="main-content">
<section class="section">
<?php } ?>
