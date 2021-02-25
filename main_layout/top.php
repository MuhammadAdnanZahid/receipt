<?php include_once("mainapp.php"); 	$sitedata 		= 	siteData(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title><?php echo $sitedata['sitename']; ?></title>
<meta name="description" content="<?php echo $sitedata['metadesc']; ?>" />
<meta name="keywords" content="<?php echo $sitedata['metakey']; ?>" />
<meta name="author" content="">
<!-- General CSS Files -->
<link rel="stylesheet" href="assets/css/app.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/components.css">
<link rel="stylesheet" href="assets/bundles/jqvmap/dist/jqvmap.min.css">
<!-- Custom style CSS -->
<link rel="stylesheet" href="assets/css/custom.css">
<link rel='shortcut icon' type='image/x-icon' href='../imgs/<?php echo $sitedata['siteicon'];?>' />
<!-- data tables CSS -->
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<!-- txt editors CSS -->
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
  <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">

  

  <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

  <!-- dropzone -->
    <link href="assets/dropzone/dropzone.css" rel="stylesheet" media="screen">
  
  
  
</head>
