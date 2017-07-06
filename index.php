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
	if (isset($_GET['Message']))
	{print " <script>
                    
                    alert('Make sure your are signed in so you can send us an email');
                    
              </script>  ";}
    session_start();
        include_once("heder.php");
		require_once("funkcija_i_klasa/function.php");
    ?>
	
	<div id="baner"></div name="end baner">

<div class="wraper">

	<div id="mein">
	
		<h1>Brands that we offer : </h1>
		
		<div id="brend">
		<?php
        $db=db();

        if(!$db)
        {
            echo "<h1 style='color:crimson'>Doslo je dogreske</h1>";
            exit();
        }


        $sql = "SELECT DISTINCT Make FROM sve";
        $rezult = mysqli_query($db, $sql);
        $i=0;
        while ($red = mysqli_fetch_object($rezult)) {

            echo "<img src='img/brend/brend$i.png' class='imgbrend' strana='" . $red->Make . "'/>";
            $i++;
        }

		?>
		</div name="end brend">
        <div id="odgovor"></div>
	</div name="end mein">
	
</div name="end wraper">	


	<?php include_once("futer.html"); ?>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $(".imgbrend").click(function(){
                $.get("ajax.php?strana="+$(this).attr('strana'), function(odgovor){
                    $("#odgovor").html(odgovor);
                });
            });
        });
    </script>
</body>
</html>

