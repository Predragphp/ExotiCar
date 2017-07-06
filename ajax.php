<?php
require_once("funkcija_i_klasa/function.php");
	$strana=$_GET['strana'];
    $db=db();
$sql="select * from sve where Make LIKE '$strana'";
$rezult=mysqli_query($db, $sql);
mysqli_num_rows($rezult);
////////////////////////////////////////////////////////////////////
     while($red=mysqli_fetch_object($rezult))
     {

         $sql_s="select folder, img from img where img.car='".$red->id."'";
         $ressult=mysqli_query($db, $sql_s);
         $row=mysqli_num_rows($ressult);
		 echo"<div class='container'>
				<div class='row '>";
         while($rows=mysqli_fetch_object($ressult))
         {
			echo"
				<div class='col-md-4'>
				<a href='#' class='thumbnail'>
				  <img src='".$rows->folder.$rows->img."' alt'".$red->Make.$red->Model."'>
				</a>
				</div>
			 ";
         } 
		 echo"</div>
				</div>";

    echo "<table class='stats'>".
        "<tr>
				<td>"."Make: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Make."</td>
			</tr>".
        "<tr>
				<td>"."Model: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Model."</td>
			</tr>".

        "<tr>
				<td>"."Model Year: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Model_Year."</td>
			</tr>".

        "<tr>
				<td>"."Mileage: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Mileage."</td>
			</tr>".

        "<tr>
				<td>"."Engine: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Engine."</td>
			</tr>".

        "<tr>
				<td>"."Cylinder: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Cylinder."</td>
			</tr>".

        "<tr>
				<td>"."Transmission: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Transmission."</td>
			</tr>".

        "<tr>
				<td>"."Exterior Color: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Exterior_Color."</td>
			</tr>".

        "<tr>
				<td>"."Interior Color: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Interior_Color."</td>
			</tr>".

        "<tr>
				<td>"."Door: "."</td>
					<td>"."&nbsp;&nbsp;".$red->Door."</td>
			</tr>".
        "</table><hr>";


}




?>