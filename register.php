<?php include('files/server.php'); ?>
<?php include('files/config.php'); ?>
<!DOCTYPE html>
<html lang="utf-8">
<head>
	<link rel="stylesheet" type="text/css" href="files/style.css">
	<link rel="stylesheet" href="files/normalize.css"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo $lang['title'] ?></title>

	<link rel="icon" type="image/ico" href="files/15.jpg" />

</head>
<body>
	<div class="header">
	<h2><?php echo $lang['title'] ?></h2>
	</div>
	<form dir="rtl" method="post" action="register.php">
		<?php include('files/errors.php');
		 ?>
		<div class="input-group">
			<label><?php echo $lang['reqno'] ?></label>
			<input type="text" name="request" value="<?php echo $request; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['username1'] ?></label>
			<input type="text" name="username_1" value="<?php echo $username_1; ?> ">
		</div>
		<div class="input-group">
			<label><?php echo $lang['username2'] ?></label>
			<input type="text" name="username_2" value="<?php echo $username_2; ?> ">
		</div>
		<div class="input-group">
			<label><?php echo $lang['phone'] ?></label>
			<input type="text" name="phone" value="<?php echo $phone; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['email'] ?></label>
			<input type="text" name="email" value="<?php echo $email; ?> ">
		</div>
		<div class="input-group">
		<button type="submit" name="register" class="btn"><?php echo $lang['bttn'] ?></button>
		</div>
		<p dir="rtl" lang="ar" style="color: E0E0E0;font-size: 20px;">
		 <a href="login.php"><?php echo $lang['team'] ?></a>
		</p>
	</form>
		<div class="footer">
		<a href="register.php?lang=en">English</a> | <a href="register.php?lang=ar">عربي</a>
	</div>

</body>
</html>