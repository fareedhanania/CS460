<html>
<head>
<link rel="stylesheet" type="text/css" href="final.css">
<title>HorrorStories</title>
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
<a href="homepage.php"><img align="middle" alt="LOGO" src="images/Find%20a%20Falcon%20FINAL%20logo.png" title="Logo"></a>
<ul id="menu">
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
My roommate woke me up every morning because she had 8am classes. My schedule did not start until 12:30
and after being up until 2 in the morning (I liked to do my homework late) I was always exhausted during
day. I feel bad because I liked her as a person, but being a light sleeper there was few days during the
semester she did not wake me up in the morning. We were not very compatible<br><font style="color:blue; font-style:italic; font-weight:bold;" >-Anonymous</font></p><br>
</td></tr><tr><td align="center">
<p id="story">
Being a student athlete on campus we have crazy busy schdules in season. I have two practices a day, one at
5am and the other at 6pm. My roommate was not a student athlete so it was hard for him to understand the stress
of balancing my team and my academic work. He often made comments that I was a 'loser' for not going out
every weekend and just staying in to do homework. When us athletes are in season, partying is not a priority
for us. Sharing a room with someone who did not respect my values and habits was difficult.<br><font style="color:blue; font-style:italic; font-weight:bold;" >-Anonymous</font>
</p><br>
</td></tr><tr><td align="center">
<p id="story">
My roommate and I got along for the most part aside from late at night and on weekends. I wake up pretty early
in the morning and therefore tend to get to sleep earlier in the night. My roommate only was willing to study in
our dorm room instead of going to the library or student center. Him studying in our room late at night becuase he
went to bed very late made it difficult for me to fall asleep. When I brought up that the library is open until
2am, he simple said he can only focus at his desk. This habit continued on to weekend nights where I often like to
have my friends over. He expressed having my friends over and socially drinking made him uncomfortable and unproductive (
he didn't drink). It was a very late night and lonely semester for me.<br><font style="color:blue; font-style:italic; font-weight:bold;" >-Anonymous</font></p><br>
</td></tr><tr><td align="center"><p id="story">
I am a freshman female at Bentley. My first year my roommate and I simply did not get along. We argued over almost everything including
when we went to bed, cleaning our room, and having overnight guests. I had a boyfriend from home that my roommate did
not allow to come over even though I only had an overnight guest once in a while. She always complained that I was messy, 
which I admit in comparison to her cleaning habits I was. I was a night owl and she went to bed very early. Freshman year
classes can be difficult, but I only studied an average amount of time where she would be studying practically every
night of the week. She did not drink or smoke, which is fine I can respect that yet should could not understand my drinking or smoking
habits. I wasn't even looking for a best friend, I just wanted respect but our habits were too different to even make that work.
<br><font style="color:blue; font-style:italic; font-weight:bold;" >-Anonymous</font></p><br></td></tr>
</table>

<div id="popup">
<font id="formAnswer" style="font-style:italic">All submissions are posted anonymously.</font>
<form method="post" action="MAILTO:findafalcon@gmail.com?Subject=My%20Horror%20Story" enctype="text/plain">
<table style="width: 25%" align="center">
<tr><td id="formQuestion">To:</td></tr>
<tr><td id="formAnswer"><input type="text" value="findafalcon@gmail.com" name="Email" style="width: 340px"></td></tr>
<tr><td id="formQuestion">Subject:</td></tr>
<tr><td id="formAnswer"><input type="text" value="My Horror Story" name="Subject" style="width: 339px"></td></tr>
<tr><td id="formQuestion">Message:</td></tr>
<tr><td id="formAnswer">
	<input type="text" name="Message" style="width: 336px; height: 103px"></td></tr>
<tr><td align="center"><button id="submit" type="submit">Send</button></td></tr>
</table>
</form>
</div>
</div>
</body>
</html>