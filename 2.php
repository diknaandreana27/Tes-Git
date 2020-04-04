<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- <script src="index2.js"></script> -->
</head>
<body>
	<form onsubmit="alert('berhasil');return false;">
		<input type="text" name="" title="7 karakter" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" placeholder="Username" required />
		<input type="password" name="" title="9 - 15 karakter di awali dengan Huruf Besar" pattern="(?=^.{9,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="Password" required />
		<input type="submit" value="login">
	</form>
</body>
</html>