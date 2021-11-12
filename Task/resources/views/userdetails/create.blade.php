<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{{asset('validation/validation1.js')}}"></script>
        <link rel="stylesheet" href="{{asset('CSS/design1.css')}}">
    </head> 
    <body>
        <br><br><br>
        <div class="div1">
        <h1>User Details</h1>   
            <form id="userdetailform" action="{{route('userdetails.store')}}" method="POST" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td align="right"><label> Profile Upload:</label></td>
                        <td align="left"><input type="file" name="profile_upload"/></td>
                    </tr>
                    <tr>
                        <td align="right"><label> Date of Birth:</label></td>
                        <td align="left"><input type="date" name="date_of_birth"/></td>
                    </tr>
                    <tr>
                        <td align="right"><label>Address:</label></td>
                        <td align="left"><textarea name="address"></textarea></td>
                    </tr>
                    <tr>
                        <td align="right"><label>State:</label></td>
                        <td align="left"><select name="state">
                            <option value="">---Select State---</option>
                            @foreach($states as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select></td>
                    </tr>
                    <tr>
                        <td align="right"><label>City:</label></td>
                        <td align="left"><select name="city">
                        </select></td>
                    </tr>

                    <tr>
                        <td align="right"><label>User_id:</label></td>
                        <td align="left"><input type="text" name="user_id"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="left"><input type="submit" value="Submit"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

