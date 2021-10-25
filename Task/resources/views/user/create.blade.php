<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>Create User</h1>
            <form action="{{route('user.store')}}" method="POST">
                <table>
                    <tr>
                        <td align="right"><label>First Name:</label></td>
                        <td align="left"><input type="text" name="firstname"/>
                    </tr>
                    <tr>
                        <td align="right"><label>Last Name:</label></td>
                        <td align="left"><input type="text" name="lastname"/>
                    </tr>
                    <tr>
                        <td align="right"><label>E-Mail Id:</label></td>
                        <td align="left"><input type="text" name="email_id"/>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left"><input type="submit" value="Submit"/>
                    </tr>
                </table>
    </body>
</html>

                