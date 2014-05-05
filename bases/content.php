		<!-- content div'i -->
		<div id="content">
			
			include content.php (content part)
			
			<?php
				
				/*Get metodu ile gelen sayfa varsa sayfayı content'e dahil et. */
				if ( isset ( $_GET [ 'cont' ] ) ) {
					
					/* Dosya işlemlerini gerçekleştiren sınıfın oluşturulması */
					$files = new file_process () ;
					
					/* get methodu ile gelen sayfanın sisteme dahil edilmesi.*/
					$files -> includeFile ( "includes", $_GET [ 'cont' ] ) ; 
				}
					
			?>
			
		</div>
		
