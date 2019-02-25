<?php

function convertUsersToTable($result) {
	echo "<table border=1>";
	echo "<tr><td>Id</td><td>Name</td><td>City</td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
			echo "<td>".$row["user_id"]."</td>";
			echo "<td>".$row["user_name"]."</td>";
			echo "<td>".$row["user_city"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
}

?>