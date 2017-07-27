<?php
session_start();
require_once("../funkcija_i_klasa/class_Logs.php");
require_once("../funkcija_i_klasa/function.php");
$db=db();

if(!$db)
{
    echo "<h1 style='color:crimson'>Doslo je dogreske</h1>";
 
}
?>
<html>

<head>

    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title> Car Show </title>

</head>

<body>

<?php include_once("heder_user.php"); ?>

<div id="baner"></div name="end baner">

<div class="wraper">

    <div id="mein">



			<div class='container'>
            <div class='row'>
                <div class='col-md-4 col-md-offset-4 text-center'>
                    <form action='' method='post' class='loginForm' id='cms' name='cms' enctype='multipart/form-data'>
                      <div class='input-group clear'>
                          <input type='text' id='Make' name='Make' class='form-control' placeholder='Bugatti'>
                          <input type='text' id='Model' name='Model' class='form-control' placeholder='Veyron'>
                          <input type='text' id='MYear' name='MYear' class='form-control' placeholder='2014'>
                          <input type='text' id='Mileage' name='Mileage' class='form-control' placeholder='11,000 KM'>
                          <input type='text' id='Engine' name='Engine' class='form-control' placeholder='8.0 L'> 
                          <input type='text' id='Cylinder' name='Cylinder' class='form-control' placeholder='W16'>
                          <input type='text' id='Transmission' name='Transmission' class='form-control' placeholder='Automatic'>
                          <input type='text' id='EColor' name='EColor' class='form-control' placeholder='Platinum Silver'>
                          <input type='text' id='IColor' name='IColor' class='form-control' placeholder='Ivory'>
                          <input type='text' id='Door' name='Door' class='form-control' placeholder='2'>
                         <input type='submit' id='submit' name='submit' class='form-control' value='Submit' >
                       </div>
                    </form>
                </div>
            </div>
        </div>


	
<?php


if(isset($_POST['submit']))
{
	$Make=@$_POST['Make'];
	$Model=@$_POST['Model'];
	$MYear=@$_POST['MYear'];
	$Mileage=@$_POST['Mileage'];
	$Engine=@$_POST['Engine'];
	$Cylinder=@$_POST['Cylinder'];
	$Transmission=@$_POST['Transmission'];
	$EColor=@$_POST['EColor'];
	$IColor=@$_POST['IColor'];
	$Door=@$_POST['Door'];

	if(strlen($Make)!="" AND strlen($Model)!="" AND strlen($MYear)!="" AND strlen($Mileage)!="" AND strlen($Engine)!="" AND strlen($Cylinder)!="" AND strlen($Transmission)!="" AND strlen($EColor)!="" AND strlen($IColor)!="" AND strlen($Door)!="")
	{
		if(preg_match("/[a-z]/", $Make) AND preg_match("/[A-Z]/", $Make) AND !preg_match("/\d/", $Make) AND !preg_match("/[^a-zA-Z0-9\-\/]/", $Make))
		{
			$sql = "INSERT INTO `sve` (`id`, `Make`, `Model`, `Model_Year`, `Mileage`, `Engine`, `Cylinder`, `Transmission`, `Exterior_Color`, `Interior_Color`, `Door`, `numberMark`) VALUES (NULL, '$Make', '$Model', '$MYear', '$Mileage', '$Engine', '$Cylinder', '$Transmission', '$EColor', '$IColor', '$Door', '0')";
			mysqli_query($db, $sql);
		
		}
		else echo "<script>

                    alert('Your input can not have numbers and special characterss ');
                    
              </script>";
	}
	else echo"<script>

                    alert('Make sure you enter the required information');
                    
              </script>";
} 




?>

       
    </div name="end main">
</div name="end wraper">

<?php include_once("futer_user.html"); ?>




<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>

</html>