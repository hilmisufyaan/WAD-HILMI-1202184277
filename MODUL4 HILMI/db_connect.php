<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}

	function register($nama,$email,$handphone,$pass)
	{	
		
		$register = mysqli_query($this->koneksi,"INSERT INTO user VALUES ('','$nama','$email','$handphone','$pass')");
		return $register;
	}

	function noDuplicate($email)
	{
		$noDuplicate = mysqli_query($this->koneksi,"SELECT * FROM user WHERE email='$email'");
		if (mysqli_num_rows($noDuplicate)>0)
		{
			return false;
		}

		return true;
	}

	function display_cart($id)
	{
		$display_cart = mysqli_query($this->koneksi, "SELECT * FROM cart WHERE user_id='$id'");
		return $display_cart;
	}

	function display_user($id)
	{
		$display_user = mysqli_query($this->koneksi, "SELECT * FROM user WHERE id='$id' ");
		return $display_user;
	}

	function update($nama,$handphone,$pass,$id,$nColor)
	{	
		
	$update = mysqli_query($this->koneksi,"UPDATE user SET nama='$nama', no_hp='$handphone', password='$pass' WHERE id='$id' ");
	if (isset($nColor))
		{
			setcookie('navbarColor', $nColor, time() + (60 * 60 * 24 * 5), '/');
		}
	if(isset($pass)){
		setcookie('password', $pass, time() + (60 * 60 * 24 * 5), '/');
	}
	return $update;
		
	}

	function delete($id)
    {
		$delete = mysqli_query($this->koneksi,"DELETE FROM cart WHERE id='$id'");
		return $delete;
	}
	
	function login($email,$pass,$remember)
	{
		
		$query = mysqli_query($this->koneksi,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		if (mysqli_num_rows($query)>0){
			if(password_verify($pass,$data_user['password']))
				{
					
					if($remember)
					{
						setcookie('email', $email, time() + (60 * 60 * 24 * 5), '/');
						setcookie('password', $data_user['password'], time() + (60 * 60 * 24 * 5), '/');
						setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
						setcookie('user_id', $data_user['id'], time() + (60 * 60 * 24 * 5), '/');
						 
					}
					if(isset($_COOKIE['navbarColor'])){
						$_SESSION['navbarColor'] = $_COOKIE['navbarColor'];
					}
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $data_user['password'];
					$_SESSION['nama'] = $data_user['nama'];
					$_SESSION['user_id'] = $data_user['id'];
					$_SESSION['is_login'] = TRUE;
					return TRUE;
				}
		}
	

	}

	function relogin($email)
	{
		$query = mysqli_query($this->koneksi,"SELECT * FROM user WHERE email='$email'");
		$data_user = $query->fetch_array();
		if(isset($_COOKIE['navbarColor'])){
			$_SESSION['navbarColor'] = $_COOKIE['navbarColor'];
		}
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $data_user['password'];
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['user_id'] = $data_user['id'];
		$_SESSION['is_login'] = TRUE;
	}
	
	function add($user_id,$nama_barang,$harga)
	{
		$add = mysqli_query($this->koneksi,"INSERT INTO cart VALUES ('','$user_id','$nama_barang','$harga')");
		return $add;
	}
} 


?>