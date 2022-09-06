<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <form action="/teacherschedule" method="post">
            @csrf
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teacher Schedule</h5>
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                                    <label>Teacher Name:</label>
                                    <div class="input-group"> 
                                        <select name="name" class="form-control" required>
                                        @foreach($teachers_names as $key => $value)
                                            <option value="{{ $value->name }}">{{ $value->name }}</option>
                                         @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                                    <label>Class:</label>
                                    <div class="input-group"> 
                                        <select name="class" class="form-control" required>
                                        <option value="VI">VI</option>
                                        <option value="VII">VII</option>
                                        <option value="VIII">VIII</option>
                                        <option value="IX">IX</option>
                                        <option value="X">X</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Subject:</label>
                                    <div class="input-group"> 
                                        <select name="subject" class="form-control" required>
                                        <option value="Maths">Maths</option>
                                        <option value="Physics">Physics</option>
                                        <option value="Chemistry">Chemistry</option>
                                        <option value="Biology">Biology</option>
                                        <option value="English">English</option>
                                        <option value="Urdu">Urdu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Start Time:</label>
                                    <div class="input-group"> 
                                        <input class="form-control" type="time" value="08:30:00" name="start_time" required> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>End Time:</label>
                                    <div class="input-group"> 
                                        <input class="form-control" type="time" value="12:30:00" name="end_time" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block confirm-button">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
