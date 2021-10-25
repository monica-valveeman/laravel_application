<html>
    <body>
        <table border="1px">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>E-Mail</td>
                </tr>
            </thead>
            <tbody>
                @foreach($query as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>