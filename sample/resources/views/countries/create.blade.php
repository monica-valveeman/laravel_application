<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('design.css')}}">
    </head>
    <body>
        <form action="{{ route('country.store')}}" method="POST">
            <table>
                <tr>
                    <td align="right"><label>Country name:</label></td>
                    <td align="left"><input type="text" name="name"/>
                </tr>
                <tr>
                    <td align="right"><label>Countrystuc_id:</label></td>
                    <td align="left"><input type="text" name="countrystuc_id"/>
                </tr>
                <tr>
                    <td align="right"><label>Countrystuc_type:</label></td>
                    <td align="left"><input type="text" name="countrystuc_type"/>
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