<?php
	include 'HOST.php';
	$query = "SELECT * FROM users ORDER BY Score DESC";
	
	$response = mysqli_query($link, $query);
	
	echo "			<table>
						<tr>
							<td>Team</td>
							<td>Score</td>
						</tr>
		 ";
	while($orw = $response -> fetch_assoc()){
		?>
		<?php
			
			echo "<tr><td>".$orw['TeamName']."</td>";
			echo "<td>".$orw['Score']."</td></tr>";
			
		?>
		<?php
	}
	echo "</table>";
?>