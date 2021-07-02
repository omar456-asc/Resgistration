<?php
	$username_1 = "";
	$username_2 = "";
	$email = "";
	$request = "";
	$phone = "" ;
	$errors = array();
		// connect to the database
	$link = mysqli_connect("localhost", "root", "", "registration") or die($link);
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// if register button is clicked

	if(isset($_POST['register'])){
		$username_1 = mysqli_real_escape_string($link, $_POST['username_1']);
		$username_2 = mysqli_real_escape_string($link, $_POST['username_2']);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$request = mysqli_real_escape_string($link, $_POST['request']);
		$phone = mysqli_real_escape_string($link, $_POST['phone']);

		//ensure that the form field are filled properly

		if (empty($username_1)) {
			array_push($errors, "ادخل اسم العميل"); 
		}
		if (empty($username_2)) {
			array_push($errors, "ادخل اسم المسئول"); 
		}
		if (empty($email)) {
			array_push($errors, "ادخل الايميل"); 
		}
		if (empty($phone)) {
			array_push($errors, "ادخل رقم التلفون"); 
		}
		if (empty($request)) {
			array_push($errors, "ادخل رقم الطلب "); 
		}
		// if there are no errors, save user to the database
		if (count($errors) == 0) {
			//$password = md5($password_1); //encrypt password before storing in database (security)
			$sql = "INSERT INTO users (username_1, username_2, email, phone, request) 
						VALUES ('$username_1', '$username_2','$email', '$phone', '$request')";
			mysqli_query($db,$sql);
			//$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
			//fwrite($myfile, $txt);
			//fclose($myfile);
			$sq = "SELECT id, username_1, username_2, email, phone , request FROM users";
			$result = mysqli_query($link, $sq);

				if (mysqli_num_rows($result) > 0) {
  					// output data of each row
  				while($row = mysqli_fetch_assoc($result)) {
  				$myfile = fopen("files/task.txt", "a") or die("Unable to open file!");
    			$txt = "id - " . $row["id"]. " - " . $row["username_1"]. " - " . $row["username_2"]." - " .$row["email"]. " - ".$row["phone"]. " - " .$row["request"]. "";
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