<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form Page</title>
</head>

<body>
<!--Menu pindah halaman-->
<div>
	<a href="index.html">Home</a>
	<a href="form.html">Form</a>
	<a href="welcome.html">Welcome</a>
</div>

<h1>Buat Account Baru!</h1>

<h2>Sign Up Form</h2>

<form action="/welcome" method="POST">


	<fieldset>
		<legend> User Name </legend>
	<div>
		<label for="first_name">First name:</label>
		<br>
		<input type="text" id="first_name">
		<br><br>
		<label for="last_name">Last name:</label>
		<br>
		<input type="text" id="last_name">
		<br>
	</div>
	</fieldset><br><br>

<fieldset>
	<legend> User Identity </legend>
	<div>
		<label>Gender:</label>
		<br>
		<input type="radio" name="gender_user" value="1">Male <br>
		<input type="radio" name="gender_user" value="2">Female <br>
		<input type="radio" name="gender_user" value="3">Other <br>
		<br>
	</div>
	<div>
		<label>Nationality:</label>
		<br>
		<select>
			<option value="indonesia">Indonesia</option>
			<option value="amerika">Amerika</option>
			<option value="eldia">Eldia</option>
			<option value="akatsuki">Akatsuki</option>
		</select>
		<br><br>
	</div>
	<div>
		<label>Languange Spoken:</label>
		<br>
		<input type="checkbox" name="languange_user" value="1">Bahasa Indonesia <br>
		<input type="checkbox" name="languange_user" value="2">English <br>
		<input type="checkbox" name="languange_user" value="3">Other <br>
	</div>
</fieldset><br><br>

<fieldset>
	<legend>User Biography</legend>
	<div>
		<label for="bio">Bio:</label>
		<br>
		<textarea rows="7" cols="20"></textarea>
	</div>
</fieldset><br>

<input type="submit" value="Sign Up">

</form>


</body>
</html>
