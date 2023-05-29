<?php
include "connect.php";
if(isset($_POST['login'])){
$user_name=$_POST['username'];
$user_password=$_POST['password'];
$sql="SELECT * from users  WHERE username='$user_name' and password='$user_password'";
$result=mysqli_query($connect,$sql);
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
if($count>0){
  
  header('Location:dashboard.html');
}else{
  $msg='اسم المستخدم او الباسوورد خاطئ';
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet"></link>
	<title>تسجيل الدخول</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- لجعل الصفحة ملائمة لحجم الشاشة -->
	<style>
		h1 {
			text-align: center;
			font-family: Cairo;
			font-size: 30px;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			margin-top: 50px;
		}
		input {
			margin-bottom: 10px;
			padding: 5px;
			font-size: 24px;
			border-radius: 5px;
			border: none;
			width: 200px;
			text-align: center;
		}
                label {
			display: block;
                        font-family: Cairo;
			margin-bottom: 5px;
			font-size: 24px;
			color: #333;
		} 
		button {
			background-color: #4CAF50;
			color: white;
			padding: 10px 15px;
			margin-top: 10px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 24px;
		}
	</style>
           <style>
input[type=text], input[type=password] {
    background-color: #f2f2f2;
    border: none;
    color: black;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

input[type=text]:hover, input[type=password]:hover {
    background-color: #ddd;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #3e8e41;
}
</style>
            
</head>
<body>
	<div style="text-align: center;">
           <img src="https://drive.google.com/uc?id=1-X7eDbOc3mgydgeH2ThWN1roT4aGHFFR" style="width: 40%; height: 40%;" alt="صورة">
        </div>
	<h1>تسجيل الدخول</h1>
	<form method="POST">
		<label for="username">(اسم المستخدم)</label>
			<input type="text" id="username" name="username" placeholder="ادخل اسم المستخدم" required>
		<label for="password">(كلمة المرور)</label>
			<input type="password" id="password" name="password" placeholder="ادخل كلمة المرور" required>
		<button type="submit" name="login">تسجيل الدخول</button>
	</form>

	
</body>
</html>
