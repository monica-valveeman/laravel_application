<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('design.css')}}">
    </head>
    <body>
        <form action="{{ route('course.store')}}" method="post">
            <table>
                <tr>
                    <td align="right"><label>Course name</label></td>
                    <td align="left"><input type="text" name="cname"/></td>
                </tr>
                <tr>
                    <td align="right"><label>Student Id</label></td>
                    <td align="left"><input type="text" name="s_id"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body> 
</html>

<ul>
    @foreach($errors->all() as $error)
    <li class="error">{{ $error }}</li>
    @endforeach
</ul>
                