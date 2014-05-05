<?php
	
	/* ilk class'ların sisteme dahili ( zorunlu class'lar ) */
	require_once ( "classes/cls_file_process.php" ) ;
	
	
	/* Dosya işlemlerini gerçekleştiren sınıfın oluşturulması */
	$files = new file_process () ;
	
	/* config dosyalarının sisteme require edilmesi */
	$files -> requireFile ( "configurations", "general_config" ) ; 
	
	/* bases sayfalarının sisteme dahil edilme işlemi */
	$files -> requireFile ( "bases", "head" ) ;
	
	$files -> requireFile ( "bases", "menu" ) ;
	
	$files -> requireFile ( "bases", "content" ) ;
	
	$files -> requireFile ( "bases", "foot" ) ;
	
?>
