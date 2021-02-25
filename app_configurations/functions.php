<?php  @session_start();
// error_reporting(E_ALL);
date_default_timezone_set('Asia/Karachi');
################### SITE DATA ####################
function siteData(){
	global $tprefix, $dbconn;
	$qry	=	"select * from ".$tprefix."site";
	$result =	$dbconn->query($qry);
	return	mysqli_fetch_assoc($result);

}
function manageSiteData(){ 
	global $tprefix, $dbconn;
	$siteid				=	$_POST['siteid']; 
	$userid				=	$_POST['userid']; 
	$business_name			=	$_POST['business_name'];
	$product_name			=	$_POST['product_name'];
	$product_color			=	$_POST['product_color'];
	$product_size			=	$_POST['product_size'];
	$product_oldprice		=	$_POST['product_oldprice'];
	$product_price			=	$_POST['product_price'];
	
				
				
	  $query			=	'	update '.$tprefix.'site set 
							authorid			=	"'.$userid.'", 
							business_name			=	"'.$business_name.'",
							product_name			=	"'.$product_name.'",
							product_color			=	"'.$product_color.'",
							product_size			=	"'.$product_size.'",
							product_oldprice			=	"'.$product_oldprice.'",
							product_price				=	"'.$product_price.'"
							where 
							siteid				=	'.$siteid;

	if($dbconn->query($query))	return true;	else	return false;
}

################### Reciept Data ###################

function manageRecieptData(){
     global $tprefix, $dbconn;

	$rid				=	$_POST['rid']; 
	$reciept_business			=	$_POST['reciept_business'];
	$reciept_product			=	$_POST['reciept_product'];
	$reciept_color			=	$_POST['reciept_color'];
	$reciept_size			=	$_POST['reciept_size'];
	$reciept_oldprice		=	$_POST['reciept_oldprice'];
	$reciept_price			=	$_POST['reciept_price'];
	$createdon      =     date("Y-m-d H:m:s",time());
	
				
				
	  $query			=  $tprefix.'reciept set  
							reciept_business			=	"'.$reciept_business.'",
							reciept_product			=	"'.$reciept_product.'",
							reciept_color			=	"'.$reciept_color.'",
							reciept_size			=	"'.$reciept_size.'",
							reciept_oldprice			=	"'.$reciept_oldprice.'",
							reciept_price				=	"'.$reciept_price.'"';

	 $query	= " INSERT INTO ".$query. ',createdon = "'.$createdon.'"';

	if($dbconn->query($query)){
		return true;} 
		else { 
			return false; }
	}

	function getReciepts($currentUserId){
	global $tprefix, $dbconn;
	$result =	$dbconn->query("select * from ".$tprefix."reciept where rid=".$currentUserId);
	return mysqli_fetch_assoc($result);
}

function recieptListings($tid){
	global $tprefix, $dbconn;
	
	if(isset($_REQUEST['d']) and $_REQUEST['d']>0){
		$dbconn->query('delete from '.$tprefix.'reciept where rid='.$_REQUEST['d']);
		
	}

	if($tid==0)
		$query = "select * from ".$tprefix."reciept where rid>=1";
	else
		$query = 'select * from '.$tprefix.'reciept where rid='.$tid;
		
	$result =	$dbconn->query($query);
	if($tid==0)
		return $result;
	else 
	return $result;
}

################### Reciept data End ###################

################### USER LOGIN ###################
function validateLogin($name,$pass){
			global $tprefix, $dbconn;
			
			$name = mysqli_real_escape_string($dbconn,stripslashes($name)); 
			$pass = mysqli_real_escape_string($dbconn,stripslashes($pass));
			$pass=substr(md5($pass), 0,15);
			
			$qy			=	"select * from ".$tprefix."cmsusers where username='$name' AND password like '$pass%' HAVING status='Active'";
			$numRecs	=	$dbconn->query($qy);
			$num		=	mysqli_num_rows($numRecs);
			if($num>0){	
				while($data=mysqli_fetch_object($numRecs)){
					$_SESSION['appuser']	=	 $data->name;
					$_SESSION['uid'] 		=	 $data->userid;
					$_SESSION['role'] 		=	 $data->role;
					$_SESSION['ustatus'] 	=	 $data->status;
					$_SESSION['username'] 	=	 $data->username;
					$_SESSION['uimg'] 		=	 $data->userimg;
					$_SESSION['rights'] 	=	 $data->user_rights;
					$_SESSION['partnerid']	=	$data->partner_id;
					$_SESSION['esms'] 		=	 '';
					$_SESSION['siteid'] 	=	 1;
				}
				return true;
			}
			else {
				return false;
			}
} 





####################  DUPLICATE VALUES ##########################
function getDuplicateVal($val, $tbl, $field){
		global $tprefix;
		$resultSet 	= 	mysql_query('select * from '.$tprefix.$tbl.' where '.$field.' = "'.$val.'"');
		$num 		=	mysql_num_rows($resultSet);
		if($num>0) return true; else return false;
}

################# GET LISTS ################
function getLists($table, $displayField, $valueField,$selectedValue, $condition){
	global $tprefix, $dbconn;
 $query = "select $displayField, $valueField from ".$tprefix.$table.$condition;
	$list ='<option> </option>';
	$result =	$dbconn->query($query);
	while($al = mysqli_fetch_assoc($result)){	
		if($selectedValue == $al[$valueField]) $chk = 'selected'; else $chk='';
		$list .='<option value="'.$al[$valueField].'" '.$chk.'>'.$al[$displayField].'</option>';
	}
	
	return $list;
}
function getQryArray($table, $displayField, $condition){
	global $tprefix, $dbconn;
	$list ='';
	 $query = "select $displayField from ".$tprefix.$table.$condition;
	$result =	$dbconn->query($query);
	return $result;// =	mysql_query($query);

}

################# GET SINGLE VALUE ################
function getSingleValue($table, $requiredField, $condition){
	global $tprefix, $dbconn;
	$list ='';
	 $query = "select $requiredField as cval from ".$tprefix.$table.$condition;
	$result =	$dbconn->query($query);
	if(@mysqli_num_rows($result)>0){	
		$al = mysqli_fetch_assoc($result);
		$list = $al['cval'];
	}
	return $list;
}

################# SET SINGLE VALUE ################
function setSingleValue($table, $targetField, $val, $condition){
	global $tprefix;
	$query = "update ".$tprefix.$table." set ".$targetField." = '".$val."' ".$condition;
	if(mysql_query($query)){	
		return true;
	}else
	return false;
}
############### SUGGESTS ################
function getSuggests($tblname, $fieldName){
	global $tprefix;
	$lists	=	'';
	$result = mysql_query('select distinct '.$fieldName.' from '.$tprefix.$tblname);
	while($str = mysql_fetch_assoc($result)){
		$lists .='"'.$str[''.$fieldName.''].'",';
	}
	return substr($lists,0,strlen($lists)-1);
	
}

?>
