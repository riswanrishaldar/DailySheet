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
                <h3 class="text-primary">ADD REPORT HERE</h3>
            <form action="{{ route('store.task') }}" method="post" >
            @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text"  name="name" class="form-control" value="{{$trainer->name}}">
   
  </div>
  
   
    <input type="hidden"  name="id" class="form-control" value="{{$trainer->id}}">
   
  
  <div class="mb-3">
    <label  class="form-label">Date</label>
    <input type="date" name="date" class="form-control" >
</div>
<div class="mb-3">
    <label  class="form-label">Chat Count</label>
    <input type="text" name="chat_count" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Batch</label>
    <input type="text" name="batch" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Call</label>
    <input type="text" name="call" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Call Connected</label>
    <input type="text" name="call_connected" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Task Assigned </label>
    <input type="text" name="task_assigned" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Webinar</label>
    <input type="text" name="webinar" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Live Class</label>
    <input type="text" name="live_class" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Status</label>
    <input type="text" name="status" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Self Learning</label>
    <input type="text" name="self_learning" class="form-control" >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
</body>
</html>