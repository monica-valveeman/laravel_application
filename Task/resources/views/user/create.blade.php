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
        <script type="text/javascript" src="{{asset('validation/validation1.js')}}"></script>
        <script type="text/javascript" src="{{asset('validation/validation2.js')}}"></script>
        <link rel="stylesheet" href="{{asset('CSS/design1.css')}}">
    </head>
    <body>
        <br><br><br>
        <div class="div1">
        <h1>Create User</h1>    
            <form id="userform" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
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
                        <td align="left">
                            <select name="state">
                                <option value="">---Select State---</option>
                                @foreach($states as $key=>$value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td align="right"><label>City:</label></td>
                        <td align="left"><select name="city">
                        </select></td>
                    </tr>

                    <tr>
                    <td align="right"><label>Year of experience:</label></td>
                    <td align="left">
                        <select name="year_of_experience">
                            <option value="">---Years---</option>
                            @foreach($years as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>

                    </td>
                </tr>

                <tr>
                    <td align="right"><label>Under Graduate(UG):</label></td>
                    <td align="left">
                        <select name="under_graduate">
                        <option value="">---UG Degrees---</option>
                            @foreach($UG as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td align="right"><label>Post Graduate(PG):</label></td>
                    <td align="left">
                        <select name="post_graduate">
                        <option value="">---PG Degrees---</option>
                            @foreach($PG as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                
                    
                    <tr>
                        <td></td>
                        <td align="left"><input type="submit" value="Submit"/></td>
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
                