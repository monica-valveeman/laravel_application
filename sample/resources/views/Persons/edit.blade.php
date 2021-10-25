<html>
    <head>
        <link rel="stylesheet" href="{{asset('design.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <br><br>
    <div class="container1">
        <h4>Edit a Record</h4>
        <form method="POST" action="{{ route('Persons.update',$persons->id)}}" enctype="multipart/form-data">

@method('PUT')

@csrf
            <table class="table1">
            <tr>
                <td align="left">
                     <ul>
                     @foreach($errors->all() as $error)
                     <li class="error">{{ $error }}</li>
                     @endforeach
                    </ul>
                </td>
            </tr>
            
                <tr>
                    <td align="right"><label>First Name: </label></td>
                    <td align="left"><input type="text" name="FirstName" value="{{$persons->FirstName}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label>Last Name: </label></td>
                    <td align="left"><input type="text" name="LastName" value="{{$persons->LastName}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label>E-mail: </label></td>
                    <td align="left"><input type="text" name="mail" value="{{$persons->mail}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label>Choose a Image: </label></td>
                    <td align="left"><input type="file" name="img" value="{{$persons->img}}"/></td>
                </tr>
                    <td></td><td align="left"><input type="Submit" class="btn btn-success" value="Save"/></td>
            
            </table>
        </form>
    </div>
</body>
</html>

