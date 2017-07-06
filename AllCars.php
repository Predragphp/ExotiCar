<html>

<head>

	<meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	<title> Car Show </title>
	
</head>

<body>
 
	<?php
    session_start();
        include_once("heder.php");
		require_once("funkcija_i_klasa/function.php");
    ?>
	
	<div id="baner"></div name="end baner">

<div class="wraper">

	<div id="mein">
				
<?php 

				
$db=db();

if(!$db)
	{
		echo "<h1 style='color:crimson'>Doslo je dogreske</h1>";
		exit();
	}

////////////////////////////////////////////////////////////////////			

		$sql="select * from sve";
		$rezult=mysqli_query($db, $sql);
		mysqli_num_rows($rezult);
		$i=0;
////////////////////////////////////////////////////////////////////
     while($red=mysqli_fetch_object($rezult))
     {

         $sql_s="select folder, img from img where img.car='".$red->id."'";
         $ressult=mysqli_query($db, $sql_s);
         $row=mysqli_num_rows($ressult);
		 echo"<div class='container'>
				<div class='row '>";
         while($rows=mysqli_fetch_object($ressult))
         {
			echo"
				<div class='col-md-4'>
				<a href='#' class='thumbnail'>
				  <img src='".$rows->folder.$rows->img."' alt'".$red->Make.$red->Model."'>
				</a>
				</div>
			 ";
         }

		 echo"</div>
				</div>";
		
		echo "<table class='stats'>".
			"<tr>
				<td>"."Make: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Make."</td>
			</tr>".
			"<tr>
				<td>"."Model: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Model."</td>
			</tr>".
						
			"<tr>
				<td>"."Model Year: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Model_Year."</td>
			</tr>".
						
			"<tr>
				<td>"."Mileage: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Mileage."</td>
			</tr>".
						
			"<tr>
				<td>"."Engine: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Engine."</td>
			</tr>".
						
			"<tr>
				<td>"."Cylinder: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Cylinder."</td>
			</tr>".
						
			"<tr>
				<td>"."Transmission: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Transmission."</td>
			</tr>".
			
			"<tr>
				<td>"."Exterior Color: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Exterior_Color."</td>
			</tr>".
			
			"<tr>
				<td>"."Interior Color: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Interior_Color."</td>
			</tr>".
						
			"<tr>
				<td>"."Door: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Door."</td>
			</tr>".
						"</table><hr>";
		
		
	}
			
			
			
			
?>
			
	</div name="end mein">
	
</div name="end wraper">





    <?php include_once("futer.html"); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>
