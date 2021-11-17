<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <form action="/logout">
            <table border="1">
                
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>E-Mail</th>
                        <th>Profile</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Year of experience</th>
                        <th>Under Graduate</th>
                        <th>Post Graduate</th>
                    </tr>
                </thead>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{$user->email_id}}</td>
                        <td>{{$user->userdetail->profile_upload}}</td>

                        @foreach($educations as $education)
                            <td>{{$education->education}}</td>
                        @endforeach
                    
                    </tr>
                    @endforeach
                    
                <tbody>

                </tbody>
            </table>

            <table>
            <tr>
                    <td align="right"><input type="submit" class="btn btn-primary" value="Logoff"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>
    