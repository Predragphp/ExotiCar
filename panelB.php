<?php
session_start();
require_once("../funkcija_i_klasa/class_Logs.php");
require_once("../funkcija_i_klasa/function.php");
$db=db();
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

<div class="container" id="cars">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <form action="" method="post" class="loginForm" id="cmsC" name="cmsC" enctype="multipart/form-data">
                      <div class="input-group">
						<?php
							$sql="select * from sve ";
							$rez=mysqli_query($db,$sql);
							while($red = mysqli_fetch_object($rez))
							{
								echo "<input type='radio' name='cars' value='$red->Make|$red->numberMark'> $red->Make "." "." $red->Model "." "." $red->Model_Year<br>";
							}
						?>
					  <label for='fileUpload'>Dodaj sliku za automobil</label>
						  <input type="file" name="fileUpload" id="fileUpload">
						  <input type="submit" id="btnsubmit1" name="btnsubmit1" class="form-control" value="Submit"  >
                       </div>
                    </form>
                </div>
            </div>
        </div>
<?php

if(isset($_POST['btnsubmit1']))
{
	$Make=$_POST['cars'];
	$parts= explode("|", $Make);
	//$parts[0]= db->Make
	//$parts[1]= db->numberMark
 $targetPath="../img/cars/".$parts[0]."/slika$parts[1].jpg";
	
	
	
	if (file_exists($targetPath)) 
	{
		echo "Sorry, file already exists.";
		exit();
	}
	if($_FILES['fileUpload']['size'] < 1048576)
	{
		if(substr($_FILES['fileUpload']['name'], -3)=="jpg")
		{
			if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $targetPath))
			{
				
				$sqlImg = "UPDATE sve SET numberMark=$parts[1]+1 WHERE sve.Make = '$parts[0]'";
				mysqli_query($db, $sqlImg);
				header("location: panelB.php");
			} 
			else
			{
				echo "Sorry, there was an error uploading your file.";
			}
		}
		else
		{
			echo "Sorry, only JPG files are allowed.";
		}
	}
	else
	{
		echo "Sorry, your file is too large.";
	} 
} 

?>

<div class='container' id='brends'>
            <div class='row'>
                <div class='col-md-4 col-md-offset-4 text-center'>
                    <form action='' method='post' class='loginForm' id='cmsB' name='cmsB' enctype='multipart/form-data'>
                      <div class='input-group'>
					  <label for='fileToUpload'>Dodaj sliku za Brend</label>
						  <input type='file' name='fileToUpload' id='fileToUpload'>
						  <input type='text' name='number' id='number' value='<?php
						  $sql = "SELECT nbrSlika FROM img";
						  $rezult = mysqli_query($db, $sql);
						  while($red = mysqli_fetch_array($rezult))
						  {
							  echo "$red[0]";
						  }
						  ?>'> 
						 <input type='submit' id='btnsubmit' name='btnsubmit' class='form-control' value='Submit'  >
                       </div>
                    </form>
                </div>
            </div>
        </div>
<?php
if(isset($_POST['number']))
{
	
		$i=$_POST["number"];
		$targetPath="../img/brend/brend$i.png";
			
	
	
	
	if (file_exists($targetPath)) 
	{
		echo "Sorry, file already exists.";
		exit();
	}
	if($_FILES['fileToUpload']['size'] < 1048576)
	{
		if(substr($_FILES['fileToUpload']['name'], -3)=="png" )
		{
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetPath))
			{
				
				$i++;
				$sql = "UPDATE img SET nbrSlika='$i' WHERE id_img = 1";
				mysqli_query($db, $sql);
				header("location: panelB.php");
			} 
			else
			{
				echo "Sorry, there was an error uploading your file.";
			}
		}
		else
		{
			echo "Sorry, only PNG files are allowed.";
		}
	}
	else
	{
		echo "Sorry, your file is too large.";
	}
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