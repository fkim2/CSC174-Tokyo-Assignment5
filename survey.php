<?php include "inc/html-top.inc"; ?>

    <!--maybe we could have drop down options or radio buttons for options: rarely, sometimes, frequently -->

	<h2>How often do you see trash on the ground?</h2>
	<form action="survey-script.php" method="post">
		<br>
		<input type="radio" name="SeeTrash" id="SeeTrash1" value="Almostalways">
		<label for="SeeTrash1">Almost always</label></br>
		
		<br><input type="radio" name="SeeTrash" id="SeeTrash2" value="Prettyoften">
		<label for="SeeTrash2">Pretty Often</label></br>
		
		<br><input type="radio" name="SeeTrash" id="SeeTrash3" value="Sometimes">
		<label for="SeeTrash3">Sometimes</label></br>
		
		<br><label for="SeeTrash4"> Or other [Enter text]</label></br>
		<br><textarea name="SeeTrash" cols="50" rows="8" id="textarea">
		</textarea></br>

	<h2>How often do you pick up trash off the ground?</h2>
		<br><input type="radio" name="PickTrash" id="PickTrash1" value="Almostalways">
		<label for="PickTrash1">Almost always</label></br>
		
		<br><input type="radio" name="PickTrash" id="PickTrash2" value="Prettyoften">
		<label for="PickTrash2">Pretty Often</label></br>
		
		<br><input type="radio" name="PickTrash" id="PickTrash3" value="Sometimes">
		<label for="PickTrash3">Sometimes</label></br>
		
		<br><label for="PickTrash4"> Or other [Enter text]</label></br>
		<br><textarea name="PickTrash" cols="50" rows="8" id="textarea">
		</textarea></br>
    <!--this could be a text input -->
    <h2>In what ways could YOU prevent further pollution?</h2>
    	<br><label for="PrevTrash"> Decribe below </label></br>
		<br><textarea name="PrevTrash" cols="50" rows="8" id="textarea">
		</textarea></br>
	
	<td><input type="submit" onclick="alert('Cheers')" value="Submit" /></td>


 </body>
 </html>
	
 
