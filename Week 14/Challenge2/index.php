<?php

$conn = new mysqli('localhost', 'root', 'root', 'Hunter_Newton') 
or die ('Cannot connect to db');

    $result = $conn->query("SELECT Color FROM Challenge2 GROUP BY Color");

    echo "<html>";
    echo "<body>";
    echo "<label>Color:</label><br>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {
        unset($id, $name);
        $id = $row['Color'];
        $name = $row['Color']; 
        echo '<option value=" '.$id.' ">'.$name.'</option>';
}

    echo "</select><br>";
    echo "<input type='submit' name='submit' value='Save' />";

    // try {
    //     $results = $db->query("SELECT Color FROM Challenge2 WHERE Color = :color ");
    //     echo "Searching";
    // } catch (Exception $e) {
    //     echo "No search found"
    //     exit;
    // }

    echo "</body>";
    echo "</html>";
?>