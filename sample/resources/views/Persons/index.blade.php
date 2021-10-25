<html>
    <head>
    <link rel="stylesheet" href="{{asset('design.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <br>
    <p class="list"><button type="submit" class="btn btn-light"><a href="/Persons/create">Add New Person</a></button></p>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persons as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td>{{$person->FirstName}}</td>
                    <td>{{$person->LastName}}</td>
                    <td>{{$person->mail}}</td>
        
                    <td><img src="./laravelpictures/{{$person->img}}" height="40" width="40"/></td>
                    <td>
                        <form action="{{ route('Persons.edit',$person->id)}}">
                        <button type="submit">Edit</button></a>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('Persons.destroy',$person->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>