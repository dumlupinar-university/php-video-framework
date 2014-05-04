<?php

	/* Dosya İşlemlerini Gerçekleyen sınıf */
	class file_process {
		
		/* Fonksiyona gelen yol'daki php dosyasını require etmeye çalışır.*/
		public function requireFile ( $path, $file ) {
			
			$add = $path . "/" . $file . ".php" ;
			
			try {
				
				if ( !file_exists ( $add ) ) 
									
					throw new Exception ( $add . " bulunamadı.", 1 ) ;
					
				else 
					
					require_once ( $add ) ;
				
			} catch ( Exception $e ) {
				
				echo '<div class = "hata" > Hata : ' . $e -> getMessage () . '</div>' ;
				
				echo '<div class = "hata" > Hata Kodu :  ' . $e -> getCode () . '<br /><br /></div>' ;
				
			}
			
		}
		
	}

?>
