<!DOCTYPE html>
<html>
<head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('validation/validation2.js')}}"></script>

    </head>
    <body>
        <h1>Education Details</h1>
        <form id="educationform" action="/education" method="POST">
            <table>
                <tr>
                    <td align="right"><label>Year of experience:</label></td>
                    <td align="left"><select name="year_of_experience">
                    </select></td>
                </tr>
                
                <tr>
                    <td align="right"><label>Under Graduate(UG):</label></td>
                    <td align="left"><select name="under_graduate">
                    </select></td>
                </tr>
                <tr>
                    <td align="right"><label>Post Graduate(PG):</label></td>
                    <td align="left"><select name="post_graduate">
                   
                    </select></td>
                </tr>
                <tr>
                    <td align="right"><label>User Id:</label></td>
                    <td align="left"><input type="text" name="user_id"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"><input type="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>