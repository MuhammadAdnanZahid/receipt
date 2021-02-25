<?php		
		if (!isset($_SESSION['appuser'])){
			$_SESSION['appuser']	=	''; 
			$login					=	'no';
			echo "<script language=javascript>location.href='".$siteurl."/login'</script>";
  		}
		else if(isset($_SESSION['appuser'])){
				if($_SESSION['appuser']==''){
						include('login.php');
				}
				else{		
						 		$currentUser 	= 	$_SESSION['appuser'];
						 		$currentRole 	= 	$_SESSION['role'];
						 		$currentUserId	=	$_SESSION['uid'];
						 		$currentStatus	=	$_SESSION['ustatus'];
	
							if(!isset($_REQUEST['path'])||$_REQUEST['path']=='settings' ||$_REQUEST['path']=='login'){
								include('settings.php');
							}
							else if (file_exists("views/".$_REQUEST['path'].'.php')) { 
								include($_REQUEST['path'].'.php');	
							}else { 
								include('404.php');	
							}
					}
		}
	
?>
