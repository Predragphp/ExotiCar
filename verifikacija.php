<?php
if(isset($_GET['email']) and isset($_GET['potvrda']))
{
    $email=$_GET['email'];
    $potvrda=$_GET['potvrda'];
    if (strlen($email) !== "" AND strlen($potvrda) !== "")
    $db=mysqli_connect("localhost", "root", "", "e5");
    $sql="SELECT * FROM user WHERE email='$email' AND potvrda='$potvrda'";
    $rez=mysqli_query($db, $sql);
    if(mysqli_num_rows($rez)==1)
    {
        $sql="UPDATE user SET potvrda='1' WHERE email='$email' AND potvrda='$potvrda'";
        mysqli_query($db, $sql);
        echo "<p style='color:green;'>Uspešno ste verifikovali Vaš mejl</p>
		<a href='http://localhost/e5/index.php'>Home Page</a>";
    }
    else
        echo "<p style='color:red;'>Korisnik se nije prijavio ili se već verifikovao</p>";
}
else
    echo "<p style='color:red;'>Nisu poslati parametri</p>";
?>