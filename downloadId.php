
<?php  include('processing.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <title>Voter Register</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="register.css">

<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">



</head>

<body>



<form  action="search.php"  method="post" class="jumbotron">
 
  <h4 style="font-size:3vw;">Search And Download Voter ID </h4>

  <label>
    <p class="label-txt">Enter your Name</p>
    <input type="text" class="form-control" name="name">
  </label>
  
<label>
    <p class="label-txt">Enter your State</p>
    <select id="state" class="form-control" name="area">
      <option> West Bengal</option>
      <option>Uttarakhand </option>
      <option> Uttar Pradesh</option>
      <option>Tripura </option>
      <option> Telangana</option>
      <option>Tamil Nadu </option>
      <option> Sikkim</option>
      <option> Rajasthan</option>
      <option> Punjab</option>
      <option> Odisha</option>
      <option>Nagaland </option>
      <option> Mizoram</option>
      <option> Meghalaya</option>
      <option>Manipur </option>
      <option> Maharashtra</option>
      <option>Madhya Pradesh </option>
      <option> Kerala</option>
      <option> Karnataka</option>
      <option> Jharkhand</option>
     <option>Jammu and Kashmir </option>
      <option> Himachal Pradesh</option>
      <option>Haryana </option>
      <option>Gujarat</option>
      <option>Goa </option>
      <option>Chhattisgarh </option>
      <option>Bihar </option>
      <option> Assam</option>
      <option>Arunachal Pradesh </option>
      <option> Andhra Pradesh</option>



      </select>
  </label>
  

  <button class="btn btn-primary" type="submit" name="submit">Search </button>
</form>


</div>
</body>
</html>

