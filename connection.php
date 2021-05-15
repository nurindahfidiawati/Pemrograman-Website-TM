<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "db_mhs";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($username,$email,$nama,$nim,$prodi,$password)
	{	
		$insert = mysqli_query($this->koneksi,"insert into tb_mhs values ('','$username','$email','$nama','$nim','$prodi','$password')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_mhs where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
            $_SESSION['email'] = $data_user['email'];
			$_SESSION['nama'] = $data_user['nama'];
            $_SESSION['nim'] = $data_user['nim'];
            $_SESSION['prodi'] = $data_user['prodi'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
		else{
			// echo 'salah';
			// echo '<script type="text/javascript"> alert("Username dan Password Salah"); </script>';
			// header('location:index.php');
			echo "<script>alert('Username dan Password Salah');window.location='login.php'</script>";
    
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from tb_mhs where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>