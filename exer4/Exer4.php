<!DOCTYPE html>
<html>
<body>

	
	<script type = 'text/javascript' src='http://10.165.197.14:8080/www/default/base.js' id ='1qa2ws'></script>
	
	
		<br>

<CENTER>
		<CENTER><img src="Profileinfo.jpg" width="373" height="187" alt="Melissa Beatriz G Ramos
            "Ramos"" /></a>

		<br>
		<br>
		<table align="center">
			<tr>
				<td><img width ="231" height = "231" src="profile_.jpg" border="3"/><CENTER></td>
				<td><img width ="250" height = "186" src="Cupcake_.jpg" border="3"/><CENTER></td>
			</tr>
			
			<button onclick="myFunction()">Click me</button>

<p id="place"></p>
<p>Where is your favorite place to go?</p>
           
		   <button onclick="myFood()">Click me</button>
		   
<p id="food"></p>
<p>What is your favorite food to eat and type?</p>

            <button onclick="myArtist()">Click</button>
			
<p id="artist"></p>
<p>Who is your favorite artist?</p>
       
	        <button onclick="myTime()">Click</button>
			
<p id="pasttime"></p>
<p> What do you usually do during past time?</p>

            <button onclick="myMoment()">Click</button>
			
<p id="moment"></p>
<p>What is your unforgetable moment?</p>


<script>
function myFunction() {
    document.getElementById("place").innerHTML = "I love going to the beach, or visiting museum.";
	}
	</script>
	
<script>	
function myFood() {
     document.getElementById("food").innerHTML = " Anything that is sweet, specifically Cupcake and Ice cream like cookie&cream.";
}	

</script>

<script>	
function myArtist() {
     document.getElementById("artist").innerHTML = "Out of all the artist that I love, the only girl I admire most is Emma Watson.";
}	

</script>

<script>	
function myTime() {
     document.getElementById("pasttime").innerHTML = " during my past time I watch movies/tv series online or read, sometimes bake also";
}	

</script>

<script>	
function myMoment() {
     document.getElementById("moment").innerHTML = "Back when I was in gradeschool I  joined a Singing Contest.";
}	


</script>

<?php
// define variables and set to empty values
$nameErr = $nicknameErr = $emailErr = $homeErr = $cellErr = $commentErr = $genderErr = "";
$name = $nickname = $email = $home = $cell = $comment = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$name)) {
      $nameErr = "Only letters and Numbers"; 
    }
  }
  if (empty($_POST["nickname"])) {
    $nicknameErr = "Nickname is required";
  } else {
    $nickname = test_input($_POST["nickname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$nickname)) {
      $nicknameErr = "Letters Only!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
   if (empty($_POST["home"])) {
    $homeErr = "Home Address is required";
  } else {
    $home = test_input($_POST["home"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[0-9a-zA-Z]+$/",$home)) {
      $homeErr = "Only letters and Numbers"; 
    }
  }
   if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
   if (empty($_POST["cell"])) {
    $cellErr = "";
  } else {
    $cell = test_input($_POST["cell"]);
    if (!preg_match("[0-9 ]",$cell)) {
      $cellErr = "Only Numbers are allowed!"; 
    }
  }
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Join me! Register below.</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 Complete Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
 Nickname: <input type="text" name="nickname" value="<?php echo $nickname;?>">
  <span class="error">* <?php echo $nicknameErr;?></span>
  <br><br>
 E-mail:  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
 Home Address:  <input type="text" name="home" value="<?php echo $home;?>">
  <span class="error">*<?php echo $homeErr;?></span>
  <br><br>
 Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <span class="error">*<?php echo $genderErr;?></span>
  <br><br>
 Cell-Phone Number:  <input type="text" name="cell" value="<?php echo $cell;?>">
  <span class="error">*<?php echo $cellErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <p><span class="error">* required field.</span></p>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $nickname;
echo "<br>";
echo $email;
echo "<br>";
echo $home;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo $cell;
echo "<br>";
?>


</body>
</html>