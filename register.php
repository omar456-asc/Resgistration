<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="normalize.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>تسجيل</title>

</head>
<body>
	<div dir="rtl" class="header">
	<h2>طلب تسجيل</h2>
	</div>
	<form dir="rtl" method="post" action="register.php">
		<div class="input-group">
			<label>رقم الطلب</label>
			<input type="text" name="request">
		</div>
		<div class="input-group">
			<label>اسم العميل</label>
			<input type="text" name="username_1">
		</div>
		<div class="input-group">
			<label>اسم المسئول</label>
			<input type="text" name="username_2">
		</div>
		<div class="input-group">
			<label>رقم التلفون</label>
			<input type="text" name="phone">
		</div>
		<div class="input-group">
			<label>الايميل</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
		<button type="submit" name="register" class="btn">تأكيد</button>
		</div>
		<p dir="rtl" lang="ar" style="color: E0E0E0;font-size: 20px;">
			already a member? <a href="login.php">تريد فريق عمل</a>
		</p>
	</form>
</body>
</html>