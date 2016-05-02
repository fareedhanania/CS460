<html>
<head>
<link rel="stylesheet" type="text/css" href="final.css">
<title>SuccessStories</title>
</head>
<?php
session_start();
  if(!isset($_SESSION['UserName']) && !isset($_SERVER['login'])){ 
      header("Location: index.php"); }
$variable = $_SESSION['UserName']; 
?>
<body>
<div id="page-wrap" align="center">
<!-- CENTER WHOLE DOC -->
<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a><ul id="menu">
<li><a href="homepage.php">HOME</a></li>
<li><a href="UsersILike.php">MY LIKES</a></li>
<li><a href="account.php" >MY PROFILE</a></li>
<li><a href="aboutus.php" style="color: #4E79CB">ABOUT US </a></li>
<li><a href="logout.php">LOGOUT</a></li>
</ul>

<table width="60%" align="center">
<tr><td align="center">
<a href="#popup"><button id="submit">Contribute Story</button></a><br><br>
</td></tr><tr><td align="center">
<p id="story">
I had a lot of problems freshman year with my roommate situation. After using roommate finder this year I have had great sucess using the website. It is easy to use and I was able to find students
who had similar preferences and habits that I do. After liking a few profiles, I sent them a message asking to meet up. I hit it off with one girl in particular! We went into the roommate contract
with the expectation we would be respectful and see our connection. We have ended up becoming great friends. We both help out with cleaning, can study anywhere, adn are usually in bed between
10pm and midnight. I have really had a great experience using Find A Falcon and I would definitely recommend it!.<br><font style="color:blue; font-style:italic; font-weight:bold;" >-Julie S., Sophomore</font></p><br>
</td></tr><tr><td align="center">
<p id="story">
Because I am a student athlete on campus and spend a lot of time on lower campus, especially in the Dana Center, location was a huge priority for me. I had the option to live with some closer friends
on main campus, but I knew the daily walk down to lower, especially in the winter with all my sports gear would stink. So I used Find A Falcon to search for another Athlete who also wanted to live on
lower campus. I ended up finding one guy on my team and two guys on another sports team that had similar habits and preferences. We have had great success as roommates, always helping with cleaning
and being respectful of each other's guest preferences. <br><font style="color:blue; font-style:italic; font-weight:bold;" >-Jason L., Junior</font></p><br>
</td></tr><tr><td align="center">
<p id="story">
I have had issues in the past with roommates partying and drinking constantly in our room underage which caused problems for me judicially with Res Life. I really liked them as people, but being in the
Honors program means I have more work than the average student. My main priority was to find a roommate that was respectful, did not have friends over often, and did not drink or smoke. Using the filters
I found multiple options for housing arrangements and messaged three different people before my current roommate and I decided we were a good fit. We have had little to no problems and I have not been in
trouble with Res Life since! <br><font style="color:blue; font-style:italic; font-weight:bold;" >-Jen, Sophomore</font></p><br>
</td></tr><tr><td align="center"><p id="story">
Junior year most of my friends decided to go abroad, which is an awesome experience. We were hoping that our placement would work out so we could easily swap when our friends came and went in Fall and Spring.
However there were only 2 out of 6 girls that got Spring study abroad so we were at a loss when it came to housing in the Fall. Using Find A Falcon I created a profile and searched for others compatible with my preferences.
I was surprised by how many other people were looking for roommates, but I know junior year is huge for study abroad. My friend and I found two other girls and not only have we gotten along great, but we have
become great friends, I will be sad to leave them! Find A Falcon is a definite recommend. <br><font style="color:blue; font-style:italic; font-weight:bold;" >-Stephanie J., Junior</font></p><br></td></tr>
</table>

<div id="popup">
<form method="post" action="MAILTO:findafalcon@gmail.com?Subject=My%20Horror%20Story">
<table style="width: 25%" align="center">
<tr><td id="formQuestion">To:</td></tr>
<tr><td id="formAnswer"><input type="text" value="findafalcon@gmail.com" name="email" style="width: 340px"></td></tr>
<tr><td id="formQuestion">Subject:</td></tr>
<tr><td id="formAnswer"><input type="text" value="My Success Story" name="subject" style="width: 339px"></td></tr>
<tr><td id="formQuestion">Message:</td></tr>
<tr><td id="formAnswer">
	<input type="text" name="message" style="width: 336px; height: 103px"></td></tr>
<tr><td align="center"><button id="submit" type="submit"> <!--onclick="<?php mail('to','subject','message')?>-->Send</button></td></tr>
</table>
</form>
</div>
</div>
</body>
</html>