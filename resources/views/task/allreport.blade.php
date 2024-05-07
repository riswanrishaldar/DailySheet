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
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-3 mt-3">
               <a href="{{ route('all.trainers') }}" class="btn btn-primary" >Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4">
                <!-- resources/views/posts/filter.blade.php -->
<form action="{{ route('task.allfilter') }}" method="GET">
    <label for="date">Filter by Date:</label>
   
    <input type="date" id="date" name="date" class="form-control mb-1">
    <button type="submit" class="btn btn-success">Filter</button>
</form>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2"></div>
            <div class="col-md-5">
            <table class="table table-success table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">chat</th>
      <th scope="col">Batch</th>
      <th scope="col">call</th>
      <th scope="col">Call Connected</th>
      <th scope="col">Task Assigned</th>
      <th scope="col">Webinar</th>
      <th scope="col">Live Class</th>
      <th scope="col">Status</th>
      <th scope="col">Self Learning</th>

      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($task as $trainers)
    <tr>
     
      <td>{{$trainers->name}}</td>
      <td>{{ $trainers->date }}</td>
      <td>{{ $trainers->chat }}</td>
      <td>{{ $trainers->batch }}</td>
      <td>{{ $trainers->call }}</td>
      <td>{{ $trainers->call_connected }}</td>
      <td>{{ $trainers->task_assigned }}</td>
      <td>{{ $trainers->webinar }}</td>
      <td>{{ $trainers->live_class }}</td>
      <td>{{ $trainers->status }}</td>
      <td>{{ $trainers->self_learning }}</td>
      <td>Action</td>
    
     
    </tr>
    @endforeach
  
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>