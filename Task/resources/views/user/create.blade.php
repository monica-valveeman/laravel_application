<!DOCTYPE html>
<html>
    <head>
        <?php
        //<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('validation/validation.js')}}"></script>
        <link rel="stylesheet" href="{{asset('CSS/design1.css')}}">
    </head>
    <body>
        <br><br><br>
        <div class="div1">
        <h1>Create User</h1>    
            <form id="userform" action="{{route('user.store')}}" method="POST">
                <table>
                    <tr>
                        <td align="right"><label>First Name:</label></td>
                        <td align="left"><input type="text" class="fname" name="firstname"/>
                    </tr>
                    <tr>
                        <td align="right"><label>Last Name:</label></td>
                        <td align="left"><input type="text" class="lname" name="lastname"/>
                    </tr>
                    <tr>
                        <td align="right"><label>E-Mail Id:</label></td>
                        <td align="left"><input type="text" class="email" name="email_id"/>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left"><input type="submit" value="Submit"/>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left"><p>Already have an account?<a href="/login">Login here..</a></p></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<ul>
        @foreach($errors->all() as $error)
        <li class="error">{{ $error }}</li>
        @endforeach
</ul>
                