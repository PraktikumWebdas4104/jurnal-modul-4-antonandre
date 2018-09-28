<form method="POST">
	Username : <input type="text" name="uname"><br><br>
	Password : <input type="password" name="pass"><br><br>
	<input type="submit" name="kirim" value="Login">
</form>


<?php
if (isset($_POST['kirim'])) {
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];

		$login = array(
					"uname" => "anton",
					"pass"	=> "antongans"
				);

		if ($uname == $login['uname'] && $pass == $login['pass']) {
			echo "<h1>Isi Data Berikut ini</h1>";

			echo"<form method='POST'>
	<table>
		<tr>
			<td>FOTOGRAFI<input type='checkbox' name='hobi[]' value='fotografi'></td>
		</tr>

		<tr>
			<td>TRAVELLING<input type='checkbox' name='hobi[]' value='travelling'></td>
		</tr>

		<tr>
			<td>MAKAN<input type='checkbox' name='hobi[]' value='makan'></td>
		</tr>

		<tr>
			<td>TIDUR<input type='checkbox' name='hobi[]' value='tidur'></td>
		</tr>
		
		<tr>
			<td>Masukkan Foto<input type='file[]' name='foto' value='foto'></td>
		</tr>
		
		<tr>
			<td><input type='submit' name='submit' value='Save'></td>
		</tr>
		
	</table>
</form>";
		}
			else{
			echo "Username dan Password Anda Salah!";
		}
	}
	include 'proses.php';
?>
