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
            <div class="col-md-3">
                <a href="{{ route('create.trainer') }}" class="btn btn-primary">Add Trainer</a>
                <a href="{{ route('all.report') }}" class="btn btn-primary">View All Sheet</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4"></div>
            <div class="col-md-5">
            <table class="table table-success table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Department</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($trainer as $trainers)
    <tr>
     
      <td>{{$trainers->name}}</td>
      <td>{{ $trainers->designation }}</td>
      <td>{{ $trainers->department }}</td>
      <td>
        
        <a href="{{ route('add.report',$trainers->id) }}" class="btn btn-success btn-sm">Add Daily Sheet</a>
        <a href="{{ route('task.trainer',$trainers->id) }}" class="btn btn-secondary btn-sm">View Daily Sheet</a>
        <a href="{{ route('trainer.edit',$trainers->id)}}" class="btn btn-success" >Edit</a>
        <form action="{{ route('trainer.destroy', $trainers->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?')">Delete</button>
    </form>
      </td>
    </tr>
    @endforeach
  
   
  </tbody>
</table>
            </div>
        </div>
    </div>
</body>
</html>