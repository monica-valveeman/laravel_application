<html>
    <body>
        <table border="1px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Mark 1</td>
                    <td>Mark 2</td>
                    <td>Mark 3</td>
                </tr>
            </thead>
            <tbody>
                @foreach($cruds as $crud)
                <tr>
                    <td>{{$crud->id}}</td>
                    <td>{{$crud->name}}</td>
                    <td>{{$crud->mark1}}</td>
                    <td>{{$crud->mark2}}</td>
                    <td>{{$crud->mark3}}</td>
                    <td>{{$crud->course}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>