<h1>Doesn't work</h1>

<form action="./index.php" method="GET">
    <div>
        <label>Color: </label>
    </div>
    <div>
        <select value="" name="color">
            <option value="black">Black</option>
            <option value="blue">Blue</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="orange">Orange</option>
            <option value="purple">Purple</option>
            <option value="pink">Pink</option>
        </select>
    </div>
    <input type="submit" value="Submit" />
</form>
<div>
    <?php

// $conn = new mysqli('localhost', 'root', 'root', 'Hunter_Newton') 
// or die ('Cannot connect to database');

    if(!empty($_GET)) {
        try {
            echo $_GET['color'];

            $db = new PDO('mysql:dbname=Hunter_Newton;host=localhost', 'r2hstudent', 'SbFaGzNgGIE8kfP');

        //if there are any errors, message displays
            $db->setAttribute(PDO::ATTR_ERRMOD,PDO::ERRMODE_EXCEPTION); // THIS IS THE ERROR RIGHT NOW 12:04PM - EDWARD 

            $color = 'SELECT Name, Description, Price, Color FROM Challenge2 WHERE Color = :color';

        //prepares a statement($color) for execution and returns a statement object

            $prepared = $db->prepare($color);
            $prepared->bindParam(':color', $_GET['color']);

            $prepared->execute();

        // var_dump(($prepared->fetchAll());
            echo 'hmmm';
            echo 'hmm' + $prepared->fetchAll();

            foreach($prepared->fetchAll() as $color) {
                echo "<p>{$color['Name']}, {$color['Color']}</p>";
            }
        //if an exception occurs, catch will catch it(see what I did there, ba dum tss), this code will execute if caught
        } catch (Exception $e) {
            echo $e;
            echo $e->getMessage();
            exit;
        }
    }

//     $result = $conn->query("SELECT Color FROM Challenge2 GROUP BY Color");

//     echo "<html>";
//     echo "<body>";
//     echo "<label>Color:</label><br>";
//     echo "<select name='id'>";

//     while ($row = $result->fetch_assoc()) {
//         unset($id, $name);
//         $id = $row['Color'];
//         $name = $row['Color']; 
//         echo '<option value=" '.$id.' ">'.$name.'</option>';
// }

//     echo "</select><br>";
//     echo "<input type='submit' name='submit' value='Submit' />";

//     echo "</body>";
//     echo "</html>";
    ?>
</div>