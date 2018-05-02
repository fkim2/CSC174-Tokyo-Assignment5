<?php include "inc/html-top.inc"; ?>

	<h1>Thank You for Subscribing</h1>
<body>

	<h1>Thank You for Subscribing</h1>
<!--php code for sql connection and modifications-->
          <?php
			  include "config.php";

	          $SeeTrash = trim(stripcslashes($_POST['SeeTrash']));
	          $PickTrash = trim(stripcslashes($_POST['PickTrash']));
	          $PrevTrash = trim(stripcslashes($_POST['PrevTrash']));

	          $query = "INSERT INTO surv (SeeTrash, PickTrash, PrevTrash) VALUES ('$SeeTrash','$PickTrash','$PrevTrash')";
	          $result = mysqli_query($connection, $query);

          ?>

            <h3>You've submitted:</h3>
              <p>

              How often do you see trash on the ground?: <?php echo $SeeTrash; ?><br>
              How often do you pick up trash off the ground?: <?php echo $PickTrash; ?><br>
              In what ways could YOU prevent further pollution?: <?php echo $PrevTrash; ?><br>
				
				<p>To go back, click:
				<a href = "index.php">Here</a></p>
					
              </p>

              <?php

					if ($result) {

						echo "Thank you we've received your information!";

					} else {

						die ("Database query failed!");}

 				?>
          <?php
          //close databse connection
          mysqli_close($connection);
          ?>

        </div>

<!--Ending tags-->

<?php include "inc/footer.inc";?>

</body>

</html>