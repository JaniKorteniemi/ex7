<h2>Second Page</h2>
		<p>
			This is the second page.
		</p>
		<h3>PHP Variable</h3>
		<p>
		<?php
			$name = "Garfield";
			$age = 5;
			echo "Name of the cat is ".$name . " and it is " .$age . " years old.";
		 ?>
		 </p>
		 <h3>PHP Array</h3>
		 <p>
		 <?php
		 echo "Name of the array: <br>";
		 	$names = array('Jim', 'Liisa', 'bob');
			print_r($names);
			echo "<br> Second name is: ";
			echo $names[1];
		  ?>
		</p>
		<h3>PHP associative array</h3>
		<p>
		<?php
		$fulnames=array(
			array("fname"=>'Jim', "lname"=>'Smith'),
			array("fname"=>'Lisa', "lname"=>'Simpson'),
			array("fname"=>'Bob', "lname"=>'Jones')
		);
		echo "All Names <br>";
		print_r($fulnames);
		echo "<br><br>LastNames:<br>";
		foreach ($fulnames as $row) {
			echo $row['lname'].'<br>';
		}
		 ?>
		 </p>
