<?php

$conn = new mysqli('localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP', 'Hunter_Newton') 
or die ('Cannot connect to db');

    $result = $conn->query("SELECT state FROM Challenge1");

    echo "<html>";
    echo "<body>";
    echo "<label>State:</label><br>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {
		unset($id, $name);
		$id = $row['state'];
		$name = $row['state']; 
		echo '<option value=" '.$id.' ">'.$name.'</option>';
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?> 