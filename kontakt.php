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

?>

<div id="baner"></div name="end baner">

<div id="wraper">
<div id="mein">
    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Feel free to <small> contact us if you have any question</small></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form id="contact_form" action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for='name'>
                                        Name</label>
                                    <input type="text" class="form-control" id="name" value="<?php
                                    if (isset($_SESSION['email']))
                                    {
                                        echo $_SESSION['name'];
                                    }
									?>"placeholder='Name'/>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <input type="text" class="form-control" id="subject"  name="subject" placeholder="Subject" required="required" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="btnContactUs" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div name="end mein">
</div name='end wraper'>

<?php

if (isset($_POST['send']) and isset($_SESSION['email']))
{
    $name=$_SESSION['name'];
    $email=$_SESSION['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $to='ExotiCars@yahoo.com';
    $subj=$subject;
    $msg=$message;
// use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    $heders="From:".$name | $email."\r\n";

    mail($to, $subj, $msg, $heders);
}

if (!isset($_SESSION['email']))
{
	/* echo " <script>
                    document.getElementById('btnContactUs').disabled=true;
                    alert('Make sure your are signed in');
                    setTimeout(\"location.href = 'http://localhost/e5/index.php';\",1500);
              </script>";
			   */
}
else 
	
	echo "<script>document.getElementById('name').disabled=false;</script>";




?>




<?php
    include_once ("futer.html");
?>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/main.js"></script>