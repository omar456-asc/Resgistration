<?php include('files/server1.php'); ?>	
<!DOCTYPE html>
<html lang="ar">
<head>
	<link rel="stylesheet" type="text/css" href="files/style.css">
	<link rel="stylesheet" href="files/normalize.css"/>
	<meta charset="utf-8"/>
	<title>تسجيل</title>

		<link rel="icon" type="image/ico" href="files/15.jpg" />

</head>
<body>
	<div class="header">
	<h2>فريق العمل</h2>
	</div>
	<form dir="rtl" method="post" action="login.php">
		<?php include('files/errors.php') ?>
		<div class="input-group">
			<label>فريق العمل للطلب برقم</label>
			<input type="text" name="teamno" value="<?php echo $teamno; ?>">
		</div>
		<div class="input-group">
			<label>الشركة المنفذة</label>
			<input type="text" name="company" value="<?php echo $company; ?>">
		</div>
		<div class="input-group">
			<label>المهندس المسئول</label>
			<input type="text" name="username_3" value="<?php echo $username_3; ?>">
		</div>
		<div class="input-group">
			<label>اعمال الكهرباء</label>
			<input type="text" name="electricity" value="<?php echo $electricity; ?>">
		</div>
		<div class="input-group">
			<label>اعمال التركيب</label>
			<input type="text" name="build" value="<?php echo $build; ?>">
		</div>
		<div class="input-group">
		<button type="submit" name="login" class="btn">حفظ</button>
		</div>
	</form>
</body>
</html>