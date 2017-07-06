<?php

require_once("../funkcija_i_klasa/class_Logs.php");
require_once("../funkcija_i_klasa/function.php");
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
                    <div class="search-box">
                        <form action="" class="loginForm" method="post" id="forma" name="forma">
                            <div class="input-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                                <input type="password" id="paw" name="paw" class="form-control" placeholder="Password">
                                <input type="submit" id="submit" name="submit" class="form-control" value="Submit" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div name="end main">
</div name="end wraper">
<?php
$db=db();

if(!$db)
{
    echo "<h1 style='color:crimson'>Doslo je dogreske</h1>";
    exit();
}
if(isset($_POST['email']) and isset($_POST['paw']))
{
    $email=$_POST['email'];
    $lozinka=$_POST['paw'];
    $sql="select * from user where email='".$email."'";
    $rez=mysqli_query($db, $sql);
    $red = mysqli_fetch_object($rez);
    $potvrda=@$red->potvrda;
    $emailP=@$red->email;
    $pass=@$red->pass;
    if(strlen($email)!="" and strlen($lozinka)!="" and $potvrda==="1")
    {
        $sql="SELECT * FROM user WHERE email='$email'  AND pass=password('$lozinka.$so')";
        $result=mysqli_query($db, $sql);
        if(mysqli_num_rows($result)==1)
        {
            $red=mysqli_fetch_object($result);
            session_start();
            $_SESSION['email']=$red->email;
            $_SESSION['name']=$red->name;
            $_SESSION['lozinka']=$red->pass;
            $obj=new Logs("Korisnik ".$red->name  ." | ".$red->email ." se uspesno prijavio\r\n");
            $obj->dodajLog();
            header("Location: ../index.php");
        }
       if(strlen($email)==$emailP or strlen($lozinka)==$pass)
        {
            echo "<script>

                    alert('Make sure your email and password are correct');
                    
              </script>";
            $obj=new Logs("Neuspeo pokusaj prijavljivanja. Nije dobro korime i lozinka\r\n");
            $obj->dodajLog();
        }
    }
    if(strlen($email)=="" or strlen($lozinka)=="")
        {
            echo "<script>

                    alert('Make sure you enter the required information');
                    
              </script>";
        }
    if ($potvrda !== "1")
    {
        echo "<script>

                    alert('Make sure you verified your email');
                    
              </script>";
    }

}
?>

<?php include_once("futer_user.html"); ?>




<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../js/main.js"></script>
</body>

</html>