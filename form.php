<?php
	function redirect_to($new_location) {
		header("Location: " . $new_location);
		exit;
	}

	if (isset($_POST['submit'])) {
		// 提交表单
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "Cynthia" && $password == "1984") {
			// 成功登录
			redirect_to("basic.html");
		} else {
			$message = "提交有误，请重新填写";
		}
	} else {
		$username = "";
		$message = "请登录.";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php echo $message; ?> <br>
	<form action="form_processing.php"> method="post">
		用户名: <input type="text" name="username" value="<?php echo htmlspecialchars($username) ?>"><br>
		密码: <input type="password" name="password" value=""><br>
		<br>
		<input type="submit" name="submit" value="登录">
	</form>
</body>
</html>

