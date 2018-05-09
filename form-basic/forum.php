<!Doctype Html>
<html>
<head>
<title> Sign up! </title>
<link href="styles-main.css" rel="stylesheet"
</head>

<body>
<div id="header"><img scrc="img/ph-header2.png" width="739" height="135"></div>
 <div id="topLine"></div>
 <div id="mainContent"></div>

 <h1> Hello The Inside! </h1>

 <form action="form-action.php" method="post" name="signup"
 <h2> Contact Info </h2>
<p>
 <label for="name"> Name: </label>
 <input name="name"> type="text" id="name" size="60"
<label for="name"> Name: </label>
 <input name="email"> type="text" id="email" size="60"
</p>
<h2> Your Interests </h2>

<p>
 Experience Level:<br>
 <label><input name="level" type="radio" id="expert" value="expert">
Expert</label>

<label><input name="level" type="radio" id="decent" value="decent">
</p>
<p>
  What do you read?
  <br>

  <label><input name+"publications []" type="checkbox" id="publications_drf" value="buzzfeed" > BuzzFeed</label>
  <br><label><input name+"publications []" type="checkbox" id="publications_elle" value="Reddit" > Reddit</label>
</p>
<p>
Fun stuff: <br>

 <select name="howoftentrack" id="howoftenrack">
<option value="daily">Weekly Highlights</option>
<option value="yearly">GIFs</option>
<option value="email-reminds">Forgotten Emails</option>
</select>
</p>

<p> Tell us about yourself! <br>
<textarea name="comments" id="comments" cols="52" rows="5">
</textarea>
</p>
<input
