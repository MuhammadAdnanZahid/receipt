<?php 
require_once("app_configurations/db_settings.php");
require_once("app_configurations/functions.php");

#----------------------------------------------------------------Admin Login Form
	if(isset($_POST['lusername'])){ 		
		if(validateLogin($_POST['lusername'],$_POST['password'])){
			echo "authenticated";
		}
		else{
			$_SESSION['esms'] 		=	 'Please re-check your credentials...!';
		}
	}

#----------------------------------------------------------------Site Data
if(isset($_POST['business_name'])){
	if(manageSiteData())
		echo $msg='Default Site Data Updated...!';
	else
		echo $msg='Action failed..!';
} 

#----------------------------------------------------------------reciept Data
if(isset($_POST['reciept_business'])){
	if(manageRecieptData())
		echo $msg='Reciept Save Successfully...!';
	else
		echo $msg='Action failed..!';
} 














################### Duplicate Values #################
if(isset($_POST['duplicate'])){
	if(getDuplicateVal($_POST['duplicate'],$_POST['tbl'],$_POST['field'] ))
		echo $msg='duplicate';
	else
		echo $msg='ok';
}
?>