<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>         
        <form action="/logout">
            <table border="1">
                
            <h1>Users</h1>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>E-Mail</th>
                        <th>Profile</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>City</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        
                        <td>{{$user->registerusers->id}}</td>
                        <td>{{$user->registerusers->firstname}}</td>
                        <td>{{$user->registerusers->lastname}}</td>
                        <td>{{$user->registerusers->email_id}}</td>
                        <td>{{$user->profile_upload}}</td>
                        <td>{{$user->address}}</td>
                        <td>{{$user->state}}</td>
                        <td>{{$user->city}}</td>
                    </tr>
                    @endforeach
                </table>
                <table border="1"> 
                    <tr>
                        <th>Id</th>
                        <th>Year of experience</th>
                        <th>Under Graduate</th>
                        <th>Post Graduate</th>
                    </tr>
                        
                    @foreach($educations as $education)
                    <tr>
                        <td>{{$education->user_id}}</td>
                        <td>{{$education->year_of_experience}}</td>
                        <td>{{$education->under_graduate}}</td>
                        <td>{{$education->post_graduate}}</td>
                    </tr>
                    @endforeach
                </table>

                <table>
                    <tr>
                        <td align="right"><input type="submit" class="btn btn-primary" value="Logoff"/></td>
                    </tr>
                </table>
            </form>
    </body>
</html>
    