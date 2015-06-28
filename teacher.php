<form>
	<select>
   <?php
    $result = $mysqli->query("SELECT * FROM users");
    while ($users = $result->fetch_assoc()){
    echo '<option value="'.$class['class'].'">'.$class['class'].'</option>';
     echo '<option value="'.$users['username'].'">'.$users['username'].'</option>';

    }
   ?>
	</select>


</form>