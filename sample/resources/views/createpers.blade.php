<html>

<body>
<form method="POST" action="{{ config('app.url')}}/person">
<label> Name:</label>
<input type="text" name="name"/><br><br>
<label>Age: </label>
<input type="number" name="age"/><br><br>

<input type="submit" value="Submit"/>
</form>
</body>
</html>
