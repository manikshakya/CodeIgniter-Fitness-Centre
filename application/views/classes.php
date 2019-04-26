<table>
	<tr>
		<th>Time</th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
	</tr>
	
	<?php

		$array1 = array();
		$array2 = array();
		$array3 = array();
		$array4 = array();
		$array5 = array();
		$array6 = array();
		$array7 = array();
		$array8 = array();
		foreach ($result['time'] as $key) {
			# code...
			array_push($array1, $key->time);

		}

		//print_r($array1);

		foreach ($result['monday'] as $key) {
			# code...
			array_push($array2, $key->classname);
		}

		foreach ($result['tuesday'] as $key) {
			# code...
			array_push($array3, $key->classname);
		}

		foreach ($result['wednesday'] as $key) {
			# code...
			array_push($array4, $key->classname);
		}

		foreach ($result['thursday'] as $key) {
			# code...
			array_push($array5, $key->classname);
		}

		foreach ($result['friday'] as $key) {
			# code...
			array_push($array6, $key->classname);
		}

		foreach ($result['saturday'] as $key) {
			# code...
			array_push($array7, $key->classname);
		}

		foreach ($result['sunday'] as $key) {
			# code...
			array_push($array8, $key->classname);
		}

		
		
	?>

	
	



	<?php for ($i = 0; $i < count($array1); $i++){ ?>
	
		<tr>
			
			<td> <?php echo $array1[$i]; ?> </td>
			<td> <?php echo $array2[$i]; ?> </td>
			<td> <?php echo $array3[$i]; ?> </td>
			<td> <?php echo $array4[$i]; ?> </td>
			<td> <?php echo $array5[$i]; ?> </td>
			<td> <?php echo $array6[$i]; ?> </td>
			<td> <?php echo $array7[$i]; ?> </td>
			<td> <?php echo $array8[$i]; ?> </td>
			
			
		</tr>
	
	<?php } ?>
</table>









<!--
<table>
	<tr>
		<th>Time</th>
		<th>Monday</th>
		<th>Tuesday</th>
		<th>Wednesday</th>
		<th>Thursday</th>
		<th>Friday</th>
		<th>Saturday</th>
		<th>Sunday</th>
	</tr>
	<tr>
		<td>06.00 -07.00</td>
		<td>Yoga</td>
		<td>Weightlifting</td>
		<td></td>
		<td>Weightlifting</td>
		<td></td>
		<td> - </td>
		<td> - </td>
	</tr>
	<tr>
		<td>07.00 -08.00</td>
		<td>Spinning Express</td>
		<td>Strength & Conditioning.</td>
		<td>Spinning Express</td>
		<td>Strength & Conditioning.</td>
		<td>Spinning</td>
		<td> - </td>
		<td> - </td>
	</tr>
	<tr>
		<td>08.00 -09.00</td>
		<td> - </td>
		<td> - </td>
		<td>Zumba</td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
	</tr>
	<tr>
		<td>09.00 -10.00</td>
		<td>Spinning</td>
		<td>Spinning</td>
		<td>Spinning</td>
		<td>Spinning</td>
		<td>Bootcamp</td>
		<td> - </td>
		<td> - </td>
	</tr>
	<tr>
		<td>10.00 -11.00</td>
		<td>Rip</td>
		<td>Power Abs</td>
		<td>Rip</td>
		<td>Bums& Tums</td>
		<td>Spinning</td>
		<td>Rip</td>
		<td>Spinning</td>
	</tr>
	<tr>
		<td>11.00 -12.00</td>
		<td>Aqua Fit</td>
		<td> - </td>
		<td>Aqua Fit</td>
		<td>Pilates</td>
		<td>Aqua Fit</td>
		<td>Aqua Fit</td>
		<td>Rip</td>
	</tr>
	<tr>
		<td>12.00 -01.00</td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
		<td> - </td>
		<td>Spinning</td>
		<td> - </td>
	</tr>
</table>  

-->
<!-- Name, phone number, email -->



