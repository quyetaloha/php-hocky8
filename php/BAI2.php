<?php

	$aa=array();
	$aa[0]=0;$aa[1]=1;
	$i=2;
	while($i<100){
		$aa[$i]=$aa[$i-1]+$aa[$i-2];
		$i++;

	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="3px" style="border-color: red">
			<?php
				$d=0;
				for($i=0;$i<10;$i++){

			?>
			<tr style="border-color: red">
				<td style="border-color: red"> 
				<?php
				for($j=1;$j<=10;$j++){
					echo $aa[$d].' ';
					$d++;
					}
				?>

				</td>
			</tr>
			<?php
				}
			?>
		</table>
</body>
</html>


