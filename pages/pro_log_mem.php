<?php   
	session_start();                             
	include('koneksi.php');
	$user=$_POST['user2'];
	$pas=$_POST['password2'];
	$query = mysqli_query($konek,"SELECT *FROM registrasi_member where USERNAME='".$user."' ");
	$data = mysqli_fetch_assoc($query);
	if($user == $data["USERNAME"] && $pas == $data["PASSWORD"]){
		$_SESSION['use']=$user;
		echo "<script>alert('LOG IN SUCCES'); window.location=('member.php')</script>";
	}
	else{
		echo "<script>alert('LOG IN GAGAL'); window.location=('login_member.php')</script>";
	}
?>