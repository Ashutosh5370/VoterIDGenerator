


<?php
		require_once('fpdf/fpdf.php');

		$submit_id = $_GET['id'];

		session_start();

		$db = mysqli_connect('localhost', 'root', '', 'voter');

		$sql = "SELECT * FROM info where id= $submit_id  ";
	
		$result = mysqli_query($db, $sql);	

		$row = mysqli_fetch_array($result);

		$image =  $row['imgpath'];
		$name = $row['name'];
		$age = $row['age'];
		$address = $row['address'];
		$state = $row['state'];
		$pincode =$row['pincode'];
		$sex = $row['sex'];
		$father = $row['father'];


	


		$pdf = new fpdf();
		$pdf->AddPage();//dont change this 
		$pdf->Image('images/id.jpg',13,50,90,160); //final
		$pdf->Image('images/id2.jpg',113,50,90,160); //final

		$pdf->AddFont('courier','','courier.php');

		$pdf->Image($image,55,100,40,50);


		$pdf->SetFont('Arial', 'B', 17);  //name
		$pdf->SetXY(59, 163);
		$pdf->Cell(40, 10, $name, 0, 2, 'L');

		 //father name
		$pdf->SetXY(59, 171);
		$pdf->Cell(40, 10, $father, 0, 2, 'L');
		
		
		 //sex
		$pdf->SetXY(59, 180);
		$pdf->Cell(40, 10, $sex, 0, 2, 'L');


		  //DOB
		$pdf->SetXY(59, 188);
		$pdf->Cell(40, 10, $age, 0, 2, 'L');

		



		//street
		$pdf->SetXY(122, 75);
		$pdf->Cell(40, 10, $address, 0, 2, 'L');

		//pincode

		$pdf->SetXY(122, 80);
		$pdf->Cell(40, 10, $pincode, 0, 2, 'L');

		//state

		$pdf->SetXY(122, 85);
		$pdf->Cell(40, 10, $state, 0, 2, 'L');



	


		//date of issue
		$pdf->SetXY(150, 116);
		$pdf->Cell(40, 10, '01/05/2019', 0, 2, 'L');
		
	


		
		$pdf->Output();
	

	
?>