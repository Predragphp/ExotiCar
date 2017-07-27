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

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <form action="" method="post" class="loginForm" id="cms" name="cms" enctype="multipart/form-data">
                      <div class="input-group clear">
                          <select id='user' name='user'>
							<option value='0'>== Izaberi korisnika ==</option>
							<?php
							
								$sql = "select * from user where potvrda = 1 AND status is null ";
								$rez = mysqli_query($db,$sql);
								while($red = mysqli_fetch_object($rez))
								{
									echo "<option value='$red->idusers'> $red->name: "." "." $red->email</option>";
								}
							
							?>
						  </select>
                          <input type="submit" id="btnsubmit" name="btnsubmit" class="form-control" value="Give admin" >
                       </div>
                    </form>
                </div>
            </div>
        </div>

<?php
	
	

if(isset($_POST["btnsubmit"]))
{
	$user=$_POST['user'];
	$sql = "UPDATE user SET status='Admin' WHERE idusers=$user";
	mysqli_query($db,$sql);
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