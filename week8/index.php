<!DOCTYPE html>
<html>
<head>
<title> She-hub </title>
<link rel="icon" type="image/x-icon" href="heart.png">
<style>

@font-face { font-family: Unna; src: url('Unna-BoldItalic.TTF'); }
@font-face { font-family: Caudex; src: url('Caudex-Regular.TTF'); }
@font-face { font-family: Questrial; src: url('Questrial-Regular.TTF'); }

* {
  box-sizing: border-box;
}

body {
  font-family: Caudex;
    background: #fff0f8;
  color:black;
}

p {
  font-size: 14px;
}

.header {
  padding: 10px;
  text-align: center;
  background-color:#ffcae5;
  color: white;
  font-family: Unna;
  font-weight: bold;
}

.header h1 {
  font-size: 100px;
}

.topnav {
  overflow: hidden;
  background-color: #87ceeb;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: Questrial;
  font-weight: bold;
}

.topnav a:hover {
  background-color: #ff69b4;
  color: white;
}

.leftcolumn {   
  float: left;
  width: 75%;
  background-color: #ffcae5;
  padding: 20px;
}

.rightcolumn {
  float: left;
  width: 25%;
  background-color: #ffcae5;
  padding: 20px;
}

img {
  background-color: skyblue;
  width: 100%;
  padding: 20px;
}

.fakeimg {
  background-color: skyblue;
  width: 100%;
  padding: 20px;
}

.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

.card h2 {
  font-family: Questrial;
}
.row::after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  padding: 20px;
  text-align: center;
  background: #ffcae5;
  margin-top: 20px;
}

@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}

.main {
  display: flex;
  flex-direction: column;
  gap: 0.5em;
}

.up {
  display: flex;
  flex-direction: row;
  gap: 0.5em;
}

.down {
  display: flex;
  flex-direction: row;
  gap: 0.5em;
}

.card1 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 90px 5px 5px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.instagram {
  margin-top: 1.5em;
  margin-left: 1.2em;
  fill: #cc39a4;
}

.card2 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 90px 5px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.twitter {
  margin-top: 1.5em;
  margin-left: -.9em;
  fill: #03A9F4;
}

.card3 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 5px 5px 90px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.github {
  margin-top: -.6em;
  margin-left: 1.2em;
}

.card4 {
  width: 90px;
  height: 90px;
  outline: none;
  border: none;
  background: white;
  border-radius: 5px 5px 90px 5px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
  transition: .2s ease-in-out;
}

.discord {
  margin-top: -.9em;
  margin-left: -1.2em;
  fill: #8c9eff;
}

.card1:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #cc39a4;
}

.card1:hover .instagram {
  fill: white;
}

.card2:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #03A9F4;
}

.card2:hover .twitter {
  fill: white;
}

.card3:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: black;
}

.card3:hover .github {
  fill: white;
}

.card4:hover {
  cursor: pointer;
  scale: 1.1;
  background-color: #8c9eff;
}

.card4:hover .discord {
  fill: white;
}

body.dark-mode {
  background-color: #1a1a1a;
  color: white;
}

#additional-info {
  display: none;
}
    
</style>
</head>
<body>

<div class="header">
  <h1>She-Hub</h1>
</div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="#">News</a>
  <a href="#">Contact</a>
  <a onclick="toggleDarkMode()" style="float:right">Dark Mode</a>
  <a href="#" style="float:right">About</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>MY JOURNEY</h2>
      <h5>Title description, Dec 21, 20123</h5>
      <img src="Alex-Consani.jpg" alt="Alex Consani Serving C*nt">
      <p>Hi! My name is Allan Miguel O. Moldez and I'm a part of LGBTQ Community, Gay to be exact. Being able to express in terms of my sexuality without being discriminated and shamed feels freeing and loved in some ways. But being "different" not only put a target on my back but also question things about myself as well, and that is why I'm very grateful to to the people that surrounds me (My family and friends) that amidst all the hatred towards me and my community they still suport me for who I am.</p>
      <p>Now, let's talk about School! I am currently a student of Asia Pacific College and an SM Scholar as well(Shocked that I was accepted but grateful nonetheless)! My major is BS in Computer Science with specialization in System Softwares. I'm very happy with the college and environment I chose and I can't wait to see what the future offers me.</p>
    </div>
    <div class="card">
      <h2>RUPAUL'S DRAG RACE SEASON 16!!!</h2>
      <h5>Title description, January 12, 2024</h5>
      <img src="s16.jpg" alt="Cast of RPDR s16 serving c*nt!">
      <p>Rupaul's Drag Race Season 16 just had their premiere episode air in MTV last January 5, 2024, and the frist seven casts introduced left all the audiences gagged and wanting for more. RPDR decided they will have a split premiere, which is way better than a solo premiere given that the queens will have more exposure and this will let the audiences know more about the queens and fully indulge themselves within the queens. </p>
      <p>In this comming Friday, January 12, 2024, the second episode will air live on televisions and will present the second part of the premiere which will also introduce us the following 7 casts and will leave us gagged and wanting for more as well. We will also get to know the queens better and will let us know our favorites and front-runners for this season since this episode will present a talent show as well where the queen will showcase their unique and gag-worthy talents.</p>
    </div>
    <div class="card">
            <?php
      // define variables and set to empty values
      $nameErr = $emailErr = $genderErr = $websiteErr = "";
      $name = $email = $gender = $comment = $website = "";

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
          $nameErr = "Name is required";
        } else {
          $name = test_input($_POST["name"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
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
    
        if (empty($_POST["website"])) {
          $website = "";
        } else {
          $website = test_input($_POST["website"]);
          // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
          if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
          }
        }

        if (empty($_POST["comment"])) {
          $comment = "";
        } else {
          $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
          $genderErr = "Gender is required";
        } else {
          $gender = test_input($_POST["gender"]);
        }
      }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      ?>

      <h2>PHP Form Validation Example</h2>
      <p><span class="error">* required field</span></p>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website;?>">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
      </form>

      <?php
      echo "<h2>Your Input:</h2>";
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $website;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
      ?>

      <?php
        $txt1 = "Saltburn!";
        $txt2 = "Jacob Elordi ";
        $txt3 = "Barry Keoghan";
        $x = 27;
        $y = 31;
        $a = 200;
        $b = 33;
        $c = 500;
        $friends = array("Joannu Jones", "Hazy Haze", "Miggy Migs");
        echo "$txt1";   
        echo "<br>";   
        echo "Starred by: " .$txt2. "(".$x. ") and (" .$y. ")".$txt3. "!";
        echo "<br>"; 
        var_dump($txt1);
        echo "<br>";
        var_dump($x);
        echo "<br>";

        if ($a > $b) {
          echo "True";
          echo "<br>";
        }
        elseif ($a < $b) {
          echo "False";
          echo "<br>";
        }
        
        foreach ($friends as $friend) {
          echo "$friend <br>";
        }
        ?>    
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <img src="Miguel.png" alt="Miguel Serving C*nt">
      <p>Name: Allan Miguel O. Moldez</p>
      <p>Age: Secret</p>
      <p>Pronouns: She/It</p>
    </div>
    <div class="card">
      <h3>My Friends!!!</h3>
      <img src="Joanny.png" alt="Joanny Serving C*nt">
	    <img src="Haze.png" alt="Haze Serving C*nt">
	   <img src="Mark.png" alt="Mark Serving C*nt">
      
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <div class="main">
        <div class="up">
          <button class="card1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero" class="instagram"><g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path></g></g></svg>
          </button>
          <button class="card2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px" class="twitter"><path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>
          </button>
        </div>
        <div class="down">
          <button class="card3">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px" class="github">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg>
          </button>
          <button class="card4">
            <svg height="30px" width="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="discord"><path d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path></svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

<script>
  let isDarkMode = false;
  
  function toggleDarkMode() {
    document.body.classList.toggle("dark-mode", isDarkMode = !isDarkMode);
  }

</script>

</body>
</html>


