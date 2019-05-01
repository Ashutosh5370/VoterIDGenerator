
<?php


	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'voter');

	//intialize variables

	$name = "";
	$age  = 0;
	$address = "";
	$state = "";
	$pincode =0;
	$uid = 0;




	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$state = $_POST['state'];
		$sex = $_POST['sex'];
		$pincode =$_POST['pincode'];
		$uid = $_POST['uid'];
		




		// Get image name
  		$image = $_FILES['img']['name'];

  		// Get text
  		$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  		// image file directory
  		$target = "images/".basename($image);


  		$sql = "INSERT INTO  info (name  , age ,address , state , pincode , father , imgpath ,sex  ) VALUES ('$name', '$age'   
  		 ,'$address' ,'$state' , '$pincode' , '$uid' , '$target' ,'$sex') ";

		mysqli_query($db,$sql); 


		if (move_uploaded_file($_FILES['img']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  		}else{
  			$msg = "Failed to upload image";
  		}

		$_SESSION['message'] = "data saved"; 
				header('location: index.php');




	}		

?>


