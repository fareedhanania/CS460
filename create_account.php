<html>
<head>
<title>CreateAccount</title>
<link rel="stylesheet" type="text/css" href="final.css">
</head>
<body>
<?php
session_start();
$variable=$_SESSION['UserName'];
$AccountErr=$_SESSION['AccountErr'];
if (empty($AccountErr)){
$FNErr=$LNErr=$LErr=$YOGErr=$GErr=$AErr=$SErr=$DErr=$CErr=$STErr=$SHErr=$STHErr=$SLErr=$FRErr=$GUErr=$RFRErr=$RGUErr=$EXErr=$BErr=$AYErr=$WErr="";
}else if (!empty($AccountErr)){
$FNErr=$_SESSION['FirstError'];
$LNErr=$_SESSION['LastError'];
$LErr=$_SESSION['LocationError'];
$GErr=$_SESSION['GenderError'];
$AErr=$_SESSION['AthleteError'];
$SErr=$_SESSION['SmokerError'];
$DErr=$_SESSION['DrinkerError'];
$CErr=$_SESSION['CleanError'];
$STErr=$_SESSION['SleepTypeError'];
$SHErr=$_SESSION['SleepHoursError'];
$STHErr=$_SESSION['StudyHoursError'];
$SLErr=$_SESSION['StudyLocationError'];
$FRErr=$_SESSION['FriendError'];
$GUErr=$_SESSION['GuestError'];
$RFRErr=$_SESSION['RFriendError'];
$RGUErr=$_SESSION['RGuestError'];
$EXErr=$_SESSION['ExpectationsError'];
$BErr=$_SESSION['BelongingsError'];
$AYErr=$_SESSION['AboutYouError'];
$WErr=$_SESSION['Weekend'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['Text1'])){
  	$FNErr = "Invalid Firstname.";
} else $Firstname = $_POST['Text1'];
}

?>


<div id="page-wrap" align="center">
	<!-- CENTER WHOLE DOC -->
	<img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo">
	<div align="center">
<br><img src="<?php echo 'uploadedPictures/'.$variable.'.jpg'?>" alt="No profile picture" width="150px" height="150px"><br>
	<br><a href="picture.php"><button id="submit">&#10094; Change Picture</button></a>
	</div>

	<form action="create_accountPHP.php" method="post">
		<!-- Table 1 -->
		<table id ="tableC"align="center" style="width: 60%">
				<tr>
				<td colspan="2" align="center"><h1 style="font-family:Ebrima">Please fill out your account preferences below:</h1>	</td>
				</tr>
			<!-- Second row = picture, YOG, class code -->
			<tr align="left">
				<td>
				<font id="error"><?php echo $FNErr?></font><br>
				<font id="question">First Name</font> <br>
				<input name="Text1" style="width: 254px; height: 40px;" type="text"> <br>
				<font id="error"><?php echo $LNErr?></font><br>
				<font id="question">Last Name</font><br>
				<input name="Text2" style="width: 254px; height: 41px;" type="text">
				</td>
				<td align="center">
				<p id="question">Year of Graduation</p>
				<select name="yog">
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="Graduate">Graduate</option>
				</select><br><br>
				<p id="question">Class Code</p>
				<select name="class_code">
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
				<td>
				<font id="error"><?php echo $AYErr?></font>
				<p id="question"><span class="auto-style2">About You (Major, Study 
				Abroad, Hobbies, etc.</span>)</p>
				<input id="answer" class="auto-style1" name="aboutyou" style="width: 447px; height: 121px" type="text">
				</td>
				<td align="left" colspan="1" rowspan="2" style="width: 366px; vertical-align: top;">
				<font id="error"><?php echo $LErr?></font>
				<p id="question" align="center">Preferred Location</p>
				<input id="answer" name="my_location[]" type="checkbox" value="Boylston">Boylston<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Collins">Collins<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Copley North">Copley 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Copley South">Copley 
				South<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone East">Falcone 
				East<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone North">Falcone 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Falcone West">Falcone 
				West<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Fenway">Fenway<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Forest">Forest<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Kresge">Kresge<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Miller">Miller<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Orchard North">Orchard 
				North<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Orchard South">Orchard 
				South<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Rhodes">Rhodes<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Slade">Slade<br>
				<input id="answer" name="my_location[]" type="checkbox" value="Trees">Trees</td>
			</tr>
			<!-- Third row = social media URLs -->
			<tr>
				<td><font id="question">Facebook 
				URL </font><br>
				<input id="question" name="facebook" style="width: 442px" type="text">
				<br><br><font id="question">LinkedIn URL</font><br>
				<input id="question" name="linkedin" style="width: 440px" type="text">
				<br><br><font id="question">Instagram URL </font> <br>
				<input id="question" name="instagram" style="width: 437px" type="text">
				</td>
			</tr>
			<!-- Fourth row = gender, athlete -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $GErr?></font>
				<p id="question">Gender</p>
				<input id="male" name="gender" type="radio" value="Male"><label for="male"><img alt="icon" height="100x" src="images/male%20icon.png" width="100px"></label>
				<input id="female" name="gender" type="radio" value="Female"><label for="female"><img alt="icon" height="100x" src="images/female%20icon.png" width="100px"></label>
				<input id="other" name="gender" type="radio" value="Other"><label for="other"><img alt="icon" height="100x" src="images/other%20icon.png" width="100px"></label></td>
				<td>
				<font id="error"><?php echo $AErr?></font>
				<p id="question">Are you a student athlete?</p>
				<input id="athlete" name="athlete" type="radio" value="Athlete"><label for="athlete"><img alt="icon" height="100x" src="images/athlete%20icon.png" width="100px"></label>
				<input id="nonathlete" name="athlete" type="radio" value="Non-Athlete"><label for="nonathlete"><img alt="icon" height="100x" src="images/non-athlete%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Second row = smoking, drinking -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $SErr?></font>
				<p id="question">Do you smoke?</p>
				<input id="smoker" name="smoker" type="radio" value="Smoker"><label for="smoker"><img alt="icon" height="100x" src="images/smoker%20icon.png" width="100px"></label>
				<input id="freqsmoker"smoker" type="radio" value="Casual Smoker"><label for="freqsmoker"><img alt="icon" height="100x" src="images/casual%20smoker%20icon.png" width="100px"></label>
				<input id="nonsmoker" name="smoker" type="radio" value="Non-Smoker"><label for="nonsmoker"><img alt="icon" height="100x" src="images/non-smoker%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $DErr?></font>
				<p id="question">Do you drink?</p>
				<input id="drinker" name="drinker" type="radio" value="Party Drinker"><label for="drinker"><img alt="icon" height="100x" src="images/party%20drinker%20icon.png" width="100px"></label>
				<input id="socialdrinker" name="drinker" type="radio" value="Social Drinker"><label for="socialdrinker"><img alt="icon" height="100x" src="images/social%20drinker%20icon.png" width="100px"></label>
				<input id="nondrinker" name="drinker" type="radio" value="Non-Drinker"><label for="nondrinker"><img alt="icon" height="100x" src="images/non-drinker%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Third row = study habits -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $STHErr?></font>
				<p id="question">How many hours a week do you study?</p>
				<input id="10hours" name="studyhours" type="radio" value="10hours"><label for="10hours"><img alt="icon" height="100x" src="images/10%20hours%20icon.png" width="100px"></label>
				<input id="5to10hours" name="studyhours" type="radio" value="5to10hours"><label for="5to10hours"><img alt="icon" height="100x" src="images/5to10hours%20icon.png" width="100px"></label>
				<input id="barelystudy" name="studyhours" type="radio" value="barelystudy"><label for="barelystudy"><img alt="icon" height="100x" src="images/barelystudy%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $SLErr?></font>
				<p id="question">Where do you prefer to study?</p>
				<input id="library" name="studylocation" type="radio" value="library"><label for="library"><img alt="icon" height="100x" src="images/library%20icon.png" width="100px"></label>
				<input id="dorm" name="studylocation" type="radio" value="dorm"><label for="dorm"><img alt="icon" height="100x" src="images/dorm%20icon.png" width="100px"></label>
				<input id="anywhere" name="studylocation" type="radio" value="anywhere"><label for="anywhere"><img alt="icon" height="100x" src="images/anywhere%20icon.png" width="100px"></label>
				</td>
			</tr> <!--fourth row = habits="" row="sleeping"-->
			<tr align="center">
				<td>
				<font id="error"><?php echo $SHErr?></font>
				<p id="question">What are your sleeping habits?</p>
				<input id="earlyriser" name="sleephours" type="radio" value="earlyriser"><label for="earlyriser"><img alt="icon" height="100x" src="images/earlyriser%20icon.png" width="100px"></label>
				<input id="10to12" name="sleephours" type="radio" value="10to12"><label for="10to12"><img alt="icon" height="100x" src="images/10to12%20icon.png" width="100px"></label>
				<input id="nightowl" name="sleephours" type="radio" value="nightowl"><label for="nightowl"><img alt="icon" height="100x" src="images/nightowl%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $STErr?></font>
				<p id="question">What type of sleeper are you?</p>
				<input id="lightsleeper" name="sleepertype" type="radio" value="lightsleeper"><label for="lightsleeper"><img alt="icon" height="100x" src="images/lightsleeper%20icon.png" width="100px"></label>
				<input id="averagesleeper" name="sleepertype" type="radio" value="averagesleeper"><label for="averagesleeper"><img alt="icon" height="100x" src="images/averagesleeper%20icon.png" width="100px"></label>
				<input id="heavysleeper" name="sleepertype" type="radio" value="heavysleeper"><label for="heavysleeper"><img alt="icon" height="100x" src="images/heavysleeper%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Fifth row = cleaning habits, weekend hobbies -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $CErr?></font>
				<p id="question">What are your cleaning habits?</p>
				<input id="cleanmachine" name="cleaning" type="radio" value="cleanmachine"><label for="cleanmachine"><img alt="icon" height="100x" src="images/cleanmachine%20icon.png" width="100px"></label>
				<input id="helpout" name="cleaning" type="radio" value="helpout"><label for="helpout"><img alt="icon" height="100x" src="images/helpout%20icon.png" width="100px"></label>
				<input id="messy" name="cleaning" type="radio" value="messy"><label for="messy"><img alt="icon" height="100x" src="images/messy%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $WErr?></font>
				<p id="question" align="center">How do you spend your weekends?</p>
				<input id="answer" name="weekend[]" type="checkbox" value="Going out with friends">Going 
				out with friends<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Netflix">Netflix<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Depends on homework">Depends 
				on homework<br>
				<input id="answer" name="weekend[]" type="checkbox" value="I go home">I 
				go home<br>
				<input id="answer" name="weekend[]" type="checkbox" value=" On campus events, clubs">On 
				campus events, clubs<br>
				<input id="answer" name="weekend[]" type="checkbox" value="Watching sports">Watching 
				sports<br></td>
			</tr>
			<!-- Sixth row = guest habits -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $FRErr?></font>
				<p id="question">How often do you have friends over?</p>
				<input id="friends_allthetime" name="friendsover" type="radio" value="friends_allthetime"><label for="friends_allthetime"><img alt="icon" height="100x" src="images/all%20the%20time%20icon.png" width="100px"></label>
				<input id="friends_sometimes" name="friendsover" type="radio" value="friends_sometimes"><label for="friends_sometimes"><img alt="icon" height="100x" src="images/sometimes%20icon.png" width="100px"></label>
				<input id="friends_notoften" name="friendsover" type="radio" value="friends_notoften"><label for="friends_notoften"><img alt="icon" height="100x" src="images/not%20often%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $GUErr?></font>
				<p id="question" align="center">How often do you have overnight 
				guests?</p>
				<input id="overnight_allthetime" name="overnightguest" type="radio" value="overnight_allthetime"><label for="overnight_allthetime"><img alt="icon" height="100x" src="images/all%20the%20time%20icon.png" width="100px"></label>
				<input id="overnight_sometimes" name="overnightguest" type="radio" value="overnight_sometimes"><label for="overnight_sometimes"><img alt="icon" height="100x" src="images/sometimes%20icon.png" width="100px"></label>
				<input id="overnight_notoften" name="overnightguest" type="radio" value="overnight_notoften"><label for="overnight_notoften"><img alt="icon" height="100x" src="images/not%20often%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Seventh row = roommate guest habits -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $RFRErr?></font>
				<p id="question">How do you feel about your roommate <br>hosting 
				social gatherings?</p>
				<input id="roommatefriends_allthetime" name="roommate_friendsover" type="radio" value="roommatefriends_allthetime"><label for="roommatefriends_allthetime"><img alt="icon" height="100x" src="images/whenever%20they%20want%20icon.png" width="100px"></label>
				<input id="roommatefriends_sometimes" name="roommate_friendsover" type="radio" value="roommatefriends_sometimes"><label for="roommatefriends_sometimes"><img alt="icon" height="100x" src="images/once%20in%20awhile%20icon.png" width="100px"></label>
				<input id="roommatefriends_notoften" name="roommate_friendsover" type="radio" value="roommatefriends_notoften"><label for="roommatefriends_notoften"><img alt="icon" height="100x" src="images/not%20comfortable%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $RGUErr?></font>
				<p id="question" align="center">How do you feel abouty our roommate<br>
				hosting overnight guests?</p>
				<input id="roommateovernight_allthetime" name="roommate_overnightguest" type="radio" value="roommateovernight_allthetime"><label for="roommateovernight_allthetime"><img alt="icon" height="100x" src="images/whenever%20they%20want%20icon.png" width="100px"></label>
				<input id="roommateovernight_sometimes" name="roommate_overnightguest" type="radio" value="roommateovernight_sometimes"><label for="roommateovernight_sometimes"><img alt="icon" height="100x" src="images/once%20in%20awhile%20icon.png" width="100px"></label>
				<input id="roommateovernight_notoften" name="roommate_overnightguest" type="radio" value="roommateovernight_notoften"><label for="roommateovernight_notoften"><img alt="icon" height="100x" src="images/not%20comfortable%20icon.png" width="100px"></label>
				</td>
			</tr>
			<!-- Eigth row = expectations, sharing -->
			<tr align="center">
				<td>
				<font id="error"><?php echo $EXErr?></font>
				<p id="question">What are your expectations?</p>
				<input id="friendship" name="expectations" type="radio" value="friendship"><label for="friendship"><img alt="icon" height="100x" src="images/friendship%20icon.png" width="100px"></label>
				<input id="connection" name="expectations" type="radio" value="connection"><label for="connection"><img alt="icon" height="100x" src="images/connection%20icon.png" width="100px"></label>
				<input id="respect" name="expectations" type="radio" value="respect"><label for="respect"><img alt="icon" height="100x" src="images/respect%20icon.png" width="100px"></label>
				</td>
				<td>
				<font id="error"><?php echo $BErr?></font>
				<p id="question" align="center">What is your comfort level sharing
				<br>personal belongings?</p>
				<input id="anytimeshare" name="sharing" type="radio" value="anytimeshare"><label for="anytimeshare"><img alt="icon" height="100x" src="images/anytimeshare%20icon.png" width="100px"></label>
				<input id="asktoshare" name="sharing" type="radio" value="asktoshare"><label for="asktoshare"><img alt="icon" height="100x" src="images/asktoshare%20icon.png" width="100px"></label>
				<input id="nosharing" name="sharing" type="radio" value="nosharing"><label for="nosharing"><img alt="icon" height="100x" src="images/no%20sharing%20icon.png" width="100px"></label>
				</td>
			</tr>
		</table>
		<br><br>
		<div align="center" style="height: 50px">
			<label for="submitbutton">
			<input id="submit" type="submit" name="submit" value="Create My Account" style="width: 194px; height: 44px"> </label>
		</div>
	</form>
</div>
</body>
</html>