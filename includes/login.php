<!-- login div'i -->
<div id="login">
	
	<center><h1>Giriş Yapın</h1></center>
	
	<!-- login formu -->
	<form name="login" method="POST" action="index.php">
		
		<!-- login formu için tablo -->
		<table align="center"> 
		
			<!-- email input'u -->
			<tr>
				<td>E-Posta :</td>
				<td><input type="text" name="email" size="20"></td>					
			</tr>
			
			<!-- password input'u -->
			<tr>
				<td>Şifre :</td>
				<td><input type="password" name="password" size="20"></td>					
			</tr>		
			
			<!-- submit, reset input'u -->
			<tr>
				<td></td>
				<td align="center">
					<input type="submit" name="login" value="Giriş">
					<input type="reset" name="clear" value="Temizle">				
				</td>
			</tr>
			
		</table>
		
	</form>
	
	
	<h4 class = "title" >Hesabınız Yok mu? <a href = index.php?cont=signup>Kayıt Ol</a></h4>
	<h3 class = "title" ><a href = index.php?cont=forgetpassword>Şifremi Unuttum</a></h3>
	
</div>
