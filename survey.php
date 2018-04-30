<?php include "inc/html-top.inc"; ?>

    <!--maybe we could have drop down options or radio buttons for options: rarely, sometimes, frequently -->


  <div class="content-survey">
  <div class="w3-card-4">
    <div class="w3-container" style="background-color: #064274;">
      <h2 style="color: #DEF3F6;">Input Form</h2>
    </div>

    <form class="w3-container" action="survey-script.php" method="post">
    

	<h2>How often do you see trash on the ground?</h2>
	<form action="surv-signup.php" method="post">
		<br>
		<input type="radio" name="SeeTrash" id="SeeTrash1" value="Almostalways">
		<label for="SeeTrash1">Almost always</label></br>
		
		<br><input type="radio" name="SeeTrash" id="SeeTrash2" value="Prettyoften">
		<label for="SeeTrash2">Pretty Often</label></br>
		
		<br><input class="w3-radio" type="radio" name="SeeTrash" id="SeeTrash3" value="Sometimes">
		<label for="SeeTrash3">Sometimes</label></br>

		<br><input class="w3-input" type="text" name="SeeTrash" cols="50" rows="8" id="textarea" placeholder="Other"></br>

		

		<h2>How often do you pick up trash off the ground?</h2>
		<br><input class="w3-radio" type="radio" name="PickTrash" id="PickTrash1" value="Almostalways">
		<label for="PickTrash1">Almost always</label></br>
		
		<br><input class="w3-radio" type="radio" name="PickTrash" id="PickTrash2" value="Prettyoften">
		<label for="PickTrash2">Pretty Often</label></br>
		
		<br><input class="w3-radio" type="radio" name="PickTrash" id="PickTrash3" value="Sometimes">
		<label for="PickTrash3">Sometimes</label></br>
		
		<br><input class="w3-input" type="text" name="PickTrash" cols="50" rows="8" id="textarea" placeholder="Other"></br>

		<h2>In what ways could YOU prevent further pollution?</h2>
		<br><input class="w3-input" type="text" name="PrevTrash" cols="50" rows="8" id="textarea" placeholder="Describe Here"></br>
  
  		<div class="buttonHolder">
			<td><input class="w3-button w3-white w3-hover-teal w3-padding-large w3-xxlarge" type="submit" onclick="alert('Cheers')" value="Submit"></td>
		</div>

    </form>
  </div>
</div>


	    <br><p>Go to<a href="admin.php"> Administration panel</a>.</p></br>



 </body>
 </html>
	
 
