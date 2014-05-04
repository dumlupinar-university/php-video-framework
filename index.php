<!-- XHTML 1.O Doctype -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- html açılış tag'ı -->
<html xmlns="http://www.w3.org/1999/xhtml">
	
	<!-- head açılış tag'ı -->
	<head>
	
		<!-- Title -->
		<title>Online Course System</title>
		
		<!-- Charset -->
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		
		<!-- CSS File -->
		<link href="styles/style.css" type="text/css" rel="stylesheet"/>
		
		<!-- Description -->
		<meta name="description" content="Video Course System"/>
		
		<!-- Keywords -->
		<meta name="keywords" content="Educations, Lessons, Video Course"/>
		
		<!-- Author -->
		<meta name="author" content="Deniz - Furkan"/>
		
	</head>
	
	<!-- body açılış tag'ı -->
	<body>
		
		<!-- head div'i -->
		<div id="head">
			
			include head.php (head information, meta tags etc.)
			
		</div>
		
		<!-- menu div'i -->
		<div id="menu"> 
		
			include menu.php (menu and links)
			
			<!-- Menü -->
			<ul>
				<li><a href="index.php">Anasayfa</a></li>
				<li><a href="index.php?cont=courses">Kurslar</a></li>
				<li><a href="index.php?cont=instructors">Eğitmenler</a></li>
			</ul>
			
		</div>
		
		<!-- content div'i -->
		<div id="content">
			
			include content.php (content part)
			
		</div>
		
		<!-- foot div'i -->
		<div id="foot">
			
			include foot.php (informations, authors etc.)
			
		</div>
		
	</body>
	
</html>
