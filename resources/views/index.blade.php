<html>
    <head><title> Registration From</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="container">
    <div class="form-group col-12 p-0">
    <div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
    </div>
    <form  action="{{route('store')}}" method="POST"  >
        @csrf
        <div class="form-group">
            <div class="col-sm-12">
                <h2 style="text-align: center;color:blue">Student Details</h2>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="form-group col-md-6">
              <label>Student Name</label>
              <input type="text" name="studname" class="form-control" id="studname" placeholder="Student Name">
            </div>
            <div class="form-group col-md-6">
              <label>Course</label>
              <input type="text" name="course" class="form-control" id="course" placeholder="Course">
            </div>
            <div class="form-group col-md-6">
              <label>Fee</label>
              <input type="text" name="fee" class="form-control" id="fee" placeholder="Fee">
            </div>
            <div class="form-group col-md-6" align="center">
              <button class="btn btn-success" style="width: 80px;">Submit</button>
            </div>
          </div>
          
    </form>
    <div>

    </div>

</body>
        </html>