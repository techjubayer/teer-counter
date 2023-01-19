<?php
	$con=mysqli_connect('localhost', 'teerctkk_G_User', ')AQ=%=!+IESg');
	mysqli_select_db($con,'teerctkk_teerresults');
	$q="select * from khanapara_results ORDER BY `Date` DESC";
	$result=mysqli_query($con,$q);
	$num_of_rows=mysqli_num_rows($result);
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Khanapara Previous Result</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="Style/Style.css">
</head>
<body>

	<?php
				for($i=0;$i<$num_of_rows;$i++){
					$row=mysqli_fetch_array($result);
			?>
					<div class="Horizontal_Box">
					<div class="subHorizontal_Box">
		<img class="Image" src="Image/k.jpg" alt="Image Not Found" style="float: left;">

		<div class="Vertical_Box" style="float: left;">
    		<h2><?php echo $row['Date']?></h2>
    		<h4>Khanapara</h4>
		  </div>
		  </div>

  		<table class="Table">
    		<tr class="Header_row">
    		  <td>F/R</td>
    		  <td>S/R</td>
    		</tr>

	    	<tr>
    			<th><?php echo $row['F_R'];?>
  				</th>
    		  			
    			<th><?php echo $row['S_R'];?>
  				</th>
    		</tr>
  		</table>

	</div>
			<?php
			
				}
			?>


	

</body>
</html>