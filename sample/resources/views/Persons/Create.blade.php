<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{asset('design.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <p class="list"><button type="submit" class="btn btn-light"><a href="/Persons">Person's List</a></button></p>
        <div class="container1">
        <div class="cont">   
        <h4>Create Person</h4>
        <p id="req"><span>*</span>-Required</p></div>
        <table class="table1">
            <form method="POST" action="{{ route('Persons.store')}}" enctype="multipart/form-data">
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
                    <td align="right"><label><span>*</span>First Name: </label></td>
                    <td align="left"><input type="text" name="FirstName" value="{{old('FirstName')}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label><span>*</span>Last Name: </label></td>
                    <td align="left"><input type="text" name="LastName" value="{{old('LastName')}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label><span>*</span>E-mail: </label></td>
                    <td align="left"><input type="text" name="mail" value="{{old('mail')}}"/></td>
                </tr>
                <tr>
                    <td align="right"><label><span>*</span>Choose a Image: </label></td>
                    <td align="left"><input type="file" name="img" value="{{old('img')}}"/></td>
                </tr>
                    <td></td><td align="left"><input type="Submit" class="btn btn-success" value="Save"/></td>
            </form>
        </table>
</div>

    </body>
</html>


