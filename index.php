
<?php include_once "./pages/connection.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>All Nation Church Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					All &nbsp;  Nation  &nbsp;  Church 
				</span>
				<form action="#" method="POST" class="login100-form validate-form p-b-33 p-t-5">

					<div class="wrap-input100 validate-input" data-validate = "Enter Username">
						<input class="input100" type="text" name="USERNAME" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<input class="input100" type="Password" name="PASSWORD" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button name="login" class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
if(isset($_POST['login']))
			{
		$USERNAME = $_POST['USERNAME'];
		$PASSWORD = $_POST['PASSWORD'];

$sql = "SELECT  * FROM login WHERE  USERNAME = ? LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bindParam(1, $USERNAME, PDO::PARAM_STR);
$stmt->execute();

$row = $stmt->fetch();

if ($row['USERNAME']==$USERNAME && $row['PASSWORD']==$PASSWORD) { //verify pass

    if($USERNAME==$USERNAME){

      echo "<script>alert('LOGGED IN SUCCESSFULLY');</script>";
      echo ("<script>window.location.href = '../church/MainDashboard.php' </script>");

    }else{
        echo "<script>alert('USER ALREADY EXSISTED !!!');</script>";
    }
        // setcookie('USERNAME', $USERNAME, time() + 60 * 60 * 7);
        // setcookie('PASSWORD', $PASSWORD, time() + 60 * 60 * 7);

    $_SESSION['USERNAME'] = $USERNAME;
    header("location:../index.php");
    exit();

		   	}else{
       echo "<script>alert('Type Your Correct Credentials')</script>";
     }

// $sql = "SELECT  * FROM login WHERE  USERNAME = ? LIMIT 1";

// $stmt = $conn->prepare($sql);
// $stmt->bindParam(1, $USERNAME, PDO::PARAM_STR);
// $stmt->execute();

// $row = $stmt->fetch();

// if ($row && PASSWORD_verify($PASSWORD, $row['PASSWORD'])) { //verify pass
//     if (isset($_POST['login'])) {
//         setcookie('USERNAME', $USERNAME, time() + 60 * 60 * 7);
//         setcookie('PASSWORD', $PASSWORD, time() + 60 * 60 * 7);
//     }

//     $_SESSION['USERNAME'] = $USERNAME;
//     header("location:../index.php");
//     exit();
} else{

        exit();
}
?>
