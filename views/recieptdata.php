<?php
// error_reporting(E_ALL);
$allreciepts	=	recieptListings(0);
if(isset($_REQUEST['e'])){ $servicedata	=	getRecieptss($_REQUEST['e']+0); }
else{ $recieptdata[]	=''; }
?>

<ul class="breadcrumb breadcrumb-style ">
  <li class="breadcrumb-item">
    <h4 class="page-title m-b-0">Manage Services</h4>
  </li>
  <li class="breadcrumb-item"> <a href="<?php echo $siteurl;?>"> <i data-feather="home"></i></a> </li>
  <li class="breadcrumb-item">
    <?php if(isset($_REQUEST['path'])&&$_REQUEST['path']!='home') echo ucwords(strtolower($_REQUEST['path'])); ?>
  </li>
</ul>

<div class="section-body">
  <div class="row col-12">
    <?php
     
  while ($ed = mysqli_fetch_assoc($allreciepts)){
  echo '
    <div class="col-md-6 col-lg-6 ">
<div class="card" id="div_print">
  <div class="card-body" style="border: 10px solid black;">
    <div class="form-group" id="sitename_error">
      <h2 class="text-center">'.$ed['reciept_business'].'</h2>
    </div>
    <div class="form-group"> <img src="main_layout/barcode.php?f=png&s=ean-128 &d=" style="width: 100%; height: 200px"> </div>
    <div class="form-group">
      <h3 class="text-center" style="font-weight: bold">'.$ed['reciept_product'].'</h3>
    </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>'.$ed['reciept_color'].'</h3>
        </div>
        <div class="col-sm-3">
          <h3>'.$sd['reciept_size'].'</h3>
        </div>
        <div class="col-sm-5 text-right">
          <h3 style="">Rs.'.$ed['reciept_price'].'</h3>
          <h5 ><strike>'.$ed['reciept_oldprice'].'</strike></h5>
          </div>
          <div class="col-sm-12">
          <h5>'.$ed['createdon'].'</h5>
        </div>
      </div>
  </div>
</div>
</div> 
  ';
  }
      ?>
  </div>
</div>

<script language="javascript" for="servicesform" type="text/javascript">

function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
</script>
