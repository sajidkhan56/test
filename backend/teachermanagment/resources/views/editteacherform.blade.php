<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
    </head>
    <body>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <form action="/editteacherdetails" method="post">
            @csrf
                <input type="hidden" name="id" value="{{ $teacher_record->id }}" />
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Teacher Detail</h5>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input class="form-control" type="text" placeholder="Name" name="name" value="{{ $teacher_record->name}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Qualification:</label>
                                    <div class="input-group"> 
                                        <select name="qualification" class="form-control" required>
                                        <option value="Secondary" {{($teacher_record->qualification == 'Secondary')? 'selected':'' }}>Secondary</option>
                                        <option value="Bachelors Pass" {{($teacher_record->qualification == 'Bachelors Pass')? 'selected':'' }}>Bachelors Pass</option>
                                        <option value="Bachelor degree (Pass/Honours)" {{($teacher_record->qualification == 'Bachelor degree (Pass/Honours)')? 'selected':'' }}>Bachelor's degree (Pass/Honours)</option>
                                        <option value="Master degree" {{($teacher_record->qualification == 'Master degree')? 'selected':'' }}>Master's degree</option>
                                        <option value="PHD degree" {{($teacher_record->qualification == 'PHD degree')? 'selected':'' }}>PHD degree</option>
                                        <option value="Others" {{($teacher_record->qualification == 'Others')? 'selected':'' }}>Others</option>
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
                                        <input class="form-control" type="time" value="{{ $teacher_record->start_timing }}" name="start_time" required> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>End Time:</label>
                                    <div class="input-group"> 
                                        <input class="form-control" type="time" value="{{ $teacher_record->end_timing }}" name="end_time" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block confirm-button">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
