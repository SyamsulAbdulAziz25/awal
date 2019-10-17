<?php   
	session_start();                             
	include('koneksi.php');
	$query = mysqli_query($konek,"SELECT * FROM tb_login_admin  ");
	$data = mysqli_fetch_assoc($query);
	$user=$_POST['user'];
	$pas=$_POST['password'];
	if($user == $data["USERNAME"] && $pas == $data["PASSWORD"]){
		$_SESSION['use']=$user;
		echo "<script>alert('LOG IN SUCCES'); window.location=('admin.php')</script>";
	}
	else{
		echo "<script>alert('LOG IN GAGAL'); window.location=('login.php')</script>";
	}
	

?>