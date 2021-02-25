<ul class="breadcrumb breadcrumb-style ">
  <li class="breadcrumb-item">
    <h4 class="page-title m-b-0">Dashboard</h4>
  </li>
  <li class="breadcrumb-item"> <a href="<?php echo $siteurl;?>"> <i data-feather="home"></i></a> </li>
  <li class="breadcrumb-item active">
    <?php if(isset($_REQUEST['path'])&&$_REQUEST['path']!='home') echo ucwords(strtolower($_REQUEST['path'])); else echo 'Dashboard'; ?>
  </li>
</ul>
<div class="row ">
  
  <div class="col-xl-4 col-lg-6">
    <div class="card l-bg-blue-dark">
      <div class="card-statistic-3 p-4">
        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
        <div class="mb-4">
          <h5 class="card-title mb-0">Number of Residents</h5>
        </div>
        <div class="row align-items-center mb-2 d-flex">
          <div class="col-8">
            <h2 class="d-flex align-items-center mb-0"> 500/500</h2>
          </div>
          <div class="col-4 text-right"> <span>100% <i class="fa fa-arrow-up"></i></span> </div>
        </div>
        <div class="progress mt-1 " data-height="8">
          <div class="progress-bar l-bg-green" role="progressbar" data-width="99.9%" aria-valuenow="99.9"
                      aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="col-xl-3 col-lg-6">
    <div class="card l-bg-green-dark">
      <div class="card-statistic-3 p-4">
        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
        <div class="mb-4">
          <h5 class="card-title mb-0">Complaints Resolved/Total</h5>
        </div>
        <div class="row align-items-center mb-2 d-flex">
          <div class="col-8">
            <h2 class="d-flex align-items-center mb-0"> 57/114 </h2>
          </div>
          <div class="col-4 text-right"> <span>50% <i class="fa fa-arrow-up"></i></span> </div>
        </div>
        <div class="progress mt-1 " data-height="8">
          <div class="progress-bar l-bg-orange" role="progressbar" data-width="50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>-->
  <div class="col-xl-4 col-lg-6">
    <div class="card l-bg-cherry">
      <div class="card-statistic-3 p-4">
        <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
        <div class="mb-4">
          <h5 class="card-title mb-0">Bills Pendig/Received</h5>
        </div>
        <div class="row align-items-center mb-2 d-flex">
          <div class="col-8">
            <h2 class="d-flex align-items-center mb-0"> 125/375 </h2>
          </div>
          <div class="col-4 text-right"> <span>25% <i class="fa fa-arrow-up"></i></span> </div>
        </div>
        <div class="progress mt-1 " data-height="8">
          <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-6">
    <div class="card l-bg-orange-dark">
      <div class="card-statistic-3 p-4">
        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div><!--fa-dollar-sign-->
        <div class="mb-4">
          <h5 class="card-title mb-0">Current Month Revenue</h5>
        </div>
        <div class="row align-items-center mb-2 d-flex">
          <div class="col-8">
            <h2 class="d-flex align-items-center mb-0"> Rs. 592k </h2>
          </div>
          <div class="col-4 text-right"> <span>50% <i class="fa fa-arrow-up"></i></span> </div>
        </div>
        <div class="progress mt-1 " data-height="8">
          <div class="progress-bar l-bg-cyan" role="progressbar" data-width="50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
  </div>
</div>
