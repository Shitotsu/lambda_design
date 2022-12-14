<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - LambdaDesign</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>

	<div class="kotak_login">
		<center>
			<img src="foto/LOGO2.PNG" width="300" height="210" >
		</center>
		<br>

		<form action="" method="post">
			<center>
			<input type="text" name="usernames" class="form_login" placeholder="USERNAME">
			<input type="password" name="password" class="form_login" placeholder="PASSWORD">
			
			<button type="submit" name="login" class="tombol_login" value="LOGIN" >
			LOGIN
			</button><br>
			<a href ="halaman1.php">Kembali</a>
			</center>
		</form>
		<?php
		if( isset($_POST["login"]) ) {
			include"koneksi.php";
			$username = $_POST["usernames"];
			$password = $_POST["password"];

			
			$result = mysqli_query($koneksi, "SELECT * FROM reg_user WHERE username = '$username'");
			$result2 = mysqli_query($koneksi, "SELECT * FROM sup_admin WHERE user = '$username'");
			$row = mysqli_num_rows($result);
			$row2 = mysqli_num_rows($result2);

			
			if($row === 1){
				// cek username
				$fetch_pass = mysqli_fetch_assoc($result);
				$cek_pass = $fetch_pass['password'];
				if(password_verify($password, $cek_pass)){
					echo"<script>alert('Login Berhasil');document.location.href='admin/basic-table.php'</script>";
					$_SESSION['log'] = true;
					
				}else{
					echo"<script>alert('Password Salah');</script>";
				}

			}elseif($result2){
				if($row2 === 1){
					// cek username
					$fetch_pass2 = mysqli_fetch_assoc($result2);
					$cek_pass2 = $fetch_pass2['password'];
					if(password_verify($password, $cek_pass2)){
						echo"<script>alert('Login Berhasil');document.location.href='admin/dashboard.php'</script>";
						$_SESSION['reg'] = true;
						
					}else{
						echo"<script>alert('Password Salah');</script>";
					}
				}else{
				echo"<script>alert('Username Belum Terdaftar');</script>";
				}
			}
		}

		?>
	</div>


</body>
</html>