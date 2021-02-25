<?php 
	//session_start();
unset($_SESSION['appuser']);
unset($_SESSION['role']);
unset($_SESSION['uid']);
unset($_SESSION['ustatus']);
unset($_SESSION['esms']);
session_destroy();

echo "<script language=javascript>location.href='".$siteurl."/'</script>";

?>