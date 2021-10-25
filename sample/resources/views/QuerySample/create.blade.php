<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
        <script type="text/javascript" src="{{asset('validation/valid.js')}}"></script>
        <script type="text/javascript" src="{{asset('validation/addCss.js')}}"></script>
   </head>
    <body>
        
        <form method="POST" id="queryform" action="{{ route('Querysamp.store')}}">
            <label>Name:</label>
            <input type="text" name="name"/><br><br>

            
            <label>E-Mail: </label>
            <input type="text" name="email" class="keyup-email" value=""/><br><br>

            <label>Dropdown</label>
            <select name="dd" id="dd">
            </select>
            
            <input type="submit" value="Submit" id="button"/>
        </form>
    </body>
</html>
