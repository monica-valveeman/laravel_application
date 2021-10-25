<!DOCTYPE html>
<html>
    <body>
        <form method="POST" action="{{ route('student.store')}}">
            <label>Name:</label>
            <input type="text" name="name"/><br><br>
            
            <label>Mark 1:</label>
            <input type="text" name="mark1"/><br><br>
            
            <label>Mark 2:</label>
            <input type="text" name="mark2"/><br><br>
            
            <label>Mark 3:</label>
            <input type="text" name="mark3"/><br><br>

            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>



<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>