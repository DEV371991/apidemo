<html>
    <head></head>
    <body>
        <div>
            <table>
                <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>contact</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </thead>
                 <tbody>
                            @foreach($data as $post)
                        <tr>
                            <td class="table-text">
                                <div>{{$post->id}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->email}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->contact}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->created_at}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$post->updated_at}}</div>
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                        

                
            </table>
        </div>
    </body>

</html>