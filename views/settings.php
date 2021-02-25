<?php $sd = siteData();?>
<style>
  .asaderror{
    color: red;

  }

</style>
<ul class="breadcrumb breadcrumb-style ">
  <li class="breadcrumb-item">
    <h4 class="page-title m-b-0"> General Settings </h4>
  </li>
  <li class="breadcrumb-item"> <a href="<?php echo $siteurl;?>"> <i data-feather="home"></i></a> </li>
  <li class="breadcrumb-item">
    <?php if(isset($_REQUEST['path'])&&$_REQUEST['path']!='home') echo ucwords(strtolower($_REQUEST['path'])); else echo ''; ?>
    
  </li>
</ul>
<div class="section-body">
    <div class="row col-12">
       <form name="siteform" id="siteform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate_siteform()" class="col-6">
      <div class="col-md-12 col-lg-12 ">
        <div class="card">
          <div class="card-body">
            <div class="form-group" id="sitename_error">
              <label >Business Name</label>
              <input name="business_name" class="input-xlarge form-control" id="business_name" type="text" value="<?php echo $sd['business_name'];?>">
            </div>
            <div class="form-group">
              <label>Product Name</label>
              <input name="product_name" class="input-xlarge form-control" id="product_name" type="text" value="<?php echo $sd['product_name'];?>">
            </div>
            <div class="form-group">
              <label>Product Color</label>
              <input name="product_color" class="input-xlarge form-control" id="product_color" type="text" value="<?php echo $sd['product_color'];?>">
            </div>
            <div class="form-group">
              <label>Product Size</label>
              <input name="product_size" class="input-xlarge form-control" id="product_size" type="text" value="<?php echo $sd['product_size'];?>">
            </div>
            <div class="form-group">
              <label>Product Old Price</label>
              <input name="product_oldprice" class="input-xlarge form-control" id="product_oldprice" type="text" value="<?php echo $sd['product_oldprice'];?>">
            </div>
            <div class="form-group">
              <label>Product New Price</label>
              <input name="product_price" class="form-control" id="product_price" type="text" value="<?php echo $sd['product_price'];?>">
            </div>
            

            <div class="form-group">
              <div class="input-group">
                <div class="controls">
                  <button type="submit" class="btn btn-primary" name="siteform">Save</button>
                  <a href="settings">
                  <button type="button" class="btn btn-info">Cancel</button>
                  </a>
                  <input type="hidden" name="siteid" id="siteid" value="<?php echo $sd['siteid'];?>" />
                  <input type="hidden" id="userid" name="userid" value="<?php echo $_SESSION['uid']; ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>

      <form name="recieptform" id="recieptform" action="" method="post" enctype="multipart/form-data" onsubmit="return validate_recieptform()" class="col-6">
       <div class="col-md-12 col-lg-12 ">
        <div class="card" id="div_print">
          <div class="card-body" style="border: 10px solid black;">
            <div class="form-group" id="sitename_error">
              <h2 class="text-center"><?php echo $sd['business_name'];?></h2>

              <input name="reciept_business" class="input-xlarge form-control" id="reciept_business" type="text" value="<?php echo $sd['business_name'];?>">
              
            </div>
             <div class="form-group">
              <img src="main_layout/barcode.php?f=png&s=ean-128 &d=<?php echo $sd['product_name'];?>" style="width: 100%; height: 200px">
            </div>
             <div class="form-group">
              <h3 class="text-center" style="font-weight: bold"><?php echo $sd['product_name'];?></h3>

              <input name="reciept_product" class="input-xlarge form-control" id="reciept_product" type="text" value="<?php echo $sd['product_name'];?>">
              
            </div>
           <div class="">
             <div class="row">
                <div class="col-sm-4">
              <h3><?php echo $sd['product_color'];?></h3>

              <input name="reciept_color" class="input-xlarge form-control" id="reciept_color" type="text" value="<?php echo $sd['product_color'];?>">
              
            </div>
            <div class="col-sm-3">
              <h3><?php echo $sd['product_size'];?></h3>

              <input name="reciept_size" class="input-xlarge form-control" id="reciept_size" type="text" value="<?php echo $sd['product_size'];?>">
              
            </div>
             <div class="col-sm-5 text-right">
              <h3 style="">Rs. <?php echo $sd['product_price'];?></h3>


              <input name="reciept_oldprice" class="input-xlarge form-control" id="reciept_oldprice" type="text" value="<?php echo $sd['product_oldprice'];?>">

              <input name="reciept_price" class="form-control" id="reciept_price" type="text" value="<?php echo $sd['product_price'];?>">

              <?php
              if ($sd['product_oldprice']!= 0) {
                echo '<h5 ><strike>'.$sd['product_oldprice'].'</strike></h5>';
              }else{
                echo "";
              }
               
               ?>
            </div>
             </div>

           </div>  

            
        </div>
      </div>
      <div class="form-group">
              <div class="input-group">
                <div class="controls">
                   <button type="submit" class="btn btn-primary" name="siteform">Save</button>
                  <button type="submit" class="btn btn-primary" name="siteform" onClick="printdiv('div_print');">Print</button>
                  <a href="settings">
                  <button type="button" class="btn btn-info">Cancel</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </form>
    </div>
  
</div>
<script language="javascript" for="siteform" type="text/javascript">
function validate_siteform() 
{  
   
    var form = new FormData($('#siteform')[0]);
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: form,
      cache: false,
      contentType: false,
      processData: false,
        success: function(res) {$('#errorMSG').html(res);/**/window.setTimeout( window.location.reload(), 15000 );  }
      });
      return false;
  }

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
  function validate_recieptform(){
    var form = new FormData($('#recieptform')[0]);
    $.ajax({
      type: "POST",
      url: "ajax.php",
      data: form,
      cache: false,
      contentType: false,
      processData: false,
        success: function(res) {$('#errorMSG').html(res);/**/window.setTimeout( window.location.reload(), 15000 );  }
      });
      return false;
  }

</script>
