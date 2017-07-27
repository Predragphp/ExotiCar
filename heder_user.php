<div id="heder" class="clear">
<div class="wraper">	
		<div id="logo_user">
			<img src="../img/logo.png">
		</div name="end logo">
		
		<div id="nav">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../AllCars.php">All Cars</a></li>
				<li><a href="../kontakt.php">Contact us</a></li>
				<?php
				
				if(isset($_SESSION['email']) AND isset($_SESSION['status'])!='Admin')
                            echo "<li id='noA'><a href='odjava.php'>Log out</a></li>";
				?>
                <div id='navB' class="btn-group ">
				
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <?php
                       if(!isset($_SESSION['email'])){
                           echo " Sign up / Sign in";
					   }
					   if(isset($_SESSION['email']) AND isset($_SESSION['status'])=='Admin'){
                            echo "Admin panel";
                       }
					   ?>
                    </button>
                    <ul class="dropdown-menu">
                        <?php
                        if(!isset($_SESSION['email']))
                        {    
                            echo "<li><a href='registracija.php'>Sign Up</a></li>
                                  <li><a href='prijava.php'>Sign In</a></li>";
						}		  
						if(isset($_SESSION['email']) AND isset($_SESSION['status'])=='Admin')
                        {
							echo "<li><a href='panelA.php'>Admins</a></li>";
							echo "<li><a href='panelB.php'>Images</a></li>";
							echo "<li><a href='panelC.php'>New Cars</a></li>";
                            echo "<li><a href='odjava.php'>Log out</a></li>";
                        }
						?>
                    </ul>
                </div>
			</ul>
			
		</div name="end nav">	

</div name="end wraper">
		
	</div name="end heder">