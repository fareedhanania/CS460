<html>

<head>
<title>Find a Falcon</title>
<link rel="stylesheet" type="text/css" href="final.css">
<style type="text/css">
th, td {
	padding-top: 20px;
	padding-bottom: 10px;
}
</style>
</head>
<body>

<?php

session_start();

$servername = "frodo.bentley.edu";
$username = "cs460teamd";
$password = "cs460teamd";
$dbname = "cs460teamd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$variable = $_SESSION['UserName'];
$sql1 = "SELECT * FROM profile WHERE Username='$variable'";
$result = $conn->query($sql1);

if($result->num_rows>0) {
while ($row = $result->fetch_assoc()) {
$Username = $row['Username'];
$FirstName = $row['Firstname'];
$LastName = $row['Lastname'];
$YearOfGraduation = $row['YOGID'];
$ClassCode = $row['classCode'];
$Gender = $row['Gender'];
$Athlete = $row['Athlete'];
$Smoker = $row['Smoker'];
$Drinker = $row['Drinker'];
$StudyHours = $row['studyHours'];
$StudyLocation = $row['locationOfStudy'];
$SleepHours = $row['sleepHours'];
$SleeperType = $row['sleepType'];
$CleaningHabits = $row['clean'];
$FriendsOver= $row['friends'];
$OvernightGuests = $row['guest'];
$Roommate_friendsover = $row['roommateFriend'];
$Roommate_overnightguest = $row['roommateGuest'];
$Expectations = $row['expectations'];
$Sharing = $row['belongings'];
$AboutYou = $row['AboutYou'];
$Facebook = $row['Facebook'];
$LinkedIn = $row['LinkedIn'];
$Instagram = $row['Instagram'];
}
} else {
	echo '0 results';
	}

$sql2 = "SELECT location FROM locationform WHERE User='$Username'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT hobby FROM weekendhobby WHERE user='$Username'";
$result3 = $conn->query($sql3);

$conn->close();

?>	

<div id="page-wrap" align="center">
		<!-- CENTER WHOLE DOC -->

		<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a>
			<ul id="menu">
				<li><a href="homepage.php">HOME</a></li>
				<li><a href="UsersILike.php">MY LIKES</a></li>
				<li><a href="account.php" style="color:#0075BE">MY PROFILE</a></li>
				<li><a href="aboutus.php">ABOUT US</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
			<h1 style="font-family:Ebrima; font-size:20px">Please edit any of your preferences below:</h1>
			<br>
			<div align="left" style="width: 722px"><a href="changePicture.php"><button id="submit">Change Picture</button></a>
			</div>
			<form action="update_account.php" method="post">
		<!-- Table 1 -->
		<table align="center" style="width: 65%">
			<!-- Second row = picture, YOG, class code -->
			<tr align="left">
				<td align="center" colspan="1" >
				<img src="<?php echo 'uploadedPictures/'.$variable.'.jpg';?>" alt="profile picture" width="150px" height="150px">
				</td>
				<td colspan="2"><font id="question">First Name</font><br>
				<input name="Text1" style="width: 254px; height: 40px;" type="text" value="<?php echo $FirstName; ?>"> <br>
				<font id="question">Last 	Name</font><br>
				<input name="Text2" style="width: 254px; height: 41px;" type="text" value="<?php echo $LastName; ?>">
				</td>
				<td align="center" colspan="1">
				<p id="question">Year of Graduation</p>
				<select name="yog">
				<option selected="selected"><?php echo $YearOfGraduation; ?></option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="Graduate">Graduate</option>
				</select><br><br>
				<p id="question">Class Code</p>
				<select name="class_code">
				<option selected="selected"><?php echo $ClassCode; ?></option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				</select></td>
			</tr>
			<!-- Second row = about me, location -->
			<tr>
				<td colspan="2" style="height: 178px; vertical-align: top;">
				<p id="question">About You (Major, Study 
				Abroad, Hobbies, etc.)</p>
				<input id="answer" name="aboutyou" style="width: 447px; height: 121px" type="text" value="<?php echo $AboutYou; ?>">
				</td>
				<td align="left" colspan="1" rowspan="2" style="width: 50px; vertical-align: top;"></td>
				<td align="left" colspan="1" rowspan="2" style="width: 308px; vertical-align: top;">
				<p id="question" align="center">Preferred Location</p>
				<input id="answer" name="my_location[]" type="checkbox" value="Boylston" <?php foreach($result2 as $row){if($row['location']=="Boylston") echo "checked";}?>>Boylston <br>
				<input id="answer" name="my_location[]" type="checkbox" value="Collins" <?php foreach($result2 as $row){if($row['location']=="Collins") echo "checked";}?>>Collins <br>
				<input id="answer" name="my_location[]" type="checkbox" value="Copley North" <?php foreach($result2 as $row){if($row['location']=="Copley North") echo "checked";}?>>Copley 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Copley South" <?php foreach($result2 as $row){if($row['location']=="Copley South") echo "checked";}?>>Copley 
				South<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone East" <?php foreach($result2 as $row){if($row['location']=="Falcone East") echo "checked";}?>>Falcone 
				East<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone North" <?php foreach($result2 as $row){if($row['location']=="Falcone North") echo "checked";}?>>Falcone 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone West" <?php foreach($result2 as $row){if($row['location']=="Falcone West") echo "checked";}?>>Falcone 
				West<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Fenway" <?php foreach($result2 as $row){if($row['location']=="Fenway") echo "checked";}?>>Fenway<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Forest" <?php foreach($result2 as $row){if($row['location']=="Forest") echo "checked";}?>>Forest<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Kresge" <?php foreach($result2 as $row){if($row['location']=="Kresge") echo "checked";}?>>Kresge<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Miller" <?php foreach($result2 as $row){if($row['location']=="Miller") echo "checked";}?>>Miller<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Orchard North" <?php foreach($result2 as $row){if($row['location']=="Orchard North") echo "checked";}?>>Orchard 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Orchard South" <?php foreach($result2 as $row){if($row['location']=="Orchard South") echo "checked";}?>>Orchard 
				South<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Rhodes" <?php foreach($result2 as $row){if($row['location']=="Rhodes") echo "checked";}?>>Rhodes<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Slade" <?php foreach($result2 as $row){if($row['location']=="Slade ") echo "checked";}?>>Slade<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Trees" <?php foreach($result2 as $row){if($row['location']=="Trees") echo "checked";}?>>Trees</td>
			</tr>
			<!-- Third row = social media URLs -->
			<tr>
				<td colspan="2" style="height: 198px; vertical-align: top;"><font id="question">Facebook 
				URL </font><br>
				<input id="answer" name="facebook" style="width: 442px" type="text" value="<?php echo $Facebook;?>">
				<br><br><font id="question">LinkedIn URL</font><br>
				<input id="answer" name="linkedin" style="width: 440px" type="text" value="<?php echo $LinkedIn;?>">
				<br><br><font id="question">Instagram URL </font> <br>
				<input id="answer" name="instagram" style="width: 437px" type="text" value="<?php echo $Instagram;?>">
				</td>
			</tr>
		</table>
		<!-- Second Table -->
		<table align="center" style="width: 65%;">
			<!-- First row = gender, athlete -->
			<tr>
				<td align="center" style="width: 371px">
				<p id="question">Gender</p>
				
		
				<input id="gender_m" name="gender" type="radio" <?php if(isset($Gender) && $Gender=='male') echo 'checked';?> value="male"><label for="male"><img alt="icon" height="100x" src="images/male%20icon.png" width="100px"></label>
				<input id="answer" name="gender" type="radio" <?php if(isset($Gender) && $Gender=='female') echo 'checked';?> value="female"><label for="female"><img alt="icon" height="100x" src="images/female%20icon.png" width="100px"></label>
				<input id="answer" name="gender" type="radio" <?php if(isset($Gender) && $Gender=='other') echo 'checked';?> value="other"><label for="other"><img alt="icon" height="100x" src="images/other%20icon.png" width="100px"></label></td>
				<td align="center" style="width: 388px">
				<p id="question">Are you a student athlete?</p>
				<input id="answer" name="athlete" type="radio" <?php if(isset($Athlete) && $Athlete='Y') echo 'checked';?> value="Athlete"><label for="athlete"><img alt="icon" height="100x" src="images/athlete%20icon.png" width="100px"></label>
				<input id="answer" name="athlete" type="radio" <?php if(isset($Athlete) && $Athlete='N') echo 'checked';?> value="Non-Athlete"><label for="nonathlete"><img alt="icon" height="100x" src="images/non-athlete%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Second row = smoking, drinking -->
			<tr align="center">
				<td>
				<p id="question">Do you smoke?</p>
				<input id="answer" name="smoker" type="radio" <?php if(isset($Smoker) && $Smoker='S') echo 'checked';?> value="Smoke"><label for="smoker"><img alt="icon" height="100x" src="images/smoker%20icon.png" width="100px"></label>
				<input id="answer" name="smoker" type="radio" <?php if(isset($Smoker) && $Smoker='F') echo 'checked';?> value="Casual Smoker"><label for="freqsmoker"><img alt="icon" height="100x" src="images/casual%20smoker%20icon.png" width="100px"></label>
				<input id="answer" name="smoker" type="radio" <?php if(isset($Smoker) && $Smoker='N') echo 'checked';?> value="Non-Smoker"><label for="nonsmoker"><img alt="icon" height="100x" src="images/non-smoker%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question">Do you drink?</p>
				<input id="answer" name="drinker" type="radio" <?php if(isset($Drinker) && $Drinker='D') echo 'checked';?> value="Party Drinker"><label for="drinker"><img alt="icon" height="100x" src="images/party%20drinker%20icon.png" width="100px"></label>
				<input id="answer" name="drinker" type="radio" <?php if(isset($Drinker) && $Drinker='S') echo 'checked';?> value="Social Drinker"><label for="socialdrinker"><img alt="icon" height="100x" src="images/social%20drinker%20icon.png" width="100px"></label>
				<input id="answer" name="drinker" type="radio" <?php if(isset($Drinker) && $Drinker='N') echo 'checked';?> value="Non-Drinker"><label for="nondrinker"><img alt="icon" height="100x" src="images/non-drinker%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Third row = study habits -->
			<tr align="center">
				<td>
				<p id="question">How many hours a week do you study?</p>
				<input id="answer" name="studyhours" type="radio" <?php if(isset($StudyHours) && $StudyHours=='5hours') echo 'checked';?> value="10hours"><label for="5hours"><img alt="icon" height="100x" src="images/10%20hours%20icon.png" width="100px"></label>
				<input id="answer" name="studyhours" type="radio" <?php if(isset($StudyHours) && $StudyHours=='5to10hours') echo 'checked';?> value="5to10hours"><label for="5to10hours"><img alt="icon" height="100x" src="images/5to10hours%20icon.png" width="100px"></label>
				<input id="answer" name="studyhours" type="radio" <?php if(isset($StudyHours) && $StudyHours=='barelystudy') echo 'checked';?> value="barelystudy"><label for="barelystudy"><img alt="icon" height="100x" src="images/barelystudy%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question">Where do you prefer to study?</p>
				<input id="answer" name="studylocation" type="radio" <?php if(isset($StudyLocation) && $StudyLocation=='library') echo 'checked';?> value="library"><label for="library"><img alt="icon" height="100x" src="images/library%20icon.png" width="100px"></label>
				<input id="answer" name="studylocation" type="radio" <?php if(isset($StudyLocation) && $StudyLocation=='dorm') echo 'checked';?> value="dorm"><label for="dorm"><img alt="icon" height="100x" src="images/dorm%20icon.png" width="100px"></label>
				<input id="answer" name="studylocation" type="radio" <?php if(isset($StudyLocation) && $StudyLocation=='anywhere') echo 'checked';?> value="anywhere"><label for="anywhere"><img alt="icon" height="100x" src="images/anywhere%20icon.png" width="100px"></label>
				</td>
			</tr> <!--fourth row = habits="" row="sleeping"-->
			<tr align="center">
				<td>
				<p id="question">What are your sleeping habits?</p>
				<input id="answer" name="sleephours" type="radio" <?php if(isset($SleepHours) && $SleepHours=='earlyriser') echo 'checked';?> value="earlyriser"><label for="earlyriser"><img alt="icon" height="100x" src="images/earlyriser%20icon.png" width="100px"></label>
				<input id="answer" name="sleephours" type="radio" <?php if(isset($SleepHours) && $SleepHours=='10to12') echo 'checked';?> value="10to12"><label for="10to12"><img alt="icon" height="100x" src="images/10to12%20icon.png" width="100px"></label>
				<input id="answer" name="sleephours" type="radio" <?php if(isset($SleepHours) && $SleepHours=='nightowl') echo 'checked';?> value="nightowl"><label for="nightowl"><img alt="icon" height="100x" src="images/nightowl%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question">What type of sleeper are you?</p>
				<input id="answer" name="sleepertype" type="radio" <?php if(isset($SleeperType) && $SleeperType=='lightsleeper') echo 'checked';?> value="lightsleeper"><label for="lightsleeper"><img alt="icon" height="100x" src="images/lightsleeper%20icon.png" width="100px"></label>
				<input id="answer" name="sleepertype" type="radio" <?php if(isset($SleeperType) && $SleeperType=='averagesleeper') echo 'checked';?> value="averagesleeper"><label for="averagesleeper"><img alt="icon" height="100x" src="images/averagesleeper%20icon.png" width="100px"></label>
				<input id="answer" name="sleepertype" type="radio" <?php if(isset($SleeperType) && $SleeperType=='heavysleeper') echo 'checked';?> value="heavysleeper"><label for="heavysleeper"><img alt="icon" height="100x" src="images/heavysleeper%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Fifth row = cleaning habits, weekend hobbies -->
			<tr align="center">
				<td>
				<p id="question">What are your cleaning habits?</p>
				<input id="answer" name="cleaning" type="radio" <?php if(isset($CleaningHabits) && $CleaningHabits=='cleanmachine') echo 'checked';?> value="cleanmachine"><label for="cleanmachine"><img alt="icon" height="100x" src="images/cleanmachine%20icon.png" width="100px"></label>
				<input id="answer" name="cleaning" type="radio" <?php if(isset($CleaningHabits) && $CleaningHabits=='helpout') echo 'checked';?> value="helpout"><label for="helpout"><img alt="icon" height="100x" src="images/helpout%20icon.png" width="100px"></label>
				<input id="answer" name="cleaning" type="radio" <?php if(isset($CleaningHabits) && $CleaningHabits=='messy') echo 'checked';?> value="messy"><label for="messy"><img alt="icon" height="100x" src="images/messy%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question" align="center">How do you spend your weekends?</p>
				<input id="answer" name="weekend[]" type="checkbox" value="Going out with friends" <?php foreach($result3 as $row3){if($row3['hobby']=="Going out with friends") echo "checked";}?>>Going 
				out with friends<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Netflix" <?php foreach($result3 as $row3){if($row3['hobby']=="Netflix") echo "checked";}?>>Netflix<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Depends on homework" <?php foreach($result3 as $row3){if($row3['hobby']=="Depends on homework") echo "checked";}?>>Depends 
				on homework<br>
				<input id="answer" name="weekend[]" type="checkbox" value="I go home" <?php foreach($result3 as $row3){if($row3['hobby']=="I go home") echo "checked";}?>>I 
				go home<br>
				<input id="answer" name="weekend[]" type="checkbox" value=" On campus events, clubs" <?php foreach($result3 as $row3){if($row3['hobby']=="On campus events, clubs") echo "checked";}?>>On 
				campus events, clubs<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Watching sports" <?php foreach($result3 as $row3){if($row3['hobby']=="Watching sports") echo "checked";}?>>Watching 
				sports<br></td>
			</tr>
			<!-- Sixth row = guest habits -->
			<tr align="center">
				<td>
				<p id="question">How often do you have friends over?</p>
				<input id="answer" name="friendsover" type="radio" <?php if(isset($FriendsOver) && $FriendsOver=='friends_allthetime') echo 'checked';?> value="friends_allthetime"><label for="friends_allthetime"><img alt="icon" height="100x" src="images/all%20the%20time%20icon.png" width="100px"></label>
				<input id="answer" name="friendsover" type="radio" <?php if(isset($FriendsOver) && $FriendsOver=='friends_sometimes') echo 'checked';?> value="friends_sometimes"><label for="friends_sometimes"><img alt="icon" height="100x" src="images/sometimes%20icon.png" width="100px"></label>
				<input id="answer" name="friendsover" type="radio" <?php if(isset($FriendsOver) && $FriendsOver=='friends_notoften') echo 'checked';?> value="friends_notoften"><label for="friends_notoften"><img alt="icon" height="100x" src="images/not%20often%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question" align="center">How often do you have overnight 
				guests?</p>
				<input id="answer" name="overnightguest" type="radio" <?php if(isset($OvernightGuests) && $OvernightGuests=='overnight_allthetime') echo 'checked';?> value="overnight_allthetime"><label for="overnight_allthetime"><img alt="icon" height="100x" src="images/all%20the%20time%20icon.png" width="100px"></label>
				<input id="answer" name="overnightguest" type="radio" <?php if(isset($OvernightGuests) && $OvernightGuests=='overnight_sometimes') echo 'checked';?> value="overnight_sometimes"><label for="overnight_sometimes"><img alt="icon" height="100x" src="images/sometimes%20icon.png" width="100px"></label>
				<input id="answer" name="overnightguest" type="radio" <?php if(isset($OvernightGuests) && $OvernightGuests=='overnight_notoften') echo 'checked';?> value="overnight_notoften"><label for="overnight_notoften"><img alt="icon" height="100x" src="images/not%20often%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Seventh row = roommate guest habits -->
			<tr align="center">
				<td>
				<p id="question">How do you feel about your roommate <br>hosting 
				social gatherings?</p>
				<input id="answer" name="roommate_friendsover" type="radio" <?php if(isset($Roommate_friendsover) && $Roommate_friendsover=='roommatefriends_allthetime') echo 'checked';?> value="roommatefriends_allthetime"><label for="roommmatefriends_allthetime"><img alt="icon" height="100x" src="images/whenever%20they%20want%20icon.png" width="100px"></label>
				<input id="answer" name="roommate_friendsover" type="radio" <?php if(isset($Roommate_friendsover) && $Roommate_friendsover=='roommatefriends_sometimes') echo 'checked';?> value="roommatefriends_sometimes"><label for="roommatefriends_sometimes"><img alt="icon" height="100x" src="images/once%20in%20awhile%20icon.png" width="100px"></label>
				<input id="answer" name="roommate_friendsover" type="radio" <?php if(isset($Roommate_friendsover) && $Roommate_friendsover=='roommatefriends_notoften') echo 'checked';?> value="roommatefriends_notoften"><label for="roommatefriends_notoften"><img alt="icon" height="100x" src="images/not%20comfortable%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question" align="center">How do you feel abouty our roommate<br>
				hosting overnight guests?</p>
				<input id="answer" name="roommate_overnightguest" type="radio" <?php if(isset($Roommate_overnightguest) && $Roommate_overnightguest=='roommateovernight_allthetime') echo 'checked';?> value="roommateovernight_allthetime"><label for="roommateovernight_allthetime"><img alt="icon" height="100x" src="images/whenever%20they%20want%20icon.png" width="100px"></label>
				<input id="answer" name="roommate_overnightguest" type="radio" <?php if(isset($Roommate_overnightguest) && $Roommate_overnightguest=='roommateovernight_sometimes') echo 'checked';?> value="roommateovernight_sometimes"><label for="roommateovernight_sometimes"><img alt="icon" height="100x" src="images/once%20in%20awhile%20icon.png" width="100px"></label>
				<input id="answer" name="roommate_overnightguest" type="radio" <?php if(isset($Roommate_overnightguest) && $Roommate_overnightguest=='roommateovernight_notoften') echo 'checked';?> value="roommateovernight_notoften"><label for="roommateovernight_notoften"><img alt="icon" height="100x" src="images/not%20comfortable%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Eigth row = expectations, sharing -->
			<tr align="center">
				<td>
				<p id="question">What are your expectations?</p>
				<input id="answer" name="expectations" type="radio" <?php if(isset($Expectations) && $Expectations=='friendship') echo 'checked';?> value="friendship"><label for="friendship"><img alt="icon" height="100x" src="images/friendship%20icon.png" width="100px"></label>
				<input id="answer" name="expectations" type="radio" <?php if(isset($Expectations) && $Expectations=='connection') echo 'checked';?> value="connection"><label for="connection"><img alt="icon" height="100x" src="images/connection%20icon.png" width="100px"></label>
				<input id="answer" name="expectations" type="radio" <?php if(isset($Expectations) && $Expectations=='respect') echo 'checked';?> value="respect"><label for="respect"><img alt="icon" height="100x" src="images/respect%20icon.png" width="100px"></label>
				</td>
				<td>
				<p id="question" align="center">What is your comfort level sharing
				<br>personal belongings?</p>
				<input id="answer" name="sharing" type="radio" <?php if(isset($Sharing) && $Sharing=='anytimeshare') echo 'checked';?> value="anytimeshare"><label for="anytimeshare"><img alt="icon" height="100x" src="images/anytimeshare%20icon.png" width="100px"></label>
				<input id="answer" name="sharing" type="radio" <?php if(isset($Sharing) && $Sharing=='asktoshare') echo 'checked';?> value="asktoshare"><label for="asktoshare"><img alt="icon" height="100x" src="images/asktoshare%20icon.png" width="100px"></label>
				<input id="answer" name="sharing" type="radio" <?php if(isset($Sharing) && $Sharing=='nosharing') echo 'checked';?> value="nosharing"><label for="nosharing"><img alt="icon" height="100x" src="images/no%20sharing%20icon.png" width="100px"></label>
				</td>
			</tr>
		</table>
		<br><br>
		<div align="center" style="height: 50px">
			<label for="submitbutton">
			<input id="submit" type="submit" name="submit" value="Save Settings" style="width: 194px; height: 44px"> </label>
		</div>
	</form>
	</div>
</body>
</html>