<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ECI</title>
	<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="register.css">



</head>
<body style="background: #42f46b">

	<h2 style="text-align:center"> 	Welcome to Election Commission of India </h2>

  <br>
  <br>


  <h3>Requirements for registering to vote</h3>

  <p>You can enroll as a Voter if you:</p>

  <ul>
    <li>are an Indian citizen</li>
    <li>have attained the age of 18 years on the qualifying date i.e. 1st of January of the year of revision of electoral roll</li>
    <li>are ordinarily resident of the part/polling area of the constituency where you want to be enrolled.</li>
    <li>are not disqualified to be enrolled as an elector</li>


  </ul>

	<div class="row  "  >

  		<form action="" method="POST" >


  		<div class="form-group">
  		<button  type="button" class="btn btn-primary" onclick="callRegister()" >New Voter Registration</button>
  		</div>

  		<!-- this function will open Register page -->
  		<script>
		function callRegister()
			{
    			 location.href = "register.html";
			} 
		</script>

  		
  		<div class="form-group">
  		<button type="button" class="btn btn-success" onclick="downloadId()">Download your voter ID</button>
  		</div>	

  		<!-- this function will open downloadID page -->
  		<script>
		function downloadId()
			{
    			 location.href = "downloadId.php";
			} 
		</script>


        </form>	
	</div>


</body>
</html>