<?php
session_start();

include "koneksi.php";

$user = [
	'nama' => $_POST['nama'],
	'username' => $_POST['username'],
	'password' => $_POST['password'],
	'password_confirmation' => $_POST['password_confirmation'],
];


if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	header("Location: register.php");
}

$query = "select * from users where username = ? limit 1";
$stmt = $mysqli->stmt_init();
$stmt->prepare($query);
$stmt->bind_param('s', $user['username']);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);

if($row != null){
	$_SESSION['error'] = 'Username yang anda masukkan sudah ada di database.';
	header("Location: register.php");

}else{

	$query = "insert into users (nama, username, password) values  (?,?,?)";
	$stmt = $mysqli->stmt_init();
	$stmt->prepare($query);
	$stmt->bind_param('sss', $user['nama'],$user['username'],$user['password']);
	$stmt->execute();
	$result = $stmt->get_result();
	var_dump($result);

	$_SESSION['message']  = 'Berhasil register ke dalam sistem. Silakan login dengan username dan password yang sudah dibuat.';
	header("Location: register	.php");

    if($user['password'] != $user['password_confirmation']){
	$_SESSION['error'] = 'Password yang anda masukkan tidak sama dengan password confirmation.';
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['username'] = $_POST['username'];
	header("Location: /register.php");
	return;
}

?>