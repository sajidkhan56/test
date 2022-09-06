<html>
    <head>     
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
         integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    </head>
    <body>
        <h4>Teacher's List <a href="addschedule"><button class="btn btn-primary last"><i class="fas fa-plus"></i>Add Schedule</button></a><a href="addteacher"><button class="btn btn-primary last"><i class="fas fa-plus"></i>Add Teacher</button></a></h4>
        <div class="msg">
            @if (Session::has('msg'))
                <div class="alert alert-info">{{ Session::get('msg') }}</div>
            @endif
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">Timing</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teacher_list as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->qualification }}</td>
                        <td>{{ $value->start_timing }}-{{ $value->end_timing }}</td>
                        <td>
                            <a href="editteacher/{{ $value->id }}"><button class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i>Edit</button></a>
                            <a href="deleteteacher/{{ $value->id }}"><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>