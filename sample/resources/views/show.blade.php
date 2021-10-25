<html>
    <body>
        <table border="1">
            <tbody>
                @foreach($cruds as $crud)
                <tr>
                    <td>$crud->course->id</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>