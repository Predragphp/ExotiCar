<div id="heder" class="clear">
<div class="wraper">	
		<div id="logo">
			<img src="logo.png">
		</div name="end logo">
		
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="AllCars.php">All Cars</a></li>
				<li><a href="kontakt.php">Contact us</a></li>
                <div class="btn-group">
				<?php
				
				if(isset($_SESSION['email']))
                            echo "<li><a href='user/odjava.php'>Log out</a></li>";
				
				else
                  echo  "<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                       
                       if(!isset($_SESSION['email']))
                           echo " Sign up / Sign in";
                       
                   echo" </button>
                    <ul class='dropdown-menu'>";
                        
                        if(!isset($_SESSION['email']))
                            
                            echo "<li><a href='user/registracija.php'>Sign Up</a></li>
                                  <li><a href='user/prijava.php'>Sign In</a></li>";
                        ?>
                    </ul>
                </div>
			</ul>
			
		</div name="end nav">		

</div name="end wraper">
		
	</div name="end heder">