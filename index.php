<?php
	
	/* ilk class'ların sisteme dahili ( zorunlu class'lar ) */
	require_once ( "classes/file_process.php" ) ;
	
	/* bases sayfalarının sisteme dahil edilme işlemi */
	$files = new file_process () ;
	
	$files -> requireFile ( "bases", "head" ) ;
	
	$files -> requireFile ( "bases", "menu" ) ;
	
	$files -> requireFile ( "bases", "content" ) ;
	
	$files -> requireFile ( "bases", "foot" ) ;
	
?>
