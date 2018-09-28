<?php
if (isset($_POST['submit'])) {
		$data = $_POST['hobi'];
		foreach ($data as $nilai ) {
			echo $nilai.", <br>" ;
		}
	}
?>
