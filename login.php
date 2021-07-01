<!DOCTYPE html>
<html lang="ar">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="normalize.css"/>
	<meta charset="utf-8"/>
	<title>تسجيل</title>

</head>
<body>
	<div class="header">
	<h2>فريق العمل</h2>
	</div>
	<form method="post" action="login.php">
		<div class="input-group">
			<label>فريق العمل للطلب برقم</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>الشركة المنفذة</label>
			<input type="text" name="email">
		</div>
		<div class="input-group">
			<label>المهندس المسئول</label>
			<input type="text" name="password_1">
		</div>
		<div class="input-group">
			<label>اعمال الكهرباء</label>
			<input type="text" name="password_2">
		</div>
		<div class="input-group">
			<label>اعمال التركيب</label>
			<input type="text" name="password_3">
		</div>
		<div class="input-group">
		<button type="submit" name="login" class="btn">حفظ</button>
		</div>
		<p>
			already a member? <a href="register.php">تريد فريق عمل</a>
		</p>
	</form>
</body>
</html>