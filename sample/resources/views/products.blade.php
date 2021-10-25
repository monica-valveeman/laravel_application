<html>
    <body>
        <h1>Products Details</h1>
        <p>Name: Notebook</p>
        <form method='post'>
            @csrf
            <label>Name: </label>
            <input type="text" id="name"/><br><br>
            <label>Age: </label>
            <input type="number" id="age"/><br><br>
            <input type="submit" value="Submit"/>
</body>
</html>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>