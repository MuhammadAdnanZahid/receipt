<?php
		#-----database access credentials (database name and table prefix-[ifany])-----#		
		$server_name	=	"localhost";				# Database Server IP/URL/Name
		$db_username	=	"root";						# Database User Name
		$db_password	=	"";							# Database Passwrod
		$databasename	=	"society";				# Database Name

		$tprefix		=	"ask10_";						# PLEASE DO NOT ALTER THIS VALUE
		
		$siteurl		=	"/barcode/webadmin";		# WEBADMIN
		$mainurl		=	"/barcode";				# FRONT END SITE

		#----------------------please do not edit below this line---------------------#		
		$dbconn = mysqli_connect($server_name,$db_username,$db_password, $databasename);
		# Check connection
		if (!$dbconn) {
		 die("Database Connection Error..! : " . mysqli_connect_error()."<br /> Please Review Database access credentials in /app_configurations/db_settings.php");
		}
		
		

?>