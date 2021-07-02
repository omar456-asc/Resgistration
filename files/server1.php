<?php
	$teamno = "";
	$company = "";
	$username_3 = "";
	$electricity = "";
	$build = "" ;
	$errors = array();
		// connect to the database
	$link = mysqli_connect("localhost", "root", "", "registration") or die($link);
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if register button is clicked

	if(isset($_POST['login'])){
		$teamno = mysqli_real_escape_string($link, $_POST['teamno']);
		$company = mysqli_real_escape_string($link, $_POST['company']);
		$username_3 = mysqli_real_escape_string($link, $_POST['username_3']);
		$electricity = mysqli_real_escape_string($link, $_POST['electricity']);
		$build = mysqli_real_escape_string($link, $_POST['build']);

		//ensure that the form field are filled properly

		if (empty($teamno)) {
			array_push($errors, "ادخل رقم الطلب"); 
		}
		if (empty($company)) {
			array_push($errors, "ادخل الشركة المنفذة"); 
		}
		if (empty($username_3)) {
			array_push($errors, "ادخل المهندس المسئول"); 
		}
		if (empty($electricity)) {
			array_push($errors, "ادخل اعمال الكهرباء"); 
		}
		if (empty($build)) {
			array_push($errors, "ادخل  اعمال البناء"); 
		}
		// if there are no errors, save user to the database
		if (count($errors) == 0) {
			//$password = md5($password_1); //encrypt password before storing in database (security)
			$sql = "INSERT INTO teams (teamno, company, username_3, electricity, build) 
						VALUES ('$teamno', '$company','$username_3', '$electricity', '$build')";
			mysqli_query($db,$sql);
			$sq = "SELECT id, teamno, company, username_3, electricity , build FROM teams";
			$result = mysqli_query($link, $sq);

				if (mysqli_num_rows($result) > 0) {
  					// output data of each row
  				while($row = mysqli_fetch_assoc($result)) {
  				$myfile = fopen("files/team.txt", "a") or die("Unable to open file!");
    			$txt = "id - " . $row["id"]. " - " . $row["teamno"]. " - " . $row["company"]." - " .  $row["username_3"]." - " .  $row["electricity"]. " - " . $row["build"]. "";
    			fwrite($myfile, $txt);
    			fclose($myfile);
  				}
				} else {
  					echo "0 results";
						}			
			mysqli_close($link);
            header('location: register.php');
		}


	}
?> 