<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('CSS/design1.css')}}">
    </head>
    <body>
        <br><br><br>
        <div class="div1">
        <h1>Login</h1>
        <form action="/post_login" method="POST">
            <table>
                <tr>
                    <td align="right"><label>E-Mail:</label></td>
                    <td align="left"><input type="text" id="email" name="email_id"/>
                </tr>
                <tr>
                    <td align="right"><label>Password:</label></td>
                    <td align="left"><input type="password" id="password" name="password"/>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"><input type="submit" value="Submit"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"><p>Don't have an account?<a href="/user/create">Sign Up</a></p></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>