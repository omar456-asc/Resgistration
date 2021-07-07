<?php include('files/server1.php'); ?>
<?php include('files/config1.php'); ?>	
<!DOCTYPE html>
<html lang="ar">
<head>
	<link rel="stylesheet" type="text/css" href="files/style.css">
	<link rel="stylesheet" href="files/normalize.css"/>
	<meta charset="utf-8"/>
	<title><?php echo $lang['title'] ?></title>

		<link rel="icon" type="image/ico" href="files/15.jpg" />

</head>
<body>
	<div class="header">
	<h2><?php echo $lang['title'] ?></h2>
	</div>
	<form dir="rtl" method="post" action="login.php">
		<?php include('files/errors.php') ?>
		<div class="input-group">
			<label><?php echo $lang['team'] ?></label>
			<input type="text" name="teamno" value="<?php echo $teamno; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['company'] ?></label>
			<input type="text" name="company" value="<?php echo $company; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['username1'] ?></label>
			<input type="text" name="username_3" value="<?php echo $username_3; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['electric'] ?></label>
			<input type="text" name="electricity" value="<?php echo $electricity; ?>">
		</div>
		<div class="input-group">
			<label><?php echo $lang['build'] ?></label>
			<input type="text" name="build" value="<?php echo $build; ?>">
		</div>
		<div class="input-group">
		<button type="submit" name="login" class="btn"><?php echo $lang['bttn'] ?></button>
		</div>
	</form>
	<div class="footer">
		<a href="login.php?lang=en">English</a> | <a href="login.php?lang=ar">عربي</a>
	</div>
</body>
</html>