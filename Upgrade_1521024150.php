<html>
<head>
<title>Mei Dina Setia Mega Putri</title>
</head>
<body>
<table border='1'>
	<tr>
		<th rowspan="2">INPUT</th>
		<th rowspan="5">OUTPUT</th>
	</tr>
	<tr>
		<th>A</th>
		<th>E</th>
		<th>I</th>
		<th>U</th>
		<th>O</th>
	</tr>
	<tr>
		<td>
			<?php
			$n1="MEI DINA SETIA MEGA PUTRI";
			echo $n1;
			?>
		</td>
		<td>
			<?php
			$alfaA = substr_count($n1,"A");
			echo $alfaA;
			?>
		</td>
		<td>
			<?php
			$alfaE = substr_count($n1,"E");
			echo $alfaE;
			?>
		</td>
		<td>
			<?php
			$alfaI = substr_count($n1,"I");
			echo $alfaI;
			?>
		</td>
		<td>
			<?php
			$alfaU = substr_count($n1,"U");
			echo $alfaU;
			?>
		</td>
		<td>
			<?php
			$alfaO = substr_count($n1,"O");
			echo $alfaO;
			?>
		</td>
	</tr>
</table>
</body>
</html>