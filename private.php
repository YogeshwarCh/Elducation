<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_POST['submit'])) {
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pin = $_POST['pin'];

		$sql = "SELECT * FROM centers WHERE city='$city'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			echo "<h2 class='text-centers'>Available teachers at your location are displayed.</h2>"."<br>"."<br>";
			$sql = "SELECT * FROM teachers WHERE pin='$pin'";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				while ($row = mysqli_fetch_assoc($result)) {
					// echo '<script type="text/javascript">document.getElementById("printLoc").innerHTML += "<h2>Lalith</h2>" </script>' ;
					echo $row['t_name']." ".$row['phone']."<br>";
				}
				$city = "";
				$state = "";
				$pin = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<h2 class='text-centers'>We are sorry, we have no centers in your city</h2>";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="styleSelect.css">

	<title>Address</title>
</head>
<body>
	<div class="row container">
		<form action="" method="POST" class="col-lg-12 login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Address</p>
			<div class="input-group">
				<input type="text" placeholder="City" name="city" value="<?php echo $city; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="State" name="state" value="<?php echo $state; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Pincode" name="pin" value="<?php echo $pin; ?>" required>
            </div>
			<div class="input-group">
				<button name="submit" class="btn">Submit</button>
			</div>
		</form>
	</div>

	<div id="printLoc">

	</div>

</body>
</html>