<!-- XHTML 1.O Doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- html açılış tag'ı -->
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<!-- head açılış tag'ı -->
	<head>
	
		<!-- Title -->
		<title><?php echo TITLE ?></title>
		
		<!-- Charset -->
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		
		<!-- CSS File -->
		<link href=<?php echo THEME ?> type="text/css" rel="stylesheet"/>
		
		<!-- Description -->
		<meta name="description" content=<?php echo DESCRIPTION ?>/>
		
		<!-- Keywords -->
		<meta name="keywords" content=<?php echo KEYWORDS ?>/>
		
		<!-- Author -->
		<meta name="author" content=<?php echo AUTHOR ?>/>
		
	</head>
	
	<!-- body açılış tag'ı -->
	<body>
		
		<!-- head div'i -->
		<div id="head">
			
			include head.php (head information, meta tags etc.)
			
		</div>
