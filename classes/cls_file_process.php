<?php

	/* Dosya İşlemlerini Gerçekleyen sınıf */
	class file_process {
		
		/* eklenecek dosyanın bulunduğu klasör*/
		private $folder ; 
		
		/* eklenecek dosyanın adı*/
		private $file ;
		
		/* eklenecek dosya yolu*/
		private $path ;
		
		/* Fonksiyona gelen yol'daki php dosyasını require etmeye çalışır.*/
		public function requireFile ( $folder, $file ) {
			
			$this -> folder = $folder ;
			
			$this -> file = $file ;
			
			$this -> makePath () ;
			
			try {
				
				if ( !file_exists ( $this -> path ) ) 
									
					throw new Exception ( $this -> path . " bulunamadı.", 1 ) ;
					
				else 
					
					require_once ( $this -> path ) ;
				
			} catch ( Exception $e ) {
				
				echo '<div class = "error" > Hata : ' . $e -> getMessage () . '</div>' ;
				
				echo '<div class = "error" > Hata Kodu :  ' . $e -> getCode () . '<br /><br /></div>' ;
				
				exit () ;
				
			}
			
		}
		
		/* Fonksiyona gelen yol'daki php dosyasını include etmeye çalışır.*/
		public function includeFile ( $folder, $file ) {
			
			$this -> folder = $folder ;
			
			$this -> file = $file ;
			
			$this -> makePath () ;
			
			if ( !file_exists ( $this -> path ) ) 
									
				header ( "Location: index.php" ) ;
					
			else 
					
				include_once ( $this -> path ) ;
				
		}
		
		/* eklenecek dosyanın yolunu oluşturur. */
		private function makePath () {
			
			$this -> path = $this -> folder . "/" . $this -> file . ".php" ;
		
		}
			
		
	}

?>
