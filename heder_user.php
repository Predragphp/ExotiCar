<div id="heder" class="clear">
<div class="wraper">	
		<div id="logo_user">
			<img src="../logo.png">
		</div name="end logo">
		
		<div id="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../AllCars.php">All Cars</a></li>
				<li><a href="../kontakt.php">Contact us</a></li>
                <div class="btn-group">
				<?php
				
				if(isset($_SESSION['email']))
                            echo "<li><a href='odjava.php'>Log out</a></li>";
				
				?>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php
                       if(!isset($_SESSION['email']))
                           echo " Sign up / Sign in";
                       ?>
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        if(!isset($_SESSION['email']))
                            
                            echo "<li><a href='registracija.php'>Sign Up</a></li>
                                  <li><a href='prijava.php'>Sign In</a></li>";
                        ?>
                    </ul>
                </div>
			</ul>
			
		</div name="end nav">	

</div name="end wraper">
		
	</div name="end heder">