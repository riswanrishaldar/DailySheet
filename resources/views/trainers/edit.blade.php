<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-5"></div>
            <div class="col-md-5 mt-3" >
                <h3 class="text-primary">ADD TRAINER HERE</h3>
            <form action="{{ route('update.trainer',$trainer->id) }}" method="post" >
            @csrf
            @method('PUT')
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text"  name="name" class="form-control" value="{{$trainer->name}}">
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Designation</label>
    <input type="text" name="designation" class="form-control" value="{{$trainer->designation}}" >
</div>
<div class="mb-3">
    <label  class="form-label">Department</label>
    <input type="text" name="department" class="form-control" value="{{ $trainer->department }}" >
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>