<html>
    <body>
    <form method="post" action="/validate">
        <label>Username</label>
        <input type="text" name="name"/><br><br>
        <label>Password</label>
        <input type="password" name="pass"/><br><br>
        <input type="submit" value="Submit"/>
    </form>
</body>
</html>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

