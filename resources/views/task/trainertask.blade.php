<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    /* Optional custom styling */
    .custom-box {
      padding: 20px;
     
      height: 400px;
      width: 600px;
    }
    #p1{
      font-size:15px;
      margin-top:10px;
    }
    #i1{
      width: 30px;
      height: 20px;
    }
    #i2{
      width: 100px;
      height: 20px;
    }
    #p2{
      font-size:15px;
      margin-top:10px;
    }
    #i3{
      width: 302px;
      height: 43px;
    }
    #p3{
      font-size:15px;
      margin-top:10px;
      margin-left:17px;
    }
    #i4{
      width: 302px;
      height: 43px;
      margin-left:48px;
    }
    #p5{
      font-size:15px;
      margin-top:10px;
      margin-left:10px;
    }
    #p6{
      font-size:15px;
      margin-top:10px;
      margin-left:67px;
    }
    #p7{
      font-size:15px;
      margin-top:10px;
      margin-left:67px;
    }
    #i5{
      width: 100px;
      height: 20px;
      margin-left:10px;
    }
    #i6{
      width: 100px;
      height: 20px;
      margin-left:10px;
    }
    #i7{
      width: 100px;
      height: 20px;
      margin-left:67px;
    }

  </style>
</head>
<body>
    <div class="container-fluid">
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
<form action="{{ route('task.filter') }}" method="GET">
    <label for="date">Filter by Date:</label>
    <input type="hidden" name="id" value="{{$trainer->id}}" >
    <input type="date" id="date" name="date" class="form-control">
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
    @foreach($trainer->tasks as $trainers)
    <tr>
     
      <td>{{$trainers->name}}</td>
      <td>{{ $trainers->date }}</td>
      <td>{{ $trainers->chat_count }}</td>
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
        
       
       
          
         
          <div class="row">
          @foreach($trainer->tasks as $trainers)
          <div class="col-md-4  d-flex">
        <div class="border border-primary custom-box">
          <div class="row">
        <div class=" d-flex align-items-center"><p id="p1" >1.<b>chat count</b></p> <input type="text" id="i1" value="{{$trainers->chat_count}}"></div>
       </div>
       <div class="row">
       <div class=" d-flex align-items-center">2<p id="p5" ><b>Batch</b></p> 
       <p id="p6" ><b>Monitoring Call</b></p> 
       <p id="p7" ><b>Call Connected</b></p>
      </div>
      <div class=" d-flex align-items-center"> <input type="text" id="i5" value="{{$trainers->batch}}">
        <input type="text" id="i6" value="{{ $trainers->call }}">
        <input type="text" id="i7" value="{{ $trainers->call_connected }}">
      </div>
      <div class=" d-flex align-items-center"><p id="p1" ><b>3.Task Assigned</b> </p> <input type="text" id="i3" value="{{ $trainers->task_assigned }}"></div>
      <div class=" d-flex align-items-center"><p id="p2" ><b>4.webinar</b></p> <input type="text" id="i2" value="{{ $trainers->webinar }}">
       <p id="p3" ><b>Live Class</b></p> <input type="text" id="i2" value="{{ $trainers->live_class }}">
       
      </div>
      <div class=" d-flex align-items-center"><p id="p1" ><b>5.Status </b></p> <input type="text" id="i4" value="{{ $trainers->status }}"></div>
      <div class=" d-flex align-items-center mt-1"><p id="p1" ><b>6.Self Learning</b> </p> <input type="text" id="i3" value="{{ $trainers->self_learning }}"></div>
       </div>
        </div>
  </div>
  
        @endforeach
  </div>
  </div>
  

       
  
</body>
</html>