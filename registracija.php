<html>

<head>

    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title> Car Show </title>

</head>

<body>

<?php
session_start();
    include('heder_user.php');
?>

<div id="baner"></div name="end baner">

<div class="wraper">

    <div id="mein">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <div class="search-box">
                        <form action="" class="loginForm" method="post" id="forma" name="forma">
                            <div class="input-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Full Name">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                <input type="password" id="paw" name="paw" class="form-control" placeholder="Password">
                                <input type="submit" id="submit" name="submit" class="form-control" value="Submit" >
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="aro-pswd_info">
                        <div id="pswd_info">
                            <h4>Password must be requirements</h4>
                            <ul>
                                <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                <li id="number" class="invalid">At least <strong>one number</strong></li>
                                <li id="space" class="invalid">can`t<strong> use [~,!,@,#,$,%,^,&,*,-,=,.,;,']</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div name="end mein">

</div name="end wraper">
<?php

$vreme=date("F j, Y, g:i a");
include('../funkcija_i_klasa/function.php');
include('../funkcija_i_klasa/class_Logs.php');
$ip=getrealip();
$obj=new Logs("Dolazak na stranicu REGISTRACIJA od strane $ip u vreme $vreme\r\n\r\n");
$obj->dodajLog();
$db=db();

if(!$db)
{
    echo "<h1 style='color:crimson'>Doslo je dogreske</h1>";
    exit();
}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['paw'];
    $potvrda = time();
    $sql="select * from user where email='".$email."'";
    $rez=mysqli_query($db, $sql);
    mysqli_num_rows($rez);

        $red = @mysqli_fetch_object($rez);
        $dupE = @$red->email;
       
    if (strlen($name) !== "" AND strlen($email) !== "" AND $email != $dupE AND strlen($password) !== "")
    {
        
        if(preg_match("/[a-z]/", $password) AND preg_match("/[A-Z]/", $password) AND preg_match("/\d/", $password) AND !preg_match("/[^a-zA-Z0-9\-\/]/", $password))
        {
            
            $sql = "INSERT INTO user (name, email, pass, potvrda) VALUES ('$name', '$email', password('$password.$so'), '$potvrda') ";
				
            if (mysqli_query($db, $sql))
                $to=$email;
            $subject ='Potvrdite registraciju';
            $message ="<html><body><h4>Link za potvrdu email adrese<h4><a href='https://exoticar.000webhostapp.com/verifikacija.php?email=$email&potvrda=$potvrda' target='_blank'>Click here to verify your email</a></body></html>";
            $headers = "From: exoticars@yahoo.com \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            mail($email, $subject , $message, $headers);


        }
    }
    if (strlen($name) == "" OR strlen($email) == ""  OR strlen($password) == "")
    {
        echo "<script>

                    alert('Make sure you enter the required information');
                    
              </script>";
    }
    if(!preg_match("/[a-z]/", $password)){
        echo "<script>

                    alert('Your password must contains at least one letter');
                    
              </script>";
    }

    if(!preg_match("/[A-Z]/", $password)){
        echo "<script>

                    alert('Your password must contains at least one capital letter');
                    
              </script>";
    }

    if(!preg_match("/\d/", $password)){
    echo "<script>

                    alert('Your password must contains least one number');
                    
              </script>";
    }

    if(preg_match('/[^a-zA-Z0-9\-\/]/', $password))
    {
    echo "<script>

                    alert('Your password contains illegal characterss');
                    
              </script>";
    }

    if($email == $dupE)
    {
        echo "<script>

                    alert('Email already exists');
                    
              </script>";
    }

}

include_once("futer_user.html");
?>



<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>

</html>
